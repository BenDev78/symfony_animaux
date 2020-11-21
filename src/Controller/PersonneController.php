<?php

namespace App\Controller;

use App\Entity\Personne;
use App\Repository\PersonneRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PersonneController extends AbstractController
{
    /**
     * @Route("/personnes", name="personnes")
     * @param PersonneRepository $repository
     * @return Response
     */
    public function index(PersonneRepository $repository): Response
    {
        $personnes = $repository->findAll();
        return $this->render('personne/index.html.twig', [
            'personnes' => $personnes
        ]);
    }

    /**
     * @Route("/personne/{id}", name="personne")
     * @param Personne $personne
     * @return Response
     */
    public function personne(Personne $personne): Response
    {
        return $this->render('personne/personne.html.twig', [
            'personne' => $personne
        ]);
    }
}
