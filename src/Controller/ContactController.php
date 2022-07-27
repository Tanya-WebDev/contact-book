<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Factory\ContactFactory;
use App\Form\Type\ContactType;
use App\Repository\ContactRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
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
     * @Route ("/", name="mainPage")
     */
    public function mainPage(): RedirectResponse
    {
        return $this->redirectToRoute("contacts");
    }

    /**
     * @Route ("/contacts/create", name="createContact")
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

    /**
     * @Route("/contacts/{id}", name="contactId")
     */
    public function viewContactCard($id): Response
    {
        $contact = $this->contactRepository->find($id);

        return $this->render("contact-card.html.twig", [
            'id' => $contact->getId(),
            'lastName' => $contact->getLastName(),
            'firstName' => $contact->getFirstName(),
            'phoneNumber' => $contact->getPhoneNumber(),
            'email' => $contact->getEmail(),
            'notes' => $contact->getNotes(),
        ]);
    }

    /**
     * @Route("/contacts/update/{id}", name="updateContact")
     */
    public function updateContact($id, Request $request)
    {
        $contact = $this->contactRepository->find($id);

        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $this->contactRepository->save($contact);

            $this->addFlash("success", "User ".$contact->getLastName() ." was successfully updated!");

            return $this->redirectToRoute("contacts");
        }

        return $this->renderForm('form.html.twig', [
            'form' => $form,
        ]);
    }

    /**
     * @Route("/contacts/delete/{id}", name="deleteContact")
     */
    public function deleteContact($id): RedirectResponse
    {
        $contact = $this->contactRepository->find($id);

        if(!empty($contact)){
            $this->contactRepository->delete($contact);
        }

        return $this->redirectToRoute("contacts");
    }

    /**
     * @Route("/mass-delete", name="massDelete")
     */
    public function massDelete(Request $request): RedirectResponse
    {
        $contacts = $request->get('contact_ids');

        if(!empty($contacts)) {
            foreach($contacts as $contactId) {
                $contact = $this->contactRepository->find($contactId);
                $this->contactRepository->delete($contact);
            }
        }

        $this->addFlash("success", "Users was successfully deleted!");

        return $this->redirectToRoute("contacts");
    }
}