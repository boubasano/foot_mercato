<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\InscriptionUserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response; 
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
// use Symfony\Component\HttpFoundation\RedirectResponse;

// ... permet la validation du formulaire si les contraintes sont respectées
use Symfony\Component\Validator\Validator\ValidatorInterface;

class InscriptionUserController extends AbstractController
{
    /**
     * @Route("/inscription", name="user", methods={"GET","POST"})
     */
    //
    
     public function addUser(Request $request, UserPasswordEncoderInterface $encoder): Response
    {
        
        // j'instencie un nouvel objet qui va contenir les datas en
        // enregistré par l'utilisateur
        $user = new User();
        
        // je declare une variable qui va contenir le formumlaire
        // créé dans ContactType
        $form = $this->createForm(InscriptionUserType::class, $user);
        $form->handleRequest($request);
        // $request = Request::createFromGlobals();

        
        //  validation de l'envoi de données et son enregistrement dans la base de données 

        if ($form->isSubmitted() && $form->isValid()) {
            
            $entityManager = $this->getDoctrine()->getManager();
            
            $encoded = $encoder->encodePassword($user, $user->getPassword());

            $user->setPassword($encoded);
            $entityManager->persist($user);
            $entityManager->flush();

           
        return $this->redirectToRoute('apropos'); 
    }
         
        //create a view
        return $this->render('security/inscription.html.twig', [
            'user' => $user,
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
    public function user(ValidatorInterface $validator)
{
    $user = new User();

    // ... do something to the $contact object

    $errors = $validator->validate($user);

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

