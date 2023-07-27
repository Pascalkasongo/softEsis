<?php

namespace App\Entity;

use App\Repository\ProfesseurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProfesseurRepository::class)]
class Professeur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomProfesseur = null;

    #[ORM\Column(length: 255)]
    private ?string $numeroTelephone = null;

    #[ORM\Column(length: 255)]
    private ?string $gradeProfesseur = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomProfesseur(): ?string
    {
        return $this->nomProfesseur;
    }

    public function setNomProfesseur(string $nomProfesseur): static
    {
        $this->nomProfesseur = $nomProfesseur;

        return $this;
    }

    public function getNumeroTelephone(): ?string
    {
        return $this->numeroTelephone;
    }

    public function setNumeroTelephone(string $numeroTelephone): static
    {
        $this->numeroTelephone = $numeroTelephone;

        return $this;
    }

    public function getGradeProfesseur(): ?string
    {
        return $this->gradeProfesseur;
    }

    public function setGradeProfesseur(string $gradeProfesseur): static
    {
        $this->gradeProfesseur = $gradeProfesseur;

        return $this;
    }
}
