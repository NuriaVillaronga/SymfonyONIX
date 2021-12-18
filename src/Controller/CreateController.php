<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\UserServices\UserService;
use App\Form\FormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class CreateController extends UserService
{
    /**
     * @Route("/create", name="user_create", methods={"GET","POST"})
     */
    public function index(Request $request, EntityManagerInterface $em, UserPasswordHasherInterface $passwordHasher): Response
    {
        $user = new User();

        $form = $this->createForm(FormType::class, $user);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $this->userCreate_Update_Service($em, $user, $passwordHasher, $form);
            
            $this->addFlash('messageCreate', 'The user has been created successfully');

            return $this->redirectToRoute('user_list');
        }

        return $this->render('create.html.twig', ['form' => $form->createView()]);
    }
} 
