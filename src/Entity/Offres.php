<?php

namespace App\Entity;

use App\Repository\OffresRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: OffresRepository::class)]
class Offres
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
   
   
    private ?int $id = null;
    

   
   




    #[ORM\Column]
    #[Assert\NotBlank(
        message :"veuillez remplir ce champs"
    )]
    #[Assert\GreaterThan(0,
    message:"le prix ne peut pas etre 0 dt"
        
    )]
   
    private ?float $prix = null;
  
  

    #[ORM\Column]
    #[Assert\NotBlank(
        message :"veuillez remplir ce champs"
    )]
    #[Assert\GreaterThan(0,
    message:"la duree minimale d un offre est 1 mois"
        
    )]
    #[Assert\LessThan(9,
    message:"le duree maximale d'un offre est 8 mois"
        
    )]
    private ?int $duree = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank(
        message :"veuillez remplir ce champs"
    )]
    #[Assert\Length(
        min:'5',
        max:'20',
        minMessage:'la longuer minimale est  5 caratére ',
        maxMessage:'la longuer maximale est 20 cartére',
    )]

    private ?string $description = null;

    #[ORM\OneToMany(mappedBy: 'offre', targetEntity: Abonnement::class)]
    private Collection $abonnements;

    #[ORM\ManyToOne(inversedBy: 'offres')]
    private ?Promotion $promo = null;

    #[ORM\ManyToOne(inversedBy: 'offres')]
    private ?Categorie $categ = null;

 
   
   

   

   

    public function __construct()
    {
        $this->abonnements = new ArrayCollection();
    }

     
   

    public function getId(): ?int
    {
        return $this->id;
    }



   
    

  

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getDuree(): ?int
    {
        return $this->duree;
    }

    public function setDuree(int $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection<int, Abonnement>
     */
    public function getAbonnements(): Collection
    {
        return $this->abonnements;
    }

    public function addAbonnement(Abonnement $abonnement): self
    {
        if (!$this->abonnements->contains($abonnement)) {
            $this->abonnements->add($abonnement);
            $abonnement->setOffre($this);
        }

        return $this;
    }

    public function removeAbonnement(Abonnement $abonnement): self
    {
        if ($this->abonnements->removeElement($abonnement)) {
            // set the owning side to null (unless already changed)
            if ($abonnement->getOffre() === $this) {
                $abonnement->setOffre(null);
            }
        }

        return $this;
    }

    public function getPromo(): ?Promotion
    {
        return $this->promo;
    }

    public function setPromo(?Promotion $promo): self
    {
        $this->promo = $promo;

        return $this;
    }

    public function getNvPrix(): ?float
    {
        return $this->nv_prix;
    }

    public function setNvPrix(?float $nv_prix): self
    {
        $this->nv_prix = $nv_prix;

        return $this;
    }

    public function getCateg(): ?categorie
    {
        return $this->categ;
    }

    public function setCateg(?categorie $categ): self
    {
        $this->categ = $categ;

        return $this;
    }

  
 
  
}
