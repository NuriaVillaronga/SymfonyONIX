<?php

namespace App\Controller;

use App\Entity\Catalog;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\UserServices\UserService;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class DeleteController extends UserService
{
    /**
     * @Route("/delete/{id}", name="user_delete", methods={"GET","POST"})
     */
    public function deleteUser(User $user, EntityManagerInterface $em): Response
    {
        $this->userCheckCredentials($user);
        
        $this->userDeleteService($user, $em);

        return $this->redirectToRoute('user_list');
    }

    /**
     * @Route("/delete/{id}/{name}", name="deleteCatalog", methods={"GET","POST"})
     * 
     * @ParamConverter("user", options={"id" = "id"})
     * @ParamConverter("catalog", options={"name" = "name"})
     */
    public function deleteCatalog(Catalog $catalog, User $user, EntityManagerInterface $em): Response
    {
        var_dump("Hola");
        die();

        $this->userCheckCredentials($user);

        $this->catalogRemoveService($catalog, $em);

        return $this->redirectToRoute('view_catalog', ['id' => $user->getId()]);
    }

} 