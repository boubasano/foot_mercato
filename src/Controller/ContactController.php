<?php

namespace App\Controller;

use App\Entity\Contact;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ContactType;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    //
    
     public function new()
    {
        // create a contact object and initializes some data 
        $contact = new Contact();
        $contact->setNomContact('Nom');
        $contact->setPrenomContact('Prenom');
        $contact->setEmailContact('Email');
        $contact->setCommentaireContact('Commentaire');
        // $contact->setDateContact(new \DateTime('Date'));

        $form = $this->createForm(ContactType::class, $contact);

        //create a view
        return $this->render('contact/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    public function index()
    {
        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }
}
