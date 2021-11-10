<?php

namespace App\Controller;

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
    /**
     * @Route("/upload/{id}", name="upload_onix", methods={"GET","POST"})
     * 
     * @ParamConverter("user", options={"id": "id"})
     */
    public function index(Request $request, User $user, EntityManagerInterface $em, SluggerInterface $slugger): Response
    {
        $file = new File();
        
        $this->userCheckCredentials($user);
        
        $form = $this->createForm(UploadFilesType::class, $file);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $brochureFile = $form->get('files')->getData();

            if ($brochureFile) {
                
                $fileExtension = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_EXTENSION);

                if ($fileExtension !== "onix") {
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
                    $onixFile = $file->setFiles($newFilename);
                    $user->addFile($onixFile);
                    $this->fileUploadService($file, $em);
                    $this->userUploadService($user, $em);
                    $this->addFlash('messageUpload', 'The file has been uploaded successfully');
                }
            }

            return $this->redirectToRoute('view_file', ['id' => $user->getId()]);
        }

        return $this->render('upload.html.twig', ['form' => $form->createView()]);
    }
} 
