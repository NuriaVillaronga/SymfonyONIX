<?php

namespace App\Entity;

use App\Repository\FileRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=FileRepository::class)
 */
class File
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * 
     * @Assert\File(mimeTypes={"application/xml"})
     */
    private $file;

    /**
     * @ORM\ManyToOne(targetEntity=Catalog::class, inversedBy="files")
     * @ORM\JoinColumn(nullable=false)
     */
    private $catalogs;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFile(): ?string
    {
        return $this->file;
    }

    public function setFile(string $file): self
    {
        $this->file = $file;

        return $this;
    }

    public function getCatalogs(): ?Catalog
    {
        return $this->catalogs;
    }

    public function setCatalogs(?Catalog $catalogs): self
    {
        $this->catalogs = $catalogs;

        return $this;
    }
}
