<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FichesJoueurController extends AbstractController
{
    /**
     * @Route("/fichesjoueur", name="fichesjoueur")
     */
    public function index()
    {
        return $this->render('fichesjoueur/index.html.twig', [
            'controller_name' => 'FichesJoueurController',
        ]);
    }
}
