<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $user = new User();
        $encoded = $this->passwordEncoder->encodePassword($user, 'najwer23');
        $user->setPassword($encoded);
        $user->setRoles("ROLE_USER");
        $user->setEmail('najwer23@gmail.com');
        $manager->persist($user);
        $manager->flush();

        //php bin/console doctrine:fixtures:load

    }
}
