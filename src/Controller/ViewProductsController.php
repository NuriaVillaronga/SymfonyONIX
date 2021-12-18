<?php

namespace App\Controller;

use App\Entity\Catalog;
use App\Entity\User;
use App\Repository\ProductRepository;
use App\UserServices\UserService;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ViewProductsController extends UserService
{

    private const BEGGINIG_PAGINATION = 1;
    private const LIMIT_PRODUCTS_PAGE = 8;

    /**
    * @Route("/view/{id_user}/catalog/{id_catalog}/products", name="view_product", methods={"GET","POST"})
    * 
    * @ParamConverter("user", options={"id" = "id_user"})
    * @ParamConverter("catalog", options={"id" = "id_catalog"})
    */
    public function viewFile(User $user, Catalog $catalog, string $onixFile_directory, EntityManagerInterface $em, PaginatorInterface $paginator, ProductRepository $productRepository, Request $request): Response
    {
        $this->userCheckCredentials($user);

        $filesCatalog = $catalog->getFiles();

        $products = null;
        
        foreach ($filesCatalog as $file) 
        { 
            $this->productLoadService($file, $onixFile_directory, $em);
            $products = $file->getProducts();
        }

        $query = $productRepository->queryPaginator();
        
        $pagination = $paginator->paginate( $query, $request->query->getInt('page', self::BEGGINIG_PAGINATION), self::LIMIT_PRODUCTS_PAGE );

        return $this->render('view_product.html.twig', [
            'catalog' => $catalog,
            'user' => $user,
            'files' => $filesCatalog,
            'products' => $products,
            'pagination' => $pagination
        ]);
    }
}

