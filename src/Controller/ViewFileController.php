<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ViewFileController extends AbstractController
{
    /**
     * @Route("/view/{id}", name="view_file", methods={"GET","POST"})
     */
    public function view(User $user): Response
    {
        $filesUploaded = $user->getFiles();
        
        return $this->render('view.html.twig', [
            'users' => $user,
            'files' => $filesUploaded
        ]);
    }
}
