<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PerformancesRepository")
 */
class Performances
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $laugh;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $dream;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $marvel_at;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLaugh(): ?string
    {
        return $this->laugh;
    }

    public function setLaugh(?string $laugh): self
    {
        $this->laugh = $laugh;

        return $this;
    }

    public function getDream(): ?string
    {
        return $this->dream;
    }

    public function setDream(?string $dream): self
    {
        $this->dream = $dream;

        return $this;
    }

    public function getMarvelAt(): ?string
    {
        return $this->marvel_at;
    }

    public function setMarvelAt(?string $marvel_at): self
    {
        $this->marvel_at = $marvel_at;

        return $this;
    }
}
