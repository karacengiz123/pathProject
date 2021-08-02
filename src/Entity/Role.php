<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\RoleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=RoleRepository::class)
 */
class Role
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $role;

    /**
     * @ORM\ManyToMany(targetEntity=Group::class, inversedBy="roleGroup")
     */
    private $roleGroup;

    public function __construct()
    {
        $this->roleGroup = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }

    /**
     * @return Collection|Group[]
     */
    public function getRoleGroup(): Collection
    {
        return $this->roleGroup;
    }

    public function addRoleGroup(Group $roleGroup): self
    {
        if (!$this->roleGroup->contains($roleGroup)) {
            $this->roleGroup[] = $roleGroup;
        }

        return $this;
    }

    public function removeRoleGroup(Group $roleGroup): self
    {
        if ($this->roleGroup->contains($roleGroup)) {
            $this->roleGroup->removeElement($roleGroup);
        }

        return $this;
    }
}
