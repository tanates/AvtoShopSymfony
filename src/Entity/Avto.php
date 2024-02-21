<?php

namespace App\Entity;

use App\Repository\AvtoRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AvtoRepository::class)]
class Avto
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $AvtoName = null;

    #[ORM\Column(length: 255)]
    private ?string $PriceAvto = null;

    #[ORM\Column(length: 255)]
    private ?string $AvtoImagesLink = null;

    


    public function getId(): ?int
    {
        return $this->id;
    }

   
    public function getAvtoName(): ?string
    {
        return $this->AvtoName;
    }

    public function setAvtoName(string $AvtoName): static
    {
        $this->AvtoName = $AvtoName;

        return $this;
    }

    public function getPriceAvto(): ?string
    {
        return $this->PriceAvto;
    }

    public function setPriceAvto(string $PriceAvto): static
    {
        $this->PriceAvto = $PriceAvto;

        return $this;
    }

    public function getAvtoImagesLink(): ?string
    {
        return $this->AvtoImagesLink;
    }

    public function setAvtoImagesLink(string $AvtoImagesLink): static
    {
        $this->AvtoImagesLink = $AvtoImagesLink;

        return $this;
    }

}
