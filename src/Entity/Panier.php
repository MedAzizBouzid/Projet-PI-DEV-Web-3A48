<?php

namespace App\Entity;

use App\Repository\PanierRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PanierRepository::class)]
class Panier
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $TotalPanier = null;

    #[ORM\OneToMany(mappedBy: 'panier', targetEntity: LignePanier::class)]
    private Collection $lignesPanier;

    

    #[ORM\Column(nullable: true)]
    private ?int $nombreArticles = null;

    #[ORM\ManyToOne(inversedBy: 'paniers')]
    private ?User $Client = null;

    public function __construct()
    {
        $this->lignesPanier = new ArrayCollection();
    }
// Register Magic Method to Print the name of the State e.g California

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTotalPanier(): ?float
    {
        return $this->TotalPanier;
    }

    public function setTotalPanier(float $TotalPanier): self
    {
        $this->TotalPanier = $TotalPanier;

        return $this;
    }

    /**
     * @return Collection<int, lignePanier>
     */
    public function getLignesPanier(): Collection
    {
        return $this->lignesPanier;
    }

    public function addLignesPanier(lignePanier $lignesPanier): self
    {
        if (!$this->lignesPanier->contains($lignesPanier)) {
            $this->lignesPanier->add($lignesPanier);
            $lignesPanier->setPanier($this);
        }

        return $this;
    }

    public function removeLignesPanier(lignePanier $lignesPanier): self
    {
        if ($this->lignesPanier->removeElement($lignesPanier)) {
            // set the owning side to null (unless already changed)
            if ($lignesPanier->getPanier() === $this) {
                $lignesPanier->setPanier(null);
            }
        }

        return $this;
    }

    

    public function getNombreArticles(): ?int
    {
        return $this->nombreArticles;
    }

    public function setNombreArticles(?int $nombreArticles): self
    {
        $this->nombreArticles = $nombreArticles;

        return $this;
    }

    public function getClient(): ?User
    {
        return $this->Client;
    }

    public function setClient(?User $Client): self
    {
        $this->Client = $Client;

        return $this;
    }
}
