<?php

namespace App\Controller;

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
     * @Route("/delete/{user_id}/{files_id}", name="deleteFiles", methods={"GET","POST"})
     * 
     * @ParamConverter("user", options={"id" = "user_id"})
     * @ParamConverter("file", options={"id" = "files_id"})
     */
    public function deleteFiles(File $file, User $user, EntityManagerInterface $em): Response
    {
        $this->userCheckCredentials($user);

        $this->fileRemoveService($file, $em);

        return $this->redirectToRoute('view_file', ['id' => $user->getId()]);
    }

} 