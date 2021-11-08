<?php

namespace App\Tests;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DeleteControllerTest extends WebTestCase
{
    public function testNumUsers(): void
    {
        self::bootKernel();
        $container = static::getContainer();
        $entityManager = $container->get('doctrine')->getManager();
        $users = $entityManager->getRepository(User::class)->findBy(['isDeleted'=>true]);

        $this->assertEquals(4, count($users));
    }
}