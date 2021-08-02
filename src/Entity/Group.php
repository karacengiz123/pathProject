<?php
// src/AppBundle/Entity/Group.php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use FOS\UserBundle\Model\Group as BaseGroup;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user_group")
 */
class Group extends BaseGroup
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToMany(targetEntity=Role::class, mappedBy="roleGroup")
     */
    private $roleGroup;

    public function __construct()
    {
        parent::__construct();
        $this->roleGroup = new ArrayCollection();
    }

    /**
     * @return Collection|Role[]
     */
    public function getRoleGroup(): Collection
    {
        return $this->roleGroup;
    }

    public function addRoleGroup(Role $roleGroup): self
    {
        if (!$this->roleGroup->contains($roleGroup)) {
            $this->roleGroup[] = $roleGroup;
            $roleGroup->addRoleGroup($this);
        }

        return $this;
    }

    public function removeRoleGroup(Role $roleGroup): self
    {
        if ($this->roleGroup->contains($roleGroup)) {
            $this->roleGroup->removeElement($roleGroup);
            $roleGroup->removeRoleGroup($this);
        }

        return $this;
    }
}