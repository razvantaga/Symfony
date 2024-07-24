<?php

namespace App\DataFixtures;

use App\Entity\Actor;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ActorFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $actor = new Actor();
        $actor->setName('Christian Bale');
        $manager->persist($actor);
        $this->addReference('actor_1', $actor);

        $actor1 = new Actor();
        $actor1->setName('Heath Ledger');
        $manager->persist($actor1);
        $this->addReference('actor_2', $actor1);

        $actor2 = new Actor();
        $actor2->setName('Robert Downey');
        $manager->persist($actor2);
        $this->addReference('actor_3', $actor2);

        $actor3 = new Actor();
        $actor3->setName('Chris Evans');
        $manager->persist($actor3);
        $this->addReference('actor_4', $actor3);

        $manager->flush();
    }
}
