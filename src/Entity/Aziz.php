<?php

namespace App\Entity;

use App\Repository\AzizRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AzizRepository::class)]
class Aziz
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }
}
