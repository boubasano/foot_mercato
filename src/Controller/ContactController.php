<?php

namespace App\Controller;

use App\Entity\Contact;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ContactType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

// ...
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    //
    
     public function addContact()
    {
        // je crée un nouvel objet formulaire que j'instencie
        $contact = new Contact();
        
        $contact->setNomContact('Nom');
        $contact->setPrenomContact('Prenom');
        $contact->setEmailContact('Email');
        $contact->setCommentaireContact('Commentaire');
        // $contact->setDateContact(new \DateTime('Date'));

        // je fais appel à mon formulaire dejà créé dans ContactType
        $form = $this->createForm(ContactType::class, $contact);

        $request = Request::createFromGlobals();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
        $data = $form->getData();

    //  // ... perform some action, such as saving the data to the database
    

    $response = new RedirectResponse('apropos');
    $response->prepare($request);

    return $response->send();
}
         

        //create a view
        return $this->render('contact/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    // public function index()
    // // {
    // //     return $this->render('contact/index.html.twig', [
    // //         'controller_name' => 'ContactController',
    // //     ]);
    // // }

    // this service validates the form and counts messages errors
public function contact(ValidatorInterface $validator)
{
    $contact = new Contact();

    // ... do something to the $contact object

    $errors = $validator->validate($contact);

    if (count($errors) > 0) {
        /*
         * Uses a __toString method on the $errors variable which is a
         * ConstraintViolationList object. This gives us a nice string
         * for debugging.
         */
        $errorsString = (string) $errors;

        return new Response($errorsString);
    }

    return new Response('The author is valid! Yes!');
}

}

