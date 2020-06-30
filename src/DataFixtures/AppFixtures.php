<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\PiggyBank;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $piggyBank = new PiggyBank();
        $piggyBank->setBalance(69.9);
        
        $manager->persist($piggyBank);
        $manager->flush();
    }
}
