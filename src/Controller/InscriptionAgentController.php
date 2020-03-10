<?php

namespace App\Controller;

use App\Entity\Agent;
use App\Form\InscriptionAgentType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response; 
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
// use Symfony\Component\HttpFoundation\RedirectResponse;

// ... permet la validation du formulaire

use Symfony\Component\Validator\Validator\ValidatorInterface;

class InscriptionAgentController extends AbstractController
{
    /**
     * @Route("/agent", name="agent", methods={"GET","POST"})
     */
    //
    
     public function addAgent(Request $request, UserPasswordEncoderInterface $encoder): Response
    {
        
        // j'instencie un nouvel objet qui va contenir les datas en
        // enregistré par l'utilisateur
        $agent = new Agent();
        
        // je declare une variable qui va contenir le formumlaire
        // créé dans InscriptionAgentType
        $form = $this->createForm(InscriptionAgentType::class, $agent);
        $form->handleRequest($request);
        // $request = Request::createFromGlobals();

        
         

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();

            $encoded = $encoder->encodePassword($agent, $agent->getPasswordAgent());

            $agent->setPasswordAgent($encoded);
            $entityManager->persist($agent);
            $entityManager->flush();

            
        return $this->redirectToRoute('apropos'); 
    }
         
        //create a view
        return $this->render('inscriptionagent/index.html.twig', [
            'agent' => $agent,
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


public function agent(ValidatorInterface $validator)
{
    $agent = new Agent();

    // ... do something to the $contact object

    $errors = $validator->validate($agent);

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

