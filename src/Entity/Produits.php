<?php

namespace App\Entity;

use App\Repository\ProduitsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProduitsRepository::class)]
class Produits
{

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_produit = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description_produit = null;

    #[ORM\Column]
    private ?float $prix_produit = null;

    #[ORM\Column(length: 255)]
    private ?string $image_produit = null;

    #[ORM\Column]
    private ?bool $stock_produit = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date_produit = null;

    #[ORM\ManyToOne(targetEntity:User::class, inversedBy: 'produits')]
    #[ORM\JoinColumn(nullable:true)]
    private $user_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomProduit(): ?string
    {
        return $this->nom_produit;
    }

    public function setNomProduit(string $nom_produit): static
    {
        $this->nom_produit = $nom_produit;

        return $this;
    }

    public function getDescriptionProduit(): ?string
    {
        return $this->description_produit;
    }

    public function setDescriptionProduit(string $description_produit): static
    {
        $this->description_produit = $description_produit;

        return $this;
    }

    public function getPrixProduit(): ?float
    {
        return $this->prix_produit;
    }

    public function setPrixProduit(float $prix_produit): static
    {
        $this->prix_produit = $prix_produit;

        return $this;
    }

    public function getImageProduit(): ?string
    {
        return $this->image_produit;
    }

    public function setImageProduit(string $image_produit): static
    {
        $this->image_produit = $image_produit;

        return $this;
    }

    public function isStockProduit(): ?bool
    {
        return $this->stock_produit;
    }

    public function setStockProduit(bool $stock_produit): static
    {
        $this->stock_produit = $stock_produit;

        return $this;
    }

    public function getDateProduit(): ?\DateTimeInterface
    {
        return $this->date_produit;
    }

    public function setDateProduit(\DateTimeInterface $date_produit): static
    {
        $this->date_produit = $date_produit;

        return $this;
    }

    public function getUserId(): ?User
    {
        return $this->user_id;
    }

    public function setUserId(?User $user_id): static
    {
        $this->user_id = $user_id;

        return $this;
    }

    public  function __toString()
    {
        return $this->user_id;
    }
}
