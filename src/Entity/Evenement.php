<?php

namespace App\Entity;

use App\Repository\EvenementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: EvenementRepository::class)]
class Evenement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups("events_list")]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(
        message: 'remplissez',
        )]
    #[Groups("events_list")]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    #[Groups("events_list")]
    private ?string $lieu = null;

    #[ORM\Column]
    #[Groups("events_list")]
    private ?\DateTimeImmutable $beginAt = null;

    #[ORM\Column]
    #[Groups("events_list")]
    private ?\DateTimeImmutable $finishAt = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Groups("events_list")]
    private ?string $description = null;



    #[ORM\Column]
    #[Groups("events_list")]
    private ?int $capacite = null;

    #[ORM\ManyToOne(inversedBy: 'evenements')]
    #[Groups("events_list")]
    private ?TypeEvent $type = null;

    #[ORM\OneToMany(mappedBy: 'event', targetEntity: Sponsor::class)]
    private Collection $sponsors;

    #[ORM\Column(nullable: true)]
    #[Groups("events_list")]
    private ?float $prix = null;

    #[ORM\OneToMany(mappedBy: 'event', targetEntity: Pass::class)]
    private Collection $passes;

    #[ORM\OneToMany(mappedBy: 'event', targetEntity: Commentaire::class)]
    private Collection $commentaires;



    public function __construct()
    {
        $this->sponsors = new ArrayCollection();
        $this->passes = new ArrayCollection();
        $this->commentaires = new ArrayCollection();
  
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

    public function getBeginAt(): ?\DateTimeImmutable
    {
        return $this->beginAt;
    }

    public function setBeginAt(\DateTimeImmutable $beginAt): self
    {
        $this->beginAt = $beginAt;

        return $this;
    }

    public function getFinishAt(): ?\DateTimeImmutable
    {
        return $this->finishAt;
    }

    public function setFinishAt(\DateTimeImmutable $finishAt): self
    {
        $this->finishAt = $finishAt;

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



    public function getCapacite(): ?int
    {
        return $this->capacite;
    }

    public function setCapacite(int $capacite): self
    {
        $this->capacite = $capacite;

        return $this;
    }

    public function getType(): ?TypeEvent
    {
        return $this->type;
    }

    public function setType(?TypeEvent $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return Collection<int, Sponsor>
     */
    public function getSponsors(): Collection
    {
        return $this->sponsors;
    }

    public function addSponsor(Sponsor $sponsor): self
    {
        if (!$this->sponsors->contains($sponsor)) {
            $this->sponsors->add($sponsor);
            $sponsor->setEvent($this);
        }

        return $this;
    }

    public function removeSponsor(Sponsor $sponsor): self
    {
        if ($this->sponsors->removeElement($sponsor)) {
            // set the owning side to null (unless already changed)
            if ($sponsor->getEvent() === $this) {
                $sponsor->setEvent(null);
            }
        }

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(?float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * @return Collection<int, Pass>
     */
    public function getPasses(): Collection
    {
        return $this->passes;
    }

    public function addPass(Pass $pass): self
    {
        if (!$this->passes->contains($pass)) {
            $this->passes->add($pass);
            $pass->setEvent($this);
        }

        return $this;
    }

    public function removePass(Pass $pass): self
    {
        if ($this->passes->removeElement($pass)) {
            // set the owning side to null (unless already changed)
            if ($pass->getEvent() === $this) {
                $pass->setEvent(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Commentaire>
     */
    public function getCommentaires(): Collection
    {
        return $this->commentaires;
    }

    public function addCommentaire(Commentaire $commentaire): self
    {
        if (!$this->commentaires->contains($commentaire)) {
            $this->commentaires->add($commentaire);
            $commentaire->setEvent($this);
        }

        return $this;
    }

    public function removeCommentaire(Commentaire $commentaire): self
    {
        if ($this->commentaires->removeElement($commentaire)) {
            // set the owning side to null (unless already changed)
            if ($commentaire->getEvent() === $this) {
                $commentaire->setEvent(null);
            }
        }

        return $this;
    }

   
}
