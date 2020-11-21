<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use App\Entity\Continent;
use App\Entity\Dispose;
use App\Entity\Famille;
use App\Entity\Personne;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AnimalFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $p1 = new Personne();
        $p1->setNom('Marie');
        $manager->persist($p1);

        $p2 = new Personne();
        $p2->setNom('Ben');
        $manager->persist($p2);

        $p3 = new Personne();
        $p3->setNom('Anjy');
        $manager->persist($p3);

        $continent1 = new Continent();
        $continent1->setLibelle('europe');
        $manager->persist($continent1);

        $continent2 = new Continent();
        $continent2->setLibelle('asie');
        $manager->persist($continent2);

        $continent3 = new Continent();
        $continent3->setLibelle('amérique');
        $manager->persist($continent3);

        $continent4 = new Continent();
        $continent4->setLibelle('afrique');
        $manager->persist($continent4);

        $continent5 = new Continent();
        $continent5->setLibelle('océanie');
        $manager->persist($continent5);

        $c1 = new Famille();
        $c1->setLibelle("mammifère")
            ->setDescription("animaux vertébrés nourrissants leurs petits avec du lait")
        ;
        $manager->persist($c1);

        $c2 = new Famille();
        $c2->setLibelle("reptiles")
            ->setDescription("animaux vertébrés à sang froid")
        ;
        $manager->persist($c2);

        $c3 = new Famille();
        $c3->setLibelle("poissons")
            ->setDescription("animaux vivants dans l'eau, munis de branchies")
        ;
        $manager->persist($c3);

        $a1 = new Animal();
        $a1->setNom('Chien')
            ->setDescription('Un animal à quatre pattes')
            ->setImage('chien.png')
            ->setPoids(10)
            ->setDangereux(false)
            ->setFamille($c1)
            ->addContinent($continent1)
            ->addContinent($continent2)
            ->addContinent($continent3)
            ->addContinent($continent4)
            ->addContinent($continent5)
        ;
        $manager->persist($a1);

        $a2 = new Animal();
        $a2->setNom('Cochon')
            ->setDescription('Un animal de la ferme')
            ->setImage('cochon.png')
            ->setPoids(90)
            ->setDangereux(false)
            ->setFamille($c1)
            ->addContinent($continent1)
            ->addContinent($continent5)
        ;
        $manager->persist($a2);

        $a3 = new Animal();
        $a3->setNom('Croco')
            ->setDescription('Un gros lézard')
            ->setImage('croco.png')
            ->setPoids(250)
            ->setDangereux(true)
            ->setFamille($c2)
            ->addContinent($continent2)
            ->addContinent($continent3)
        ;
        $manager->persist($a3);

        $a4 = new Animal();
        $a4->setNom('Requin')
            ->setDescription('Un prédateur marin')
            ->setImage('requin.png')
            ->setPoids(500)
            ->setDangereux(true)
            ->setFamille($c3)
            ->addContinent($continent5)
        ;
        $manager->persist($a4);

        $a5 = new Animal();
        $a5->setNom('Serpent')
            ->setDescription('Un reptile effrayant')
            ->setImage('serpent.png')
            ->setPoids(3)
            ->setDangereux(true)
            ->setFamille($c2)
            ->addContinent($continent2)
            ->addContinent($continent3)
            ->addContinent($continent4)
        ;
        $manager->persist($a5);

        $d1 = new Dispose();
        $d1->setPersonne($p1)
            ->setAnimal($a1)
            ->setNb(30)
        ;
        $manager->persist($d1);

        $d2 = new Dispose();
        $d2->setPersonne($p1)
            ->setAnimal($a2)
            ->setNb(10)
        ;
        $manager->persist($d2);

        $d3 = new Dispose();
        $d3->setPersonne($p2)
            ->setAnimal($a3)
            ->setNb(25)
        ;
        $manager->persist($d3);

        $d4 = new Dispose();
        $d4->setPersonne($p2)
            ->setAnimal($a4)
            ->setNb(2)
        ;
        $manager->persist($d4);

        $d5 = new Dispose();
        $d5->setPersonne($p3)
            ->setAnimal($a5)
            ->setNb(12)
        ;
        $manager->persist($d5);

        $manager->flush();
    }
}
