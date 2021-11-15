<?php

namespace App\Controller;

use App\Entity\Catalog;
use App\Entity\User;
use App\UserServices\UserService;
use DBOnix\Repository;
use OnixComponents\ProductList;
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

        $repository = new Repository();

        //inicializacion variables onix
        $productForm = null;
        $subject = null;
        $contributors = null;
        $isbn = null;
        $title = null;

        foreach ($filesCatalog as $file) {
        
            $nodoONIX = simplexml_load_file('/../../'.$file->getFile());
        
            $productList = new ProductList($nodoONIX);
            $arrayProducts = $productList->arrayProduct;

            foreach ($arrayProducts as $product) {

                //arbitro???
                $productForm = $product->descriptiveDetail->productForm->contents;
                $subject = $repository->Subject($product->descriptiveDetail->subjectList);
                $contributors = $repository->Contributor($product->descriptiveDetail->contributorList);
                $isbn = $repository->Product_Identifier($product->productIdentifierList);
                $title = $product->recordReference->contents;
                var_dump($productForm);
                var_dump($subject);
                var_dump($contributors);
                var_dump($isbn);
                var_dump($title);
            }

        }
        
        return $this->render('view_file.html.twig', [
            'user' => $user,
            'catalog' => $catalog,
            'files' => $filesCatalog,
            
            'product_form' => $productForm,
            'subject' => $subject,
            'contributors' => $contributors,
            'isbn' => $isbn,
            'title' => $title
        ]);
    }
}
