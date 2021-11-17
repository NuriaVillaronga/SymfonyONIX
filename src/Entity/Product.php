<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductRepository::class)
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
    private $isbnDetail;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $isbnType;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $productForm;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $personName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $subjectTitle;

    /**
     * @ORM\ManyToOne(targetEntity=File::class, inversedBy="products")
     * @ORM\JoinColumn(nullable=false)
     */
    private $file;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIsbnDetail(): ?string
    {
        return $this->isbnDetail;
    }

    public function setIsbnDetail(string $isbnDetail): self
    {
        $this->isbnDetail = $isbnDetail;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getIsbnType(): ?string
    {
        return $this->isbnType;
    }

    public function setIsbnType(string $isbnType): self
    {
        $this->isbnType = $isbnType;

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

    public function getSubjectTitle(): ?string
    {
        return $this->subjectTitle;
    }

    public function setSubjectTitle(?string $subjectTitle): self
    {
        $this->subjectTitle = $subjectTitle;

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
}
