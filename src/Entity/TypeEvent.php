<?php

namespace App\Entity;

use App\Entity\Evenement;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\TypeEventRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: TypeEventRepository::class)]
class TypeEvent
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups("events_list")]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups("events_list")]
    private ?string $typeE = null;

    #[ORM\OneToMany(mappedBy: 'type', targetEntity: Evenement::class)]
    private Collection $evenements;

    public function __construct()
    {
        $this->evenements = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeE(): ?string
    {
        return $this->typeE;
    }

    public function setTypeE(string $typeE): self
    {
        $this->typeE = $typeE;

        return $this;
    }

    /**
     * @return Collection<int, Evenement>
     */
    public function getEvenements(): Collection
    {
        return $this->evenements;
    }

    public function addEvenement(Evenement $evenement): self
    {
        if (!$this->evenements->contains($evenement)) {
            $this->evenements->add($evenement);
            $evenement->setType($this);
        }

        return $this;
    }

    public function removeEvenement(Evenement $evenement): self
    {
        if ($this->evenements->removeElement($evenement)) {
            // set the owning side to null (unless already changed)
            if ($evenement->getType() === $this) {
                $evenement->setType(null);
            }
        }

        return $this;
    }
}
