<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommandeRepository::class)]
class Commande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $NbArticles = null;

    #[ORM\Column]
    private ?float $TotalCommande = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Panier $Panier = null;

    #[ORM\Column(length: 255)]
    private ?string $etat = null;

    #[ORM\Column(length: 255)]
    private ?string $NumTelClient = null;
    // Register Magic Method to Print the name of the State e.g California
    public function __toString()
    {
        return (string) $this->getPanier();
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbArticles(): ?int
    {
        return $this->NbArticles;
    }

    public function setNbArticles(int $NbArticles): self
    {
        $this->NbArticles = $NbArticles;

        return $this;
    }

    public function getTotalCommande(): ?float
    {
        return $this->TotalCommande;
    }

    public function setTotalCommande(float $TotalCommande): self
    {
        $this->TotalCommande = $TotalCommande;

        return $this;
    }

    public function getPanier(): ?Panier
    {
        return $this->Panier;
    }

    public function setPanier(?Panier $Panier): self
    {
        $this->Panier = $Panier;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getNumTelClient(): ?string
    {
        return $this->NumTelClient;
    }

    public function setNumTelClient(string $NumTelClient): self
    {
        $this->NumTelClient = $NumTelClient;

        return $this;
    }
}
