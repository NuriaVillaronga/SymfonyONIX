<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UpdateProductController extends AbstractController
{
    /**
     * @Route("/update/product/{id_product}/user/{id_user}/catalog/{id_catalog}", name="update_product")
     * 
     * @ParamConverter("user", options={"id" = "id_user"})
     * @ParamConverter("catalog", options={"id" = "id_catalog"})
     * @ParamConverter("product", options={"id" = "id_product"})
     */
    public function index(): Response
    {
        return $this->render('update_product/index.html.twig', [
            'controller_name' => 'UpdateProductController',
        ]);
    }
}
