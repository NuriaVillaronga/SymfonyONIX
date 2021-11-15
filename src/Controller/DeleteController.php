<?php

namespace App\Controller;

use App\Entity\Catalog;
use App\Entity\File;
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
     * @Route("/delete/{user_id}/catalog/{id}", name="delete_catalog", methods={"GET","POST"})
     * 
     * @ParamConverter("user", options={"id" = "user_id"})
     * @ParamConverter("catalog", options={"id" = "id"})
     */
    public function deleteCatalog(User $user, Catalog $catalog, EntityManagerInterface $em): Response
    {
        $this->userCheckCredentials($user);

        $this->catalogRemoveService($catalog, $em);

        return $this->redirectToRoute('view_catalog', ['id' => $catalog->getId(), 'user_id'=> $user->getId()]);
    }

    /**
     * @Route("/delete/{id_user}/catalog/{id_catalog}/file/{id}", name="delete_file", methods={"GET","POST"})
     * 
     * @ParamConverter("user", options={"id" = "id_user"})
     * @ParamConverter("catalog", options={"id" = "id_catalog"})
     * @ParamConverter("file", options={"id" = "id"})
     */
    public function deleteFile(Catalog $catalog, File $file, User $user, EntityManagerInterface $em): Response
    {
        $this->userCheckCredentials($user);
        
        $this->fileRemoveService($file, $em);

        return $this->redirectToRoute('view_file', ['id_user' => $user->getId(), 'id' => $catalog->getId()]);
    }

} 