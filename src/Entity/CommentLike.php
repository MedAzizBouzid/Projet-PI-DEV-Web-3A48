<?php

namespace App\Entity;

use App\Repository\CommentLikeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentLikeRepository::class)]
class CommentLike
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'commentLikes')]
    private ?Commentaire $comment = null;

    #[ORM\Column(length: 255)]
    private ?string $userEmail = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getComment(): ?Commentaire
    {
        return $this->comment;
    }

    public function setComment(?Commentaire $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getUserEmail(): ?string
    {
        return $this->userEmail;
    }

    public function setUserEmail(string $userEmail): self
    {
        $this->userEmail = $userEmail;

        return $this;
    }
}
