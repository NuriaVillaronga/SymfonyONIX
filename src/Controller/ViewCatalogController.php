<?php

namespace App\Controller;

use App\Entity\User;
use App\UserServices\UserService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ViewCatalogController extends UserService
{
    /**
     * @Route("/view/catalog/{id}", name="view_catalog", methods={"GET","POST"})
     */
    public function view(User $user): Response
    {
        $this->userCheckCredentials($user);

        $userCatalogs = $user->getCatalogs();
        
        return $this->render('view_catalog.html.twig', [
            'user' => $user,
            'catalogs' => $userCatalogs
        ]);
    }
}
