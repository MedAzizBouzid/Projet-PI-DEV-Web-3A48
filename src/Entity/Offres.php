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
    

    #[ORM\Column(length: 255)]
    
    private ?string $type = null;

   




    #[ORM\Column]
    #[Assert\NotBlank(
        message :"veuillez remplir ce champs"
    )]
    #[Assert\GreaterThan(99,
    message:"le prix minimale est 100"
        
    )]
    #[Assert\LessThan(801,
    message:"le prix maximale est 800"
        
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
        min:'20',
        max:'80',
        minMessage:'la longuer minimale est  20 caratére ',
        maxMessage:'la longuer maximale est 80 cartére',
    )]

    private ?string $description = null;

    #[ORM\OneToMany(mappedBy: 'offre', targetEntity: Abonnement::class)]
    private Collection $abonnements;

   

    public function __construct()
    {
        $this->abonnements = new ArrayCollection();
    }

     
   

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
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

  

 
  
}
