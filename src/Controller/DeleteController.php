<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\UserServices\UserService;
use Doctrine\ORM\EntityManagerInterface;

class DeleteController extends UserService
{
    /**
     * @Route("/delete/{id}", name="user_delete", methods={"GET","POST"})
     */
    public function index(User $user, EntityManagerInterface $em): Response
    {
        $this->userCheckCredentials($user);
        
        $this->userDeleteService($user, $em);

        return $this->redirectToRoute('user_list');
    }

} 