<?php

namespace App\Controller;

use App\Entity\Famille;
use App\Repository\FamilleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FamilleController extends AbstractController
{
    /**
     * @Route("/familles", name="familles")
     * @param FamilleRepository $repository
     * @return Response
     */
    public function index(FamilleRepository $repository): Response
    {
        $familles = $repository->findAll();
        return $this->render('famille/index.html.twig', [
            'familles' => $familles
        ]);
    }

    /**
     * @Route("/famille/{id}", name="famille")
     * @param Famille $famille
     * @return Response
     */
    public function famille(Famille $famille): Response
    {
        return $this->render('famille/famille.html.twig', [
            'famille' => $famille
        ]);
    }
}
