<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AnimalFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $a1 = new Animal();
        $a1->setNom('Chien')
            ->setDescription('Un animal à quatre pattes')
            ->setImage('chien.png')
            ->setPoids(10)
            ->setDangereux(false)
        ;
        $manager->persist($a1);

        $a2 = new Animal();
        $a2->setNom('Cochon')
            ->setDescription('Un animal de la ferme')
            ->setImage('cochon.png')
            ->setPoids(90)
            ->setDangereux(false)
        ;
        $manager->persist($a2);

        $a3 = new Animal();
        $a3->setNom('Croco')
            ->setDescription('Un gros lézard')
            ->setImage('croco.png')
            ->setPoids(250)
            ->setDangereux(true)
        ;
        $manager->persist($a3);

        $a4 = new Animal();
        $a4->setNom('Requin')
            ->setDescription('Un prédateur marin')
            ->setImage('requin.png')
            ->setPoids(500)
            ->setDangereux(true)
        ;
        $manager->persist($a4);

        $a5 = new Animal();
        $a5->setNom('Serpent')
            ->setDescription('Un reptile effrayant')
            ->setImage('serpent.png')
            ->setPoids(3)
            ->setDangereux(true)
        ;
        $manager->persist($a5);

        $manager->flush();
    }
}
