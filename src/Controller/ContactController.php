<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Factory\ContactFactory;
use App\Form\Type\ContactType;
use App\Repository\ContactRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    private ContactRepository $contactRepository;

    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    /**
     * @Route ("/")
     */
    public function table()
    {
        return $this->render('base.html.twig');
    }

    /**
     * @Route ("/contacts/create")
     */
    public function createContact(Request $request): Response
    {
       $contact = new Contact();

       $form = $this->createForm(ContactType::class, $contact);
       $form->handleRequest($request);

       if($form->isSubmitted()){
           $contact = ContactFactory::createFromForm($form);
           $this->contactRepository->save($contact);

           $this->addFlash('success', "User was successfully created!");
       }

       return $this->renderForm('form.html.twig', [
           'form' => $form,
       ]);
    }

}