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
       $form = $this->createForm(ContactType::class);
       $form->handleRequest($request);

       if($form->isSubmitted() && $form->isValid()){
           $contact = ContactFactory::createFromForm($form);
           $this->contactRepository->save($contact);

           $this->addFlash('success', "User was successfully created!");

           return $this->redirectToRoute('contacts');
       }

       return $this->renderForm('form.html.twig', [
           'form' => $form,
       ]);
    }

    /**
     * @Route("/contacts", name="contacts")
     */
    public function contactsList()
    {
        $contacts = $this->contactRepository->findAll();

        return $this->render("contacts-list.html.twig", [
            'contacts' => $contacts,
        ]);
    }
}