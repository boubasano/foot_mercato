<?php

namespace App\Controller;

use App\Entity\Situation;
use App\Form\SituationType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response; 
use Symfony\Component\HttpFoundation\Request;
// use Symfony\Component\HttpFoundation\RedirectResponse;

// ... permet la validation du formulaire si les contraintes sont respectées
use Symfony\Component\Validator\Validator\ValidatorInterface;

class SituationController extends AbstractController
{
    
     /**
     * @Route("/situation", name="situation", methods={"GET","POST"})
     */
    //
    
     public function addSituation(Request $request): Response
    {
        
        // j'instencie un nouvel objet qui va contenir les datas en
        // enregistré par l'utilisateur
        $situation = new Situation();
        
        // je declare une variable qui va contenir le formumlaire
        // créé dans ContactType
        $form = $this->createForm(SituationType::class, $situation);
        $form->handleRequest($request);
        // $request = Request::createFromGlobals();


        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($situation);
            $entityManager->flush();

        return $this->redirectToRoute('user'); 
    }
         
        //create a view
        return $this->render('situation/index.html.twig', [
            'situation' => $situation,
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


    public function situation(ValidatorInterface $validator)
{
    $situation = new Situation();

    // ... do something to the $contact object

    $errors = $validator->validate($situation);

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

