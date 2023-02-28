<?php

namespace App\Entity;

use App\Repository\RendezVousRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
#[ORM\Entity(repositoryClass: RendezVousRepository::class)]
class RendezVous
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
//TypeDateTimeType
    #[ORM\Column]
    private ?\DateTime $dateAt = null;

    #[ORM\Column(length: 255)]
    private ?string $discription = null;

    #[ORM\ManyToOne(inversedBy: 'rendezVouses')]
    private ?User $client = null;

    #[ORM\ManyToOne(inversedBy: 'rendezVouses')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Service $service = null;

    #[ORM\OneToOne(mappedBy: 'Rdv', cascade: ['persist', 'remove'])]
    private ?Notification $notification = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateAt(): ?\DateTime
    {
        return $this->dateAt;
    }

    public function setDateAt(\DateTime $dateAt): self
    {
        $this->dateAt = $dateAt;

        return $this;
    }

    public function getDiscription(): ?string
    {
        return $this->discription;
    }

    public function setDiscription(string $discription): self
    {
        $this->discription = $discription;

        return $this;
    }

    public function getClient(): ?User
    {
        return $this->client;
    }

    public function setClient(?User $client): self
    {
        $this->client = $client;

        return $this;
    }

    public function getService(): ?Service
    {
        return $this->service;
    }

    public function setService(?Service $service): self
    {
        $this->service = $service;

        return $this;
    }

    public function getNotification(): ?Notification
    {
        return $this->notification;
    }

    public function setNotification(?Notification $notification): self
    {
        // unset the owning side of the relation if necessary
        if ($notification === null && $this->notification !== null) {
            $this->notification->setRdv(null);
        }

        // set the owning side of the relation if necessary
        if ($notification !== null && $notification->getRdv() !== $this) {
            $notification->setRdv($this);
        }

        $this->notification = $notification;

        return $this;
    }


}
