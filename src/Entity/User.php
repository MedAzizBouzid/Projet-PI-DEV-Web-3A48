<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: '`user`')]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(  message :'Name is required')]
        private ?string $nom = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(  message :'Lastname is required')]

    private ?string $prenom = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(  message :'Username is required')]

    private ?string $userName = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(  message :'Email is required')]
    #[Assert\Email(
        message: 'The email {{ value }} is not a valid email.',
    )]
    private ?string $email = null;

    #[ORM\Column]
    #[Assert\NotBlank(  message :'tel is required')]
    #[Assert\Length(min:8,max:8, minMessage:"numTel must be 8 numbers",maxMessage:"numTel must be 8 numbers")]
   
    private ?int $numTel = null;

   

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(  message :'password is required')]

    private ?string $pwd = null;

    #[ORM\Column(length: 255)]
    private ?int $etat = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\NotBlank(  message :'image is required')]

    private ?string $img = null;

    #[ORM\ManyToOne(inversedBy: 'users')]
    private ?Role $role = null;

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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getUserName(): ?string
    {
        return $this->userName;
    }

    public function setUserName(string $userName): self
    {
        $this->userName = $userName;

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

    public function getNumTel(): ?int
    {
        return $this->numTel;
    }

    public function setNumTel(int $numTel): self
    {
        $this->numTel = $numTel;

        return $this;
    }

    public function getPwd(): ?string
    {
        return $this->pwd;
    }

    public function setPwd(string $pwd): self
    {
        $this->pwd = $pwd;

        return $this;
    }

    public function getEtat(): ?int
    {
        return $this->etat;
    }

    public function setEtat(int $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(?string $img): self
    {
        $this->img = $img;

        return $this;
    }

    public function getRole(): ?Role
    {
        return $this->role;
    }

    public function setRole(?Role $role): self
    {
        $this->role = $role;

        return $this;
    }
}
