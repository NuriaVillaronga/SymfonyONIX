<?php

namespace App\UserServices;

use App\Entity\File;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserService extends CheckCredentials
{
    public function userCreate_Update_Service(EntityManagerInterface $em, User $user, UserPasswordHasherInterface $passwordHasher, FormInterface $form)
    {
        $this->codifiedPassword($user, $passwordHasher, $form);
        $em->persist($user);
        $em->flush();
    }

    public function userDeleteService(User $user, EntityManagerInterface $em)
    {
        $user->setIsDeleted(true);
        $em->persist($user);
        $em->flush();
    }

    public function userUploadService(User $user, EntityManagerInterface $em)
    {
        $em->persist($user);
        $em->flush();
    }

    public function fileUploadService(File $file, EntityManagerInterface $em)
    {
        $em->persist($file);
        $em->flush();
    }

    private function codifiedPassword(User $user, UserPasswordHasherInterface $passwordHasher, FormInterface $form) {
        $user->setPassword($passwordHasher->hashPassword($user, $form['password']->getData()));
    }
}