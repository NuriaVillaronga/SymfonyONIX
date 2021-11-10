<?php

namespace App\Controller;

use App\Entity\User;
use App\UserServices\UserService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ViewFileController extends UserService
{
    /**
     * @Route("/view/{id}", name="view_file", methods={"GET","POST"})
     */
    public function view(User $user): Response
    {
        $this->userCheckCredentials($user);

        $filesUploaded = $user->getFiles();
        
        return $this->render('view.html.twig', [
            'user' => $user,
            'files' => $filesUploaded
        ]);
    }
}
