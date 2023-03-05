<?php

namespace App\Entity;

use App\Repository\SalleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
#[ORM\Entity(repositoryClass: SalleRepository::class)]
class Salle
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups("salles")]

    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups("salles")]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    #[Groups("salles")]
    private ?string $lieu = null;

    #[ORM\Column]
    #[Groups("salles")]

    private ?int $telephone = null;

    #[ORM\Column(length: 255)]
    #[Groups("salles")]

    private ?string $email = null;

    #[ORM\Column(length: 255)]
    #[Groups("salles")]

    private ?string $superficie = null;

    #[ORM\Column(length: 255)]
    #[Groups("salles")]

    private ?string $description = null;

    #[ORM\Column(length: 255)]
    #[Groups("salles")]

    private ?string $image = null;

    #[ORM\ManyToMany(targetEntity: Activite::class, inversedBy: 'salles')]
    private Collection $cours;

    public function __construct()
    {
        $this->cours = new ArrayCollection();
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

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(int $telephone): self
    {
        $this->telephone = $telephone;

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

    public function getSuperficie(): ?string
    {
        return $this->superficie;
    }

    public function setSuperficie(string $superficie): self
    {
        $this->superficie = $superficie;

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
     * @return Collection<int, Activite>
     */
    public function getCours(): Collection
    {
        return $this->cours;
    }

    public function addCour(Activite $cour): self
    {
        if (!$this->cours->contains($cour)) {
            $this->cours->add($cour);
        }

        return $this;
    }

    public function removeCour(Activite $cour): self
    {
        $this->cours->removeElement($cour);

        return $this;
    }

    
}
