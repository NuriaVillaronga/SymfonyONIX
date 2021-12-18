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

            //-------
            $product->setRecordReference($productXML->recordReference->contents); //se establece $recordReference
            //------
            if ($productXML->descriptiveDetail != null) {
                $arrayTitleDetail = $productXML->descriptiveDetail->titleDetailList->arrayTitleDetail;
                
                $titleText = null;
                foreach ($arrayTitleDetail as $titleDetail) 
                {
                    $arrayTitleElement = $titleDetail->titleElementList->arrayTitleElement;

                    foreach ($arrayTitleElement as $titleElement) {

                        if ($titleElement->titleText != null) {
                            $titleText = $titleText . " " . $titleElement->titleText->contents;
                        }
                    }
                }
                $product->setTitleText($titleText); //se establece $titleText
            }
            //----------
            $arrayProductIdentifier = $productXML->productIdentifierList->arrayProductIdentifier;
            $productIDType = null;

            foreach ($arrayProductIdentifier as $productIdentifier) 
            {
                $productIDType = $productIDType . " " . $productIdentifier->productIDType->contents;
            }
            $product->setProductIDType($productIDType); //se establece $productIDType
            //----------
            if ($productXML->descriptiveDetail != null) {
                $product->setProductForm($productXML->descriptiveDetail->productForm->contents); //se establece $productForm
            }
            //-------
            if ($productXML->descriptiveDetail != null) {

                if ($productXML->descriptiveDetail->contributorList != null) {
                    $arrayContributor = $productXML->descriptiveDetail->contributorList->arrayContributor;
                    
                    $personName = null;
                    foreach ($arrayContributor as $contributor) 
                    {
                        if ($contributor->personName !== null) {
                            $personName = $personName . " " . $contributor->personName->contents;
                        }
                    }
                    $product->setPersonName($personName); //se establece $personName
                }
            }
            //-----------
            if ($productXML->descriptiveDetail != null) {

                if ($productXML->descriptiveDetail->subjectList != null) {
                    $arraySubject = $productXML->descriptiveDetail->subjectList->arraySubject;
                    
                    $subjectHeadingText = null;
                    foreach ($arraySubject as $subject) 
                    {
                        if ($subject->subjectHeadingTextList !== null) 
                        {
                            $arraySubjectHeadingText = $subject->subjectHeadingTextList->arraySubjectHeadingText;

                            foreach ($arraySubjectHeadingText as $subjectHeadingText) {
                                $subjectHeadingText = $subjectHeadingText->contents;
                            }
                        }
                    }
                    $product->setSubjectHeadingText($subjectHeadingText); //se establece $subjectHeadingText
                }
            }

            //caracteristicas que se usarán en editar (recordReference y productForm ya están)-------------

            if ($productXML->descriptiveDetail != null) {
                $arrayTitleDetail = $productXML->descriptiveDetail->titleDetailList->arrayTitleDetail;
                
                $titlePrefix = null;
                foreach ($arrayTitleDetail as $titleDetail) 
                {
                    $arrayTitleElement = $titleDetail->titleElementList->arrayTitleElement;

                    foreach ($arrayTitleElement as $titleElement) {

                        if ($titleElement->titlePrefix != null) {
                            $titlePrefix = $titlePrefix . " " . $titleElement->titlePrefix->contents;
                        }
                    }
                }
                $product->setTitlePrefix($titlePrefix); //se establece $titlePrefix
            }
            //----------
            if ($productXML->descriptiveDetail != null) {
                $arrayTitleDetail = $productXML->descriptiveDetail->titleDetailList->arrayTitleDetail;
                
                $titleWithoutPrefix = null;
                foreach ($arrayTitleDetail as $titleDetail) 
                {
                    $arrayTitleElement = $titleDetail->titleElementList->arrayTitleElement;

                    foreach ($arrayTitleElement as $titleElement) {

                        if ($titleElement->titleWithoutPrefix != null) {
                            $titleWithoutPrefix = $titleWithoutPrefix . " " . $titleElement->titleWithoutPrefix->contents;
                        }
                    }
                }
                $product->setTitleWithoutPrefix($titleWithoutPrefix); //se establece $titleWithoutPrefix
            }
            //----------
            $product->setNotificationType($productXML->notificationType->contents); //se establece $notificationType
            //--------
            if ($productXML->descriptiveDetail != null) {

                if ($productXML->descriptiveDetail->productFormDetailList != null) {
                    $arrayPFD = $productXML->descriptiveDetail->productFormDetailList->arrayProductFormDetail;

                    $PFD= null;
                    foreach ($arrayPFD as $productFormDetail) {
                        $PFD = $PFD . " " . $productFormDetail->contents;
                    }
                    $product->setProductFormDetail($PFD); //se establece $productFormDetail
                }
            }
            //-------------------
            if ($productXML->descriptiveDetail != null) {
                $product->setProductComposition($productXML->descriptiveDetail->productComposition->contents); //se establece $productComposition
            }
            //-------------------
            if ($productXML->descriptiveDetail != null) {

                if ($productXML->descriptiveDetail->collectionList != null) {
                    $arrayCollection = $productXML->descriptiveDetail->collectionList->arrayCollection;
                
                    $collectionType = null;
                    foreach ($arrayCollection as $collection) 
                    {
                        $collectionType = $collectionType . " " . $collection->collectionType->contents;
                    }
                    $product->setCollectionType($collectionType); //se establece $collectionType
                }
            }
            //-------------
            if ($productXML->descriptiveDetail != null) {

                if ($productXML->descriptiveDetail->collectionList != null) {
                    $arrayCollection = $productXML->descriptiveDetail->collectionList->arrayCollection;
                
                    $titleTextCollection = null;
                    foreach ($arrayCollection as $collection) 
                    {
                        if ($collection->titleDetailList != null) {
                            $arrayTitleDetail = $collection->titleDetailList->arrayTitleDetail;
                
                            foreach ($arrayTitleDetail as $titleDetail) 
                            {
                                $arrayTitleElement = $titleDetail->titleElementList->arrayTitleElement;

                                foreach ($arrayTitleElement as $titleElement) {

                                    if ($titleElement->titleText != null) {
                                        $titleTextCollection = $titleTextCollection . " " . $titleElement->titleText->contents;
                                    }
                                }
                            }
                        }
                    }
                    $product->setTitleTextCollection($titleTextCollection); //se establece $titleTextCollection
                }
            }
            //------------------
            if ($productXML->publishingDetail != null) {

                if ($productXML->publishingDetail->publisherList != null) {
                    $arrayPublisher = $productXML->publishingDetail->publisherList->arrayPublisher;
                
                    $publisherName = null;
                    foreach ($arrayPublisher as $publisher) 
                    {
                        if ($publisher->publisherName != null) {
                            $publisherName = $publisherName . " " . $publisher->publisherName->contents;
                        }
                    }
                    $product->setPublisherName($publisherName); //se establece $publisherName
                }
            }
            //-----------------
            if ($productXML->publishingDetail != null) {

                if ($productXML->publishingDetail->publishingDateList != null) {
                    $arrayPublishingDate = $productXML->publishingDetail->publishingDateList->arrayPublishingDate;
                
                    $PD = null;
                    foreach ($arrayPublishingDate as $publishingDate) 
                    {
                        $PD = $PD . " " . $publishingDate->date->contents;
                    }
                    $product->setPublishingDate($PD); //se establece $publishingDate
                }
            }
            //--------------
            if ($productXML->publishingDetail != null) {
                if ($productXML->publishingDetail->publishingStatus != null) {
                    $product->setPublishingStatus($productXML->publishingDetail->publishingStatus->contents); //se establece $publishingStatus
                }
            }
            //--------------
            if ($productXML->publishingDetail != null) {

                if ($productXML->publishingDetail->cityOfPublicationList != null) {
                    $arrayCityOfPublication = $productXML->publishingDetail->cityOfPublicationList->arrayCityOfPublication;
                
                    $COP = null;
                    foreach ($arrayCityOfPublication as $cityOfPublication) 
                    {
                        $COP = $COP . " " . $cityOfPublication->contents;
                    }
                    $product->setCityOfPublication($COP); //se establece $cityOfPublication
                }
            }
            //--------------
            if ($productXML->publishingDetail != null) {

                if ($productXML->publishingDetail->countryOfPublication != null) {
                    $product->setCountryOfPublication($productXML->publishingDetail->countryOfPublication); //se establece $countryOfPublication
                }
            }
            //--------------
            if ($productXML->descriptiveDetail != null) {

                if ($productXML->descriptiveDetail->languageList != null) {
                    $arrayLanguage = $productXML->descriptiveDetail->languageList->arrayLanguage;
                
                    $languageCode = null;
                    foreach ($arrayLanguage as $language) 
                    {
                        $languageCode = $languageCode . " " . $language->languageCode->contents;
                    }
                    $product->setLanguageCode($languageCode); //se establece $languageCode
                }
            }
            //------
            if ($productXML->descriptiveDetail != null) {

                if ($productXML->descriptiveDetail->countryOfManufacture != null) {
                    $product->setCountryOfManufacture($productXML->descriptiveDetail->countryOfManufacture->contents); //se establece $countryOfManufacture
                }
            }
            //------
            if ($productXML->descriptiveDetail != null) {

                if ($productXML->descriptiveDetail->primaryContentType != null) {
                    $product->setPrimaryContentType($productXML->descriptiveDetail->primaryContentType->contents); //se establece $primaryContentType
                }
            }
            //-------------
            if ($productXML->descriptiveDetail != null) {

                if ($productXML->descriptiveDetail->productPackaging != null) {
                    $product->setProductPackaging($productXML->descriptiveDetail->productPackaging->contents); //se establece $productPackaging
                }
            }
            //-------------
            if ($productXML->descriptiveDetail != null) {

                if ($productXML->descriptiveDetail->editionNumber != null) {
                    $product->setEditionNumber($productXML->descriptiveDetail->editionNumber->contents); //se establece $editionNumber
                }
            }
            //-------------
            if ($productXML->descriptiveDetail != null) {
                $arrayTitleDetail = $productXML->descriptiveDetail->titleDetailList->arrayTitleDetail;
                
                $subtitle = null;
                foreach ($arrayTitleDetail as $titleDetail) 
                {
                    $arrayTitleElement = $titleDetail->titleElementList->arrayTitleElement;

                    foreach ($arrayTitleElement as $titleElement) {

                        if ($titleElement->subtitle != null) {
                            $subtitle = $subtitle . " " . $titleElement->subtitle->contents;
                        }
                    }
                }
                $product->setSubtitle($subtitle); //se establece $subtitle
            }
            //----------
            if ($productXML->descriptiveDetail != null) {

                if ($productXML->descriptiveDetail->epubTechnicalProtectionList != null) {
                    $arrayETP = $productXML->descriptiveDetail->epubTechnicalProtectionList->arrayEpubTechnicalProtection;
                    
                    $ETP = null;
                    foreach ($arrayETP as $epubTechnicalProtection) 
                    {
                        $ETP = $ETP . " " . $epubTechnicalProtection->contents;
                    }
                    $product->setEpubTechnicalProtection($ETP); //se establece $epubTechnicalProtection
                }
            }
            //----------
            if ($productXML->descriptiveDetail != null) {

                if ($productXML->descriptiveDetail->collectionList != null) {
                    $arrayCollection = $productXML->descriptiveDetail->collectionList->arrayCollection;
                    
                    $CSN = null;
                    foreach ($arrayCollection as $collection) 
                    {
                        if ($collection->collectionSequenceList != null) {
                            $arrayCollectionSequence = $collection->collectionSequenceList->arrayCollectionSequence;

                            foreach ($arrayCollectionSequence as $collectionSequence) {
                                $CSN = $CSN . " " . $collectionSequence->collectionSequenceNumber->contents;
                            }
                        }
                    }
                    $product->setCollectionSequenceNumber($CSN); //se establece $collectionSequenceNumber
                }
            }
            //----------
            if ($productXML->publishingDetail != null) {

                if ($productXML->publishingDetail->copyrightStatementList != null) {
                    $arrayCS = $productXML->publishingDetail->copyrightStatementList->arrayCopyrightStatement;
                
                    $CY = null;
                    foreach ($arrayCS as $copyrightStatement) 
                    {
                        $arrayCY = $copyrightStatement->copyrightYearList->arrayCopyrightYear;
                        foreach ($arrayCY as $copyrightYear) {
                            $CY = $CY . " " . $copyrightYear->contents;
                        }
                        
                    }
                    $product->setCopyrigthYear($CY); //se establece $copyrightYear
                }
            }
            //--------------

            //Guardo los datos en la base de datos
            $file->addProduct($product);
            $this->saveProductService($product, $em);
            $this->fileUploadService($file, $em);
        }
    }
}