<?php

namespace App\Controller;

use App\Entity\Catalog;
use App\Entity\User;
use App\UserServices\UserService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ViewFileController extends UserService
{
    /**
     * @Route("/view/{id_user}/catalog/{id}/files", name="view_file", methods={"GET","POST"})
     * 
     * @ParamConverter("user", options={"id" = "id_user"})
     * @ParamConverter("catalog", options={"id" = "id"})
     */
    public function viewFile(User $user, Catalog $catalog): Response
    {
        $this->userCheckCredentials($user);

        $filesCatalog = $catalog->getFiles();
        
        return $this->render('view_file.html.twig', [
            'user' => $user,
            'catalog' => $catalog,
            'files' => $filesCatalog
        ]);
    }
}
