<?php

namespace App\Entity;

use App\Repository\NotificationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NotificationRepository::class)]
class Notification
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $message = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $dateeAt = null;

    #[ORM\OneToOne(inversedBy: 'notification', cascade: ['persist', 'remove'])]
    private ?RendezVous $Rdv = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getDateeAt(): ?\DateTimeImmutable
    {
        return $this->dateeAt;
    }

    public function setDateeAt(\DateTimeImmutable $dateeAt): self
    {
        $this->dateeAt = $dateeAt;

        return $this;
    }

    public function getRdv(): ?RendezVous
    {
        return $this->Rdv;
    }

    public function setRdv(?RendezVous $Rdv): self
    {
        $this->Rdv = $Rdv;

        return $this;
    }
}
