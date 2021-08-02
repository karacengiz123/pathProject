<?php


namespace App\EventListener;


use App\Entity\User;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class UserListener
{

    private  $tokenStorage;
    private $container;

    public function __construct(TokenStorageInterface $tokenStorage,ContainerInterface $container)
    {
        $this->tokenStorage=$tokenStorage;
        $this->container=$container;
    }

    /**
     * @ORM\PrePersist()
     * @param User $user
     * @param LifecycleEventArgs $args
     * @throws \Exception
     */
    public function prePersistHandler(User $user, LifecycleEventArgs $args)
    {
//        $em=$args->getEntityManager();
//        $user=$this->tokenStorage->getToken()->getUser();
//        if ($user == "anon."){
//            throw new \Exception("You must be logged in for this process.");
//
//        }
    }

    /**
     * @ORM\PreUpdate()
     * @param User $user
     * @param LifecycleEventArgs $args
     * @throws \Exception
     */
    public function preUpdateHandler(User $user, LifecycleEventArgs $args)
    {
//        $em = $args->getEntityManager();
//        $user = $this->tokenStorage->getToken()->getUser();
//        if ($user == "anon."){
//            throw new \Exception("You must be logged in for this process.");
//
//        }
    }
    /**
     * @ORM\PreRemove()
     * @param User $user
     * @param LifecycleEventArgs $args
     * @throws \Exception
     */
    public function preRemoveHandler(User $user, LifecycleEventArgs $args)
    {
//        $em = $args->getEntityManager();
//        $user = $this->tokenStorage->getToken()->getUser();
//        if ($user == "anon."){
//            throw new \Exception("You must be logged in for this process.");
//
//        }
    }
}