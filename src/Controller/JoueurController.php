<?php

namespace App\Controller;

use App\Entity\Joueur;
use App\Form\JoueurType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/joueur")
 */
class JoueurController extends AbstractController
{
    /**
     * @Route("/", name="joueur_index", methods={"GET"})
     */
    public function index(): Response
    {
        $joueurs = $this->getDoctrine()
            ->getRepository(Joueur::class)
            ->findAll();

        return $this->render('joueur/index.html.twig', [
            'joueurs' => $joueurs,
        ]);
    }

    /**
     * @Route("/new", name="joueur_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $joueur = new Joueur();
        $form = $this->createForm(JoueurType::class, $joueur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($joueur);
            $entityManager->flush();

            return $this->redirectToRoute('joueur_index');
        }

        return $this->render('joueur/new.html.twig', [
            'joueur' => $joueur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idJoueur}", name="joueur_show", methods={"GET"})
     */
    public function show(Joueur $joueur): Response
    {
        return $this->render('joueur/show.html.twig', [
            'joueur' => $joueur,
        ]);
    }

    /**
     * @Route("/{idJoueur}/edit", name="joueur_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Joueur $joueur): Response
    {
        $form = $this->createForm(JoueurType::class, $joueur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('joueur_index');
        }

        return $this->render('joueur/edit.html.twig', [
            'joueur' => $joueur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idJoueur}", name="joueur_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Joueur $joueur): Response
    {
        if ($this->isCsrfTokenValid('delete'.$joueur->getIdJoueur(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($joueur);
            $entityManager->flush();
        }

        return $this->redirectToRoute('joueur_index');
    }
}
