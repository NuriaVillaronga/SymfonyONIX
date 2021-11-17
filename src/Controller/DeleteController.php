<?php

namespace App\Controller;

use App\Entity\Catalog;
use App\Entity\File;
use App\Entity\Product;
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
     * @Route("/delete/{id_user}/catalog/{id_catalog}/file/{id_file}/product/{id}", name="delete_product", methods={"GET","POST"})
     * 
     * @ParamConverter("user", options={"id" = "id_user"})
     * @ParamConverter("catalog", options={"id" = "id_catalog"})
     * @ParamConverter("product", options={"id" = "id_product"})
     */
    public function deleteProduct(Catalog $catalog, Product $product, User $user, EntityManagerInterface $em): Response
    {
        $this->userCheckCredentials($user);
        
        $this->deleteProductService($product, $em);

        return $this->redirectToRoute('view_product', ['id_user' => $user->getId(), 'id_catalog' => $catalog->getId(), 'id_product' => $product->getId()]);
    }

} 