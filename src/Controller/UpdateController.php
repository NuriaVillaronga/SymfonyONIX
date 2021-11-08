<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;
use App\UserServices\UserService;
use App\Form\FormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\String\Slugger\SluggerInterface;


class UpdateController extends UserService
{
    /**
     * @Route("/update/{id}", name="user_update", methods={"GET","POST"})
     */
    public function index(Request $request, User $user, EntityManagerInterface $em, UserPasswordHasherInterface $passwordHasher, SluggerInterface $slugger): Response
    {   
        $this->userCheckCredentials($user);
        
        $form = $this->createForm(FormType::class, $user);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $this->userCreate_Update_Service($em, $user, $passwordHasher, $form);
            
            $this->addFlash('messageUpdate', 'The user has been updated successfully');

            return $this->redirectToRoute('user_list');
        }

        return $this->render('update.html.twig', ['user' => $user, 'form' => $form->createView()]);
    }
} 