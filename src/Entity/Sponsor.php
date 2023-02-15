<?php

namespace App\Entity;

use App\Repository\SponsorRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SponsorRepository::class)]
class Sponsor
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $logo = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\ManyToOne(inversedBy: 'sponsors')]
    #[ORM\JoinColumn(nullable: true, onDelete: 'SET NULL')]
    private ?TypeContrat $type = null;

    #[ORM\ManyToOne(inversedBy: 'sponsors')]
    #[ORM\JoinColumn(nullable: true, onDelete: 'SET NULL')]
    private ?Evenement $event = null;

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

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(string $logo): self
    {
        $this->logo = $logo;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getType(): ?TypeContrat
    {
        return $this->type;
    }

    public function setType(?TypeContrat $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getEvent(): ?Evenement
    {
        return $this->event;
    }

    public function setEvent(?Evenement $event): self
    {
        $this->event = $event;

        return $this;
    }
}
