<?php
// src/Entity/User.php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @ORM\Table(name="`user`", options={"`collate`":"`utf8_general_ci`", "`charset`":"`utf8`"})
 * @ORM\EntityListeners("App\EventListener\UserListener")
 * @Gedmo\Loggable(logEntryClass="App\Entity\LogEntity\LogUser")
 */
class User extends BaseUser
{
    use DateTrait;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @Gedmo\Versioned()
     */
    private $sessionId;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $forgotPassword;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Group")
     * @ORM\JoinTable(name="user_user_group",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="group_id", referencedColumnName="id")}
     * )
     */
    protected $groups;

    /**
     * @ORM\OneToMany(targetEntity=Order::class, mappedBy="user", orphanRemoval=true)
     */
    private $orders;

    public function __toString()
    {
        return $this->getEmail();
    }

    public function __construct()
    {
        parent::__construct();
        $this->orders = new ArrayCollection();
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

    public function getSessionId(): ?string
    {
        return $this->sessionId;
    }

    public function setSessionId(?string $sessionId): self
    {
        $this->sessionId = $sessionId;

        return $this;
    }

    public function getForgotPassword(): ?string
    {
        return $this->forgotPassword;
    }

    public function setForgotPassword(?string $forgotPassword): self
    {
        $this->forgotPassword = $forgotPassword;

        return $this;
    }

    /**
     * @return Collection|Order[]
     */
    public function getOrders(): Collection
    {
        return $this->orders;
    }

    public function addOrder(Order $order): self
    {
        if (!$this->orders->contains($order)) {
            $this->orders[] = $order;
            $order->setUser($this);
        }

        return $this;
    }

    public function removeOrder(Order $order): self
    {
        if ($this->orders->removeElement($order)) {
            // set the owning side to null (unless already changed)
            if ($order->getUser() === $this) {
                $order->setUser(null);
            }
        }

        return $this;
    }
}
