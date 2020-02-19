<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response; 
use Symfony\Component\HttpFoundation\Request;
// use Symfony\Component\HttpFoundation\RedirectResponse;

// ... permet la validation du formulaire

use Symfony\Component\Validator\Validator\ValidatorInterface;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact", methods={"GET","POST"})
     */
    //
    
     public function addContact(Request $request): Response
    {
        
        // j'instencie un nouvel objet qui va contenir les datas en
        // enregistré par l'utilisateur
        $contact = new Contact();
        
        // je declare une variable qui va contenir le formumlaire
        // créé dans ContactType
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);
        // $request = Request::createFromGlobals();

        
         

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($contact);
            $entityManager->flush();

            
        return $this->redirectToRoute('apropos'); 
    }
         
        //create a view
        return $this->render('contact/index.html.twig', [
            'contact' => $contact,
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

