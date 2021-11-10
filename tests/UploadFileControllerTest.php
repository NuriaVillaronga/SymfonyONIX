<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UploadFileControllerTest extends WebTestCase
{
    public function testUploadFile_Admin(): void
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

    public function testUploadFileUser_Admin(): void
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

    public function testUploadFileUser_Admin_Redirect(): void
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
    
    public function testUploadFile_UserAutenticated(): void
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

    public function testUploadFile_UserAutenticated_CorrectRedirect(): void
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

    public function testUploadFile_UserAutenticated_InorrectRedirect(): void
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

    public function testUploadFile_UserNoAutenticated(): void
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
