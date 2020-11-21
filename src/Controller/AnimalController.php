<?php

namespace App\Controller;

use App\Entity\Animal;
use App\Entity\Continent;
use App\Repository\AnimalRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnimalController extends AbstractController
{
    /**
     * @Route("/", name="animaux")
     * @param AnimalRepository $repository
     * @return Response
     */
    public function index(AnimalRepository $repository): Response
    {

        $animaux = $repository->findAll();

        return $this->render('animal/index.html.twig', [
            "animaux" => $animaux
        ]);
    }

    /**
     * @Route ("/animal/{id}", name="afficher_animal")
     * @param Animal $animal
     * @return Response
     */
    public function animal(Animal $animal)
    {
        return $this->render('animal/animal.html.twig', [
            'animal' => $animal
        ]);
    }

    /**
     * @Route ("/animal/{id}", name="afficher_animal")
     * @param Animal $animal
     * @return Response
     */
    public function continent(Animal $animal)
    {
        return $this->render('animal/animal.html.twig', [
            'animal' => $animal
        ]);
    }
}
