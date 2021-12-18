<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass=ProductRepository::class)
 * @UniqueEntity("recordReference")
 */
class Product
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $recordReference;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $titleText;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $productIDType;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $productForm;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $personName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $subjectHeadingText;

    /**
     * @ORM\ManyToOne(targetEntity=File::class, inversedBy="products")
     * @ORM\JoinColumn(nullable=false)
     */
    private $file;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $titlePrefix;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $titleWithoutPrefix;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $notificationType;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $productFormDetail;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $productComposition;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $collectionType;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $titleTextCollection;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $publisherName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $publishingDate;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $publishingStatus;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cityOfPublication;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $countryOfPublication;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $countryOfManufacture;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $languageCode;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $copyrigthYear;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $numberOfPages;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $editionNumber;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $subtitle;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $collectionSequenceNumber;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $epubTechnicalProtection;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $productPackaging;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $primaryContentType;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRecordReference(): ?string
    {
        return $this->recordReference;
    }

    public function setRecordReference(string $recordReference): self
    {
        $this->recordReference = $recordReference;

        return $this;
    }

    public function getTitleText(): ?string
    {
        return $this->titleText;
    }

    public function setTitleText(?string $titleText): self
    {
        $this->titleText = $titleText;

        return $this;
    }

    public function getProductIDType(): ?string
    {
        return $this->productIDType;
    }

    public function setProductIDType(string $productIDType): self
    {
        $this->productIDType = $productIDType;

        return $this;
    }

    public function getProductForm(): ?string
    {
        return $this->productForm;
    }

    public function setProductForm(string $productForm): self
    {
        $this->productForm = $productForm;

        return $this;
    }

    public function getPersonName(): ?string
    {
        return $this->personName;
    }

    public function setPersonName(?string $personName): self
    {
        $this->personName = $personName;

        return $this;
    }

    public function getSubjectHeadingText(): ?string
    {
        return $this->subjectHeadingText;
    }

    public function setSubjectHeadingText(?string $subjectHeadingText): self
    {
        $this->subjectHeadingText = $subjectHeadingText;

        return $this;
    }

    public function getFile(): ?File
    {
        return $this->file;
    }

    public function setFile(?File $file): self
    {
        $this->file = $file;

        return $this;
    }

    public function getTitlePrefix(): ?string
    {
        return $this->titlePrefix;
    }

    public function setTitlePrefix(?string $titlePrefix): self
    {
        $this->titlePrefix = $titlePrefix;

        return $this;
    }

    public function getTitleWithoutPrefix(): ?string
    {
        return $this->titleWithoutPrefix;
    }

    public function setTitleWithoutPrefix(?string $titleWithoutPrefix): self
    {
        $this->titleWithoutPrefix = $titleWithoutPrefix;

        return $this;
    }

    public function getNotificationType(): ?string
    {
        return $this->notificationType;
    }

    public function setNotificationType(string $notificationType): self
    {
        $this->notificationType = $notificationType;

        return $this;
    }

    public function getProductFormDetail(): ?string
    {
        return $this->productFormDetail;
    }

    public function setProductFormDetail(?string $productFormDetail): self
    {
        $this->productFormDetail = $productFormDetail;

        return $this;
    }

    public function getProductComposition(): ?string
    {
        return $this->productComposition;
    }

    public function setProductComposition(string $productComposition): self
    {
        $this->productComposition = $productComposition;

        return $this;
    }

    public function getCollectionType(): ?string
    {
        return $this->collectionType;
    }

    public function setCollectionType(string $collectionType): self
    {
        $this->collectionType = $collectionType;

        return $this;
    }

    public function getTitleTextCollection(): ?string
    {
        return $this->titleTextCollection;
    }

    public function setTitleTextCollection(?string $titleTextCollection): self
    {
        $this->titleTextCollection = $titleTextCollection;

        return $this;
    }

    public function getPublisherName(): ?string
    {
        return $this->publisherName;
    }

    public function setPublisherName(?string $publisherName): self
    {
        $this->publisherName = $publisherName;

        return $this;
    }

    public function getPublishingDate(): ?string
    {
        return $this->publishingDate;
    }

    public function setPublishingDate(string $publishingDate): self
    {
        $this->publishingDate = $publishingDate;

        return $this;
    }

    public function getPublishingStatus(): ?string
    {
        return $this->publishingStatus;
    }

    public function setPublishingStatus(?string $publishingStatus): self
    {
        $this->publishingStatus = $publishingStatus;

        return $this;
    }

    public function getCityOfPublication(): ?string
    {
        return $this->cityOfPublication;
    }

    public function setCityOfPublication(?string $cityOfPublication): self
    {
        $this->cityOfPublication = $cityOfPublication;

        return $this;
    }

    public function getCountryOfPublication(): ?string
    {
        return $this->countryOfPublication;
    }

    public function setCountryOfPublication(?string $countryOfPublication): self
    {
        $this->countryOfPublication = $countryOfPublication;

        return $this;
    }

    public function getCountryOfManufacture(): ?string
    {
        return $this->countryOfManufacture;
    }

    public function setCountryOfManufacture(?string $countryOfManufacture): self
    {
        $this->countryOfManufacture = $countryOfManufacture;

        return $this;
    }

    public function getLanguageCode(): ?string
    {
        return $this->languageCode;
    }

    public function setLanguageCode(?string $languageCode): self
    {
        $this->languageCode = $languageCode;

        return $this;
    }

    public function getCopyrigthYear(): ?string
    {
        return $this->copyrigthYear;
    }

    public function setCopyrigthYear(?string $copyrigthYear): self
    {
        $this->copyrigthYear = $copyrigthYear;

        return $this;
    }

    public function getNumberOfPages(): ?string
    {
        return $this->numberOfPages;
    }

    public function setNumberOfPages(?string $numberOfPages): self
    {
        $this->numberOfPages = $numberOfPages;

        return $this;
    }

    public function getEditionNumber(): ?string
    {
        return $this->editionNumber;
    }

    public function setEditionNumber(?string $editionNumber): self
    {
        $this->editionNumber = $editionNumber;

        return $this;
    }

    public function getSubtitle(): ?string
    {
        return $this->subtitle;
    }

    public function setSubtitle(?string $subtitle): self
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    public function getCollectionSequenceNumber(): ?string
    {
        return $this->collectionSequenceNumber;
    }

    public function setCollectionSequenceNumber(?string $collectionSequenceNumber): self
    {
        $this->collectionSequenceNumber = $collectionSequenceNumber;

        return $this;
    }

    public function getEpubTechnicalProtection(): ?string
    {
        return $this->epubTechnicalProtection;
    }

    public function setEpubTechnicalProtection(?string $epubTechnicalProtection): self
    {
        $this->epubTechnicalProtection = $epubTechnicalProtection;

        return $this;
    }

    public function getProductPackaging(): ?string
    {
        return $this->productPackaging;
    }

    public function setProductPackaging(?string $productPackaging): self
    {
        $this->productPackaging = $productPackaging;

        return $this;
    }

    public function getPrimaryContentType(): ?string
    {
        return $this->primaryContentType;
    }

    public function setPrimaryContentType(?string $primaryContentType): self
    {
        $this->primaryContentType = $primaryContentType;

        return $this;
    }
}
