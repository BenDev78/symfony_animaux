<?php

namespace App\Controller;

use App\Entity\Continent;
use App\Repository\ContinentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContinentController extends AbstractController
{
    /**
     * @Route("/continents", name="continents")
     * @param ContinentRepository $repository
     * @return Response
     */
    public function index(ContinentRepository $repository): Response
    {
        $continents = $repository->findAll();
        return $this->render('continent/index.html.twig', [
            'continents' => $continents
        ]);
    }

    /**
     * @Route("/continent/{id}", name="continent")
     * @param Continent $continent
     * @return Response
     */
    public function continent(Continent $continent): Response
    {
        return $this->render('continent/continent.html.twig', [
            'continent' => $continent
        ]);
    }
}
