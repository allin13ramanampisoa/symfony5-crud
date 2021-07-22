<?php

namespace App\Entity;


use App\Repository\ExperienceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Entity(repositoryClass=ExperienceRepository::class)
 */
class Experience
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $titre;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombreExperience;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $domaine;

    // ------------- RELATION --------------

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Employe", cascade={"persist", "remove"}, inversedBy="experience")
     */
    protected $employe;

    // ------------- //// RELATION //// --------------

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getNombreExperience(): ?int
    {
        return $this->nombreExperience;
    }

    public function setNombreExperience(int $nombreExperience): self
    {
        $this->nombreExperience = $nombreExperience;

        return $this;
    }

    public function getDomaine(): ?string
    {
        return $this->domaine;
    }

    public function setDomaine(string $domaine): self
    {
        $this->domaine = $domaine;

        return $this;
    }

    public function getEmploye(): ?Employe
    {
        return $this->employe;
    }

    public function setEmploye(?Employe $employe): self
    {
        $this->employe = $employe;

        return $this;
    }
}
