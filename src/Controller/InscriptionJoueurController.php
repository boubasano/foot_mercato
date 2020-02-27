<?php

namespace App\Controller;

use App\Entity\Joueur;
use App\Form\InscriptionJoueurType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response; 
use Symfony\Component\HttpFoundation\Request;
// use Symfony\Component\HttpFoundation\RedirectResponse;


class InscriptionJoueurController extends AbstractController
{
    /**
     * @Route("/joueur", name="joueur", methods={"GET","POST"})
     */
    //
    
     public function addJoueur(Request $request): Response
    {
        
        // j'instencie un nouvel objet qui va contenir les datas en
        // enregistré par l'utilisateur
        $joueur = new Joueur();
        
        // je declare une variable qui va contenir le formumlaire
        // créé dans ContactType
        $form = $this->createForm(InscriptionJoueurType::class, $joueur);
        $form->handleRequest($request);
        // $request = Request::createFromGlobals();

        
         

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($joueur);
            $entityManager->flush();

            
        return $this->redirectToRoute('apropos'); 
    }
         
        //create a view
        return $this->render('inscriptionjoueur/index.html.twig', [
            'joueur' => $joueur,
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

    


}

