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

    public function testNumFiles(): void
    {
        self::bootKernel();
        $container = static::getContainer();
        $entityManager = $container->get('doctrine')->getManager();
        $users = $entityManager->getRepository(User::class)->findBy(['isDeleted'=>true]);

        $this->assertEquals(4, count($users));
    }

    public function testDeleteFile_Admin(): void
    {
        $client = static::createClient();

        $client->followRedirects(true);

        $crawler = $client->request('GET', '/login');
        
        $form = $crawler->filter('#sign-in')->form([
            'email' => 'nuria.villaronga@gmail.com',
            'password' => 'nuria'
        ]);
        
        $crawler = $client->submit($form);

        $link = $crawler->filter('#create')->link();
        $crawler = $client->click($link);

        $this->assertEquals('http://localhost/create', $crawler->getUri());

        $form1 = $crawler->filter('#save-user')->form([
            'form[name]' => 'Sofia Villaronga',
            'form[email]' => 'sofia.villaronga@gmail.com',
            'form[password]' => 'sofia',
            'form[isActive]' => 1,
            'form[isDeleted]' => 0,
            'form[roles]' => ["ROLE_USER"]
        ]);
        
        $crawler = $client->submit($form1);

        $this->assertEquals('http://localhost/list', $crawler->getUri());
    }

    public function testDeleteFileUser_Admin(): void
    {
        $client = static::createClient();

        $client->followRedirects(true);

        $crawler = $client->request('GET', '/login');
        
        $form = $crawler->filter('#sign-in')->form([
            'email' => 'nuria.villaronga@gmail.com',
            'password' => 'nuria'
        ]);
        
        $crawler = $client->submit($form);

        $link = $crawler->filter('#create')->link();
        $crawler = $client->click($link);

        $this->assertEquals('http://localhost/create', $crawler->getUri());

        $form1 = $crawler->filter('#save-user')->form([
            'form[name]' => 'Sofia Villaronga',
            'form[email]' => 'sofia.villaronga@gmail.com',
            'form[password]' => 'sofia',
            'form[isActive]' => 1,
            'form[isDeleted]' => 0,
            'form[roles]' => ["ROLE_USER"]
        ]);
        
        $crawler = $client->submit($form1);

        $this->assertEquals('http://localhost/list', $crawler->getUri());
    }

    public function testDeleteFileUser_Admin_Redirect(): void
    {
        $client = static::createClient();

        $client->followRedirects(true);

        $crawler = $client->request('GET', '/login');
        
        $form = $crawler->filter('#sign-in')->form([
            'email' => 'nuria.villaronga@gmail.com',
            'password' => 'nuria'
        ]);
        
        $crawler = $client->submit($form);

        $link = $crawler->filter('#create')->link();
        $crawler = $client->click($link);

        $this->assertEquals('http://localhost/create', $crawler->getUri());

        $form1 = $crawler->filter('#save-user')->form([
            'form[name]' => 'Sofia Villaronga',
            'form[email]' => 'sofia.villaronga@gmail.com',
            'form[password]' => 'sofia',
            'form[isActive]' => 1,
            'form[isDeleted]' => 0,
            'form[roles]' => ["ROLE_USER"]
        ]);
        
        $crawler = $client->submit($form1);

        $this->assertEquals('http://localhost/list', $crawler->getUri());
    }
    
    public function testDeleteFile_UserAutenticated(): void
    {
        $client = static::createClient();

        $client->followRedirects(true);

        $crawler = $client->request('GET', '/login');
        
        $form = $crawler->filter('#sign-in')->form([
            'email' => 'nuria.villaronga@gmail.com',
            'password' => 'nuria'
        ]);
        
        $crawler = $client->submit($form);

        $link = $crawler->filter('#create')->link();
        $crawler = $client->click($link);

        $this->assertEquals('http://localhost/create', $crawler->getUri());

        $form1 = $crawler->filter('#save-user')->form([
            'form[name]' => 'Sofia Villaronga',
            'form[email]' => 'sofia.villaronga@gmail.com',
            'form[password]' => 'sofia',
            'form[isActive]' => 1,
            'form[isDeleted]' => 0,
            'form[roles]' => ["ROLE_USER"]
        ]);
        
        $crawler = $client->submit($form1);

        $this->assertEquals('http://localhost/list', $crawler->getUri());
    }

    public function testDeleteFile_UserAutenticated_CorrectRedirect(): void
    {
        $client = static::createClient();

        $client->followRedirects(true);

        $crawler = $client->request('GET', '/login');
        
        $form = $crawler->filter('#sign-in')->form([
            'email' => 'nuria.villaronga@gmail.com',
            'password' => 'nuria'
        ]);
        
        $crawler = $client->submit($form);

        $link = $crawler->filter('#create')->link();
        $crawler = $client->click($link);

        $this->assertEquals('http://localhost/create', $crawler->getUri());

        $form1 = $crawler->filter('#save-user')->form([
            'form[name]' => 'Sofia Villaronga',
            'form[email]' => 'sofia.villaronga@gmail.com',
            'form[password]' => 'sofia',
            'form[isActive]' => 1,
            'form[isDeleted]' => 0,
            'form[roles]' => ["ROLE_USER"]
        ]);
        
        $crawler = $client->submit($form1);

        $this->assertEquals('http://localhost/list', $crawler->getUri());
    }

    public function testDeleteFile_UserAutenticated_InorrectRedirect(): void
    {
        $client = static::createClient();

        $client->followRedirects(true);

        $crawler = $client->request('GET', '/login');
        
        $form = $crawler->filter('#sign-in')->form([
            'email' => 'nuria.villaronga@gmail.com',
            'password' => 'nuria'
        ]);
        
        $crawler = $client->submit($form);

        $link = $crawler->filter('#create')->link();
        $crawler = $client->click($link);

        $this->assertEquals('http://localhost/create', $crawler->getUri());

        $form1 = $crawler->filter('#save-user')->form([
            'form[name]' => 'Sofia Villaronga',
            'form[email]' => 'sofia.villaronga@gmail.com',
            'form[password]' => 'sofia',
            'form[isActive]' => 1,
            'form[isDeleted]' => 0,
            'form[roles]' => ["ROLE_USER"]
        ]);
        
        $crawler = $client->submit($form1);

        $this->assertEquals('http://localhost/list', $crawler->getUri());
    }
    
}