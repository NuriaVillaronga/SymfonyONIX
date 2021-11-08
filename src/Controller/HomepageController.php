<?php

namespace App\Controller;

use App\UserServices\UserService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HomepageController extends UserService
{
    /**
     * @Route("/", name="default")
     * @Route("/homepage", name="user_homepage")
     */
    public function index(): Response
    {
        return $this->render('homepage.html.twig');
    }

} 