<?php

namespace App\Entity;

use App\Repository\MapRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MapRepository::class)]
class Map
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $lat = null;

    #[ORM\Column]
    private ?float $longt = null;

    #[ORM\ManyToOne]
    private ?Salle $mapsalle = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLat(): ?float
    {
        return $this->lat;
    }

    public function setLat(float $lat): self
    {
        $this->lat = $lat;

        return $this;
    }

    public function getLongt(): ?float
    {
        return $this->longt;
    }

    public function setLongt(float $longt): self
    {
        $this->longt = $longt;

        return $this;
    }

    public function getMapsalle(): ?Salle
    {
        return $this->mapsalle;
    }

    public function setMapsalle(?Salle $mapsalle): self
    {
        $this->mapsalle = $mapsalle;

        return $this;
    }
}
