<?php

namespace App\Entity;

use App\Repository\AbonnementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: AbonnementRepository::class)]
class Abonnement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $salle = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $DateD = null;

    #[ORM\Column(length: 255)]
    private ?string $MPayement = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank( )]
    #[Assert\Email(
        message: ' cette adresse {{ value }} nest pas valide .',
    )]
    private ?string $Email = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(
        message: 'Veuillez remplir ce champs',
    )]
  
   
    private ?string $Name = null;

    #[ORM\ManyToOne(inversedBy: 'abonnements')]
    #[ORM\JoinColumn(nullable: true, onDelete: 'SET NULL')]
    private ?Offres $offre = null;

 

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSalle(): ?string
    {
        return $this->salle;
    }

    public function setSalle(string $salle): self
    {
        $this->salle = $salle;

        return $this;
    }

    public function getDateD(): ?\DateTimeInterface
    {
        return $this->DateD;
    }

    public function setDateD(\DateTimeInterface $DateD): self
    {
        $this->DateD = $DateD;

        return $this;
    }

    public function getMPayement(): ?string
    {
        return $this->MPayement;
    }

    public function setMPayement(string $MPayement): self
    {
        $this->MPayement = $MPayement;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getOffre(): ?Offres
    {
        return $this->offre;
    }

    public function setOffre(?Offres $offre): self
    {
        $this->offre = $offre;

        return $this;
    }
 


}
