<?php

namespace App\Entity;

use App\Repository\ActiviteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ActiviteRepository::class)]
class Activite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $categorie = null;

    #[ORM\Column(length: 255)]
    private ?string $materiel = null;

    #[ORM\Column(length: 255)]
    private ?string $intensite = null;

    #[ORM\Column(length: 255)]
    private ?string $GRPmusculaire = null;

    #[ORM\Column(length: 255)]
    private ?string $tenue = null;

    #[ORM\Column(length: 255)]
    private ?string $recomendation = null;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    #[ORM\ManyToMany(targetEntity: Salle::class, mappedBy: 'cours')]
    private Collection $salles;

    public function __construct()
    {
        $this->salles = new ArrayCollection();
    }

   

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getMateriel(): ?string
    {
        return $this->materiel;
    }

    public function setMateriel(string $materiel): self
    {
        $this->materiel = $materiel;

        return $this;
    }

    public function getIntensite(): ?string
    {
        return $this->intensite;
    }

    public function setIntensite(string $intensite): self
    {
        $this->intensite = $intensite;

        return $this;
    }

    public function getGrpMusculaire(): ?string
    {
        return $this->GRPmusculaire;
    }

    public function setGrpMusculaire(string $grp_musculaire): self
    {
        $this->GRPmusculaire = $grp_musculaire;

        return $this;
    }

    public function getTenue(): ?string
    {
        return $this->tenue;
    }

    public function setTenue(string $tenue): self
    {
        $this->tenue = $tenue;

        return $this;
    }

    public function getRecomendation(): ?string
    {
        return $this->recomendation;
    }

    public function setRecomendation(string $recomendation): self
    {
        $this->recomendation = $recomendation;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return Collection<int, Salle>
     */
    public function getSalles(): Collection
    {
        return $this->salles;
    }

    public function addSalle(Salle $salle): self
    {
        if (!$this->salles->contains($salle)) {
            $this->salles->add($salle);
            $salle->addCour($this);
        }

        return $this;
    }

    public function removeSalle(Salle $salle): self
    {
        if ($this->salles->removeElement($salle)) {
            $salle->removeCour($this);
        }

        return $this;
    }

 
}
