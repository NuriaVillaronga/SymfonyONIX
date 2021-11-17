<?php

namespace App\UserServices;

use App\Entity\Catalog;
use App\Entity\File;
use App\Entity\Product;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use OnixComponents\ProductList;
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

    public function catalogService(Catalog $catalog, EntityManagerInterface $em)
    {
        $em->persist($catalog);
        $em->flush();
    }

    public function catalogRemoveService(Catalog $catalog, EntityManagerInterface $em)
    {
        $em->remove($catalog);
        $em->flush();
    }

    public function fileRemoveService(File $file, EntityManagerInterface $em)
    {
        $em->remove($file);
        $em->flush();
    }

    public function deleteProductService(Product $product, EntityManagerInterface $em)
    {
        $em->remove($product);
        $em->flush();
    }

    public function userService(User $user, EntityManagerInterface $em)
    {
        $em->persist($user);
        $em->flush();
    }

    public function fileUploadService(File $file, EntityManagerInterface $em)
    {
        $em->persist($file);
        $em->flush();
    }

    private function saveProductService(Product $product, EntityManagerInterface $em)
    {
        $em->persist($product);
        $em->flush();
    }

    private function codifiedPassword(User $user, UserPasswordHasherInterface $passwordHasher, FormInterface $form) {
        $user->setPassword($passwordHasher->hashPassword($user, $form['password']->getData()));
    }

    public function productLoadService(File $file, string $onixFile_directory, EntityManagerInterface $em)
    {
        $nodoONIX = simplexml_load_file($onixFile_directory."/".$file->getFile());

        $productList = new ProductList($nodoONIX);
        $arrayProducts = $productList->arrayProduct;

        foreach ($arrayProducts as $productXML) 
        {
            $product = new Product();

            $isbnDetail = $productXML->recordReference->contents;
            $product->setIsbnDetail($isbnDetail);

            //---
            $arrayTitleDetail = $productXML->descriptiveDetail->titleDetailList->arrayTitleDetail;

            $title = null;
            foreach ($arrayTitleDetail as $titleDetail) 
            {
                $arrayTitleElement = $titleDetail->titleElementList->arrayTitleElement;

                foreach ($arrayTitleElement as $titleElement) {

                    if ($titleElement->titleText != null) {
                        $title = $title . " " . $titleElement->titleText->contents;
                    }
                }
            }
            $product->setTitle($title);
            //---

            $arrayProductIdentifier = $productXML->productIdentifierList->arrayProductIdentifier;

            $isbnType = null;
            foreach ($arrayProductIdentifier as $productIdentifier) 
            {
                $isbnType = $isbnType . " " . $productIdentifier->productIDType->contents;
            }
            $product->setIsbnType($isbnType);
            //---

            $productForm = $productXML->descriptiveDetail->productForm->contents;
            $product->setProductForm($productForm);

            //---
            $arrayContributor = $productXML->descriptiveDetail->contributorList->arrayContributor;

            $personName = null;
            foreach ($arrayContributor as $contributor) 
            {
                if ($contributor->personName !== null) {
                    $personName = $personName . " " . $contributor->personName->contents;
                }
            }
            $product->setPersonName($personName);
            //----

            $arraySubject = $productXML->descriptiveDetail->subjectList->arraySubject;

            $subjectTitle = null;
            foreach ($arraySubject as $subject) 
            {
                if ($subject->subjectHeadingTextList !== null) 
                {
                    $arraySubjectHeadingText = $subject->subjectHeadingTextList->arraySubjectHeadingText;

                    foreach ($arraySubjectHeadingText as $subjectHeadingText) {
                        $subjectTitle = $subjectHeadingText->contents;
                    }
                }
            }
            $product->setSubjectTitle($subjectTitle);
            //---

            //Guardo los datos en la base de datos
            $file->addProduct($product);
            $this->saveProductService($product, $em);
            $this->fileUploadService($file, $em);
        }
    }
}