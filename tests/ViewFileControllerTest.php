<?php

namespace App\Tests;

use Symfony\Component\Panther\PantherTestCase;

class ViewFileControllerTest extends PantherTestCase
{
    public function testViewFiles_Admin(): void
    {
        $client = static::createPantherClient();
        
        $client->followRedirects(true);
        
        $client->request('GET', '/update/6'); 

        $client->submitForm('Sign in', [
            'email' => 'juana.villaronga@gmail.com',
            'password' => 'juana',
        ]);

        $this->assertEquals('http://127.0.0.1:9080/homepage', $client->getCurrentURL());

    }
    
    public function testViewFilesUser_Admin(): void
    {
        $client = static::createPantherClient();
        
        $client->followRedirects(true);
        
        $client->request('GET', '/update/6'); 

        $client->submitForm('Sign in', [
            'email' => 'nuria.villaronga@gmail.com',
            'password' => 'nuria',
        ]);

        $this->assertEquals('http://127.0.0.1:9080/update/6', $client->getCurrentURL());

        $client->submitForm('Save edited', [
            'form[name]'=>'Xura Villaronga Guillán', 
            'form[email]' => 'xura.villaronga@gmail.com',
            'form[password]' => 'xura',
            'form[isActive]' => 1,
            'form[isDeleted]' => 0,
            'form[roles]' => ["ROLE_USER"]
        ]);

        $this->assertEquals('http://127.0.0.1:9080/list', $client->getCurrentURL());
    }

    public function testViewFilesUser_Admin_Redirect(): void
    {
        $client = static::createPantherClient();
        
        $client->followRedirects(true);
        
        $client->request('GET', '/update/6'); 

        $client->submitForm('Sign in', [
            'email' => 'nuria.villaronga@gmail.com',
            'password' => 'nuria',
        ]);

        $this->assertEquals('http://127.0.0.1:9080/update/6', $client->getCurrentURL());

        $client->submitForm('Save edited', [
            'form[name]'=>'Xura Villaronga Guillán', 
            'form[email]' => 'xura.villaronga@gmail.com',
            'form[password]' => 'xura',
            'form[isActive]' => 1,
            'form[isDeleted]' => 0,
            'form[roles]' => ["ROLE_USER"]
        ]);

        $this->assertEquals('http://127.0.0.1:9080/list', $client->getCurrentURL());
    }

    public function testViewFiles_UserAutenticated(): void
    {
        $client = static::createPantherClient();
        
        $client->followRedirects(true);
        
        $client->request('GET', '/login'); 

        $client->submitForm('Sign in', [
            'email' => 'nuria.villaronga@gmail.com',
            'password' => 'nuria',
        ]);

        $client->clickLink('Users List');

        $crawler = $client->clickLink('1'); //por defecto ya está en la pagina 1, pero necesito crear un cliente crawler
        $link = $crawler->filter('#update-1')->link(); 

        $client->click($link);
        $this->assertEquals('http://127.0.0.1:9080/update/7', $client->getCurrentURL());

        $client->submitForm('Save edited', [
            'form[name]'=>'Xose Villaronga Guillán', 
            'form[email]' => 'xose.villaronga@gmail.com',
            'form[password]' => 'abc',
            'form[isActive]' => 0,
            'form[isDeleted]' => 1,
            'form[roles]' => ["ROLE_USER","ROLE_ADMIN"],
        ]);

        $this->assertEquals('http://127.0.0.1:9080/list', $client->getCurrentURL());
    }
    
    public function testViewFiles_UserAutenticated_CorrectRedirect(): void
    {
        $client = static::createPantherClient();
        
        $client->followRedirects(true);
        
        $client->request('GET', '/login'); //Otra opcion sería: http://127.0.0.1:9080/login

        $client->submitForm('Sign in', [
            'email' => 'dalila.villaronga@gmail.com',
            'password' => 'dalila',
        ]);

        $client->clickLink('Users List');
        $client->clickLink('update');
        $this->assertEquals('http://127.0.0.1:9080/update/4', $client->getCurrentURL());

        $client->submitForm('Save edited', [
            'form[name]'=>'Dalila Villaronga Guillán', 
            'form[email]' => 'dalila.villaronga@gmail.com',
            'form[password]' => 'dalila',
        ]);

        $this->assertEquals('http://127.0.0.1:9080/list', $client->getCurrentURL());
    }

    public function testViewFiles_UserAutenticated_IncorrectRedirect(): void
    {
        $client = static::createPantherClient();
        
        $client->followRedirects(true);
        
        $client->request('GET', '/login'); //Otra opcion sería: http://127.0.0.1:9080/login

        $client->submitForm('Sign in', [
            'email' => 'dalila.villaronga@gmail.com',
            'password' => 'dalila',
        ]);

        $client->clickLink('Users List');
        $client->clickLink('update');
        $this->assertEquals('http://127.0.0.1:9080/update/4', $client->getCurrentURL());

        $client->submitForm('Save edited', [
            'form[name]'=>'Dalila Villaronga Guillán', 
            'form[email]' => 'dalila.villaronga@gmail.com',
            'form[password]' => 'dalila',
        ]);

        $this->assertEquals('http://127.0.0.1:9080/list', $client->getCurrentURL());
    }

    public function testViewFiles_UserNoAutenticated(): void
    {
        $client = static::createPantherClient();
        
        $client->followRedirects(true);
        
        $client->request('GET', '/login'); 

        $client->submitForm('Sign in', [
            'email' => 'nuria.villaronga@gmail.com',
            'password' => 'nuria',
        ]);

        $client->clickLink('Users List');
        
        //$client->clickLink('Next »'); Deberia funcionar tb, pero este nombre no le gusta

        $crawler = $client->clickLink('2');
        $link = $crawler->filter('#update-2')->link(); 

        $client->click($link);
        $this->assertEquals('http://127.0.0.1:9080/update/1', $client->getCurrentURL());

        $client->submitForm('Save edited', [
            'form[name]'=>'Nuria Villaronga Guillán', 
            'form[email]' => 'nuria.villaronga@gmail.com',
            'form[password]' => 'nuria',
            'form[isActive]' => 1,
            'form[isDeleted]' => 0,
            'form[roles]' => ["ROLE_USER","ROLE_ADMIN"],
        ]);

        $this->assertEquals('http://127.0.0.1:9080/list', $client->getCurrentURL());
        
    }
}
