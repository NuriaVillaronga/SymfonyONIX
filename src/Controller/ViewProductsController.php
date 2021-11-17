<?php

namespace App\Controller;

use App\Entity\Catalog;
use App\Entity\User;
use App\UserServices\UserService;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ViewProductsController extends UserService
{
    /**
    * @Route("/view/{id_user}/catalog/{id}/products", name="view_product", methods={"GET","POST"})
    * 
    * @ParamConverter("user", options={"id" = "id_user"})
    * @ParamConverter("catalog", options={"id" = "id"})
    */
    public function viewFile(User $user, Catalog $catalog, string $onixFile_directory, EntityManagerInterface $em): Response
    {
        $this->userCheckCredentials($user);

        $filesCatalog = $catalog->getFiles();

        foreach ($filesCatalog as $file) 
        { 
            $this->productLoadService($file, $onixFile_directory, $em);
            $products = $file->getProducts();
        }

        return $this->render('view_product.html.twig', [
            'catalog' => $catalog,
            'user' => $user,
            'files' => $filesCatalog,
            'products' => $products
        ]);
    }
}

