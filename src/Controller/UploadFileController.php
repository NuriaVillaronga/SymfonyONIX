<?php

namespace App\Controller;

use App\Entity\Catalog;
use App\Entity\File;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\UploadFilesType;
use App\UserServices\UserService;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\String\Slugger\SluggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;


class UploadFileController extends UserService
{
    private const file_type = "application/xml";
    
    /**
     * @Route("/upload/{id_user}/catalog/{id_catalog}", name="upload_onix", methods={"GET","POST"})
     * 
     * @ParamConverter("user", options={"id": "id_user"})
     * @ParamConverter("catalog", options={"id": "id_catalog"})
     */
    public function index(Catalog $catalog, Request $request, User $user, EntityManagerInterface $em, SluggerInterface $slugger): Response
    {
        $file = new File();
        
        $this->userCheckCredentials($user);

        /* --> Si no se pasase como parametro $catalog
        $arrayCatalogs = $user->getCatalogs();

        $catalogIdRoute = $request->get('id');

        $catalog=null;
        
        foreach ($arrayCatalogs as $catalogo) {
            if ($catalogo->getId() == $catalogIdRoute) {
                $catalog = $catalogo;
            }
        }
        */
        
        $form = $this->createForm(UploadFilesType::class, $file);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $brochureFile = $form->get('files')->getData();

            if ($brochureFile) {
                
                $fileExtension = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_EXTENSION);

                //Problema con el mime_content_type

                if ($fileExtension !== "onix" && $fileExtension !== "xml") {
                    throw new Exception("The file extension is not onix");
                }
                else {
                    $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
                
                    // this is needed to safely include the file name as part of the URL
                    $safeFilename = $slugger->slug($originalFilename);
                    $newFilename = $safeFilename.'-'.uniqid().'.'.$brochureFile->guessExtension();
            
                    // Move the file to the directory where brochures are stored
                    try {
                        $brochureFile->move(
                            $this->getParameter('onixFile_directory'),
                            $newFilename
                        );
                    } catch (FileException $e) {
                        throw new Exception("Caution, there had been an error!");
                    }

                    // updates the 'onixFile' property to store the file instead of its contents
                    $onixFile = $file->setFile($newFilename);
                    $catalog->addFile($onixFile);
                    $this->fileUploadService($file, $em);
                    $this->catalogService($catalog, $em);
                    $this->addFlash('messageUpload', 'The file has been uploaded successfully');
                }
            }

            return $this->redirectToRoute('view_product', ['id_user' => $user->getId(), 'id_catalog' => $catalog->getId()]);
        }

        return $this->render('upload.html.twig', ['form' => $form->createView()]);
    }
} 
