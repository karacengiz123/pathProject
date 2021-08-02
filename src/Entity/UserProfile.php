<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\UserProfileRepository")
 */
class UserProfile
{
    use DateTrait;

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $gsm;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\User", inversedBy="userProfile")
     * @ORM\JoinColumn(nullable=false, onDelete="CASCADE")
     */
    private $usr;

    public function __toString()
    {
        return $this->getName();
    }
    public function getId(): ?int
    {
        return $this->id;
    }
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }
    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getGsm(): ?string
    {
        return $this->gsm;
    }

    public function setGsm(?string $gsm): self
    {
        $this->gsm = $gsm;

        return $this;
    }

    public function getUsr(): ?User
    {
        return $this->usr;
    }

    public function setUsr(User $usr): self
    {
        $this->usr = $usr;

        return $this;
    }
}
