<?php

namespace App\DataFixtures;

use App\Entity\Campus;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CampusFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $nantes = new Campus();
        $nantes->setName("Nantes");

        $quimper = new Campus();
        $quimper->setName("Quimper");

        $rennes = new Campus();
        $rennes->setName("Rennes");

        $niort = new Campus();
        $niort->setName("Niort");

        $manager->persist($nantes);
        $manager->persist($quimper);
        $manager->persist($rennes);
        $manager->persist($niort);
        $manager->flush();
    }
}
