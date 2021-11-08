<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;
use App\Form\UploadFilesType;
use App\UserServices\UserService;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\String\Slugger\SluggerInterface;


class UploadOnixFileController extends UserService
{
    /**
     * @Route("/upload/{id}", name="upload_onix_file", methods={"GET","POST"})
     */
    public function index(Request $request, User $user, EntityManagerInterface $em, SluggerInterface $slugger): Response
    {   
        $this->userCheckCredentials($user);
        
        $form = $this->createForm(UploadFilesType::class, $user);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $brochureFile = $form->get('onixFile')->getData();

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
                    $user->setONIXfile($newFilename);
                    $this->userUploadService($user, $em);
                    $this->addFlash('messageUpload', 'The file has been uploaded successfully');
                }
            }

            return $this->redirectToRoute('user_list');
        }
        return $this->render('upload.html.twig', ['form' => $form->createView()]);
    }
} 
