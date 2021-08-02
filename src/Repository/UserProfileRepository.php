<?php

namespace App\Repository;

use App\Entity\User;
use App\Entity\UserProfile;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Contracts\Translation\TranslatorInterface;

/**
 * @method UserProfile|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserProfile|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserProfile[]    findAll()
 * @method UserProfile[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserProfileRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserProfile::class);
    }

    /**
     * @param string $lang
     * @param array $postData
     * @return array
     */
    public function getUserInformation(string $lang, array $postData)
    {
        $result = ["success" => false, "message" => "No action taken", "data" => null];
        try {
            $userInformation = $this->createQueryBuilder("up")
                ->select("up.id")
                ->addSelect("u.email as email")
                ->addSelect("up.name as name")
                ->addSelect("up.gsm as gsm")
                ->leftJoin("up.usr", "u")
                ->where("up.usr=:owner")
                ->setParameter("owner", $postData["owner"])
                ->getQuery();

            $result["success"] = true;
            $result["message"] = "Creation successful";
            $result["data"] = $userInformation;
        } catch (\Exception $exception) {
            $result["success"] = false;
            $result["message"] = $exception->getMessage();
        }
        return $result;
    }

    public function setUserInfoPro(string $lang, array $postData)
    {
        $result = ["success" => false, "message" => "No action taken", "data" => null];
        $em = $this->getEntityManager();

        try {
            $userProfile = $em->find(UserProfile::class, (int)$postData["owner"]);
            $userProfile
                ->setGsm($postData["gsm"])
                ->setName($postData["name"]);
            $em->persist($userProfile);
            $em->flush();
            $result["success"] = true;
            $result["message"] = "Creation successful";
            $result["data"] = $userProfile;
        } catch (\Exception $exception) {
            $result["success"] = false;
            $result["message"] = $exception->getMessage();
        }
        return $result;
    }

    /**
     * @param string $lang
     * @param array $postData
     * @param User $user
     * @return array
     */
    public function newUserProfile(string $lang, array $postData, User $user)
    {
        $result = ["success" => false, "message" => "No action taken"];
        $em = $this->getEntityManager();

        try {
            $userProfile = new UserProfile();
            $userProfile
                ->setUsr($user)
                ->setGsm($postData["gsm"])
                ->setName($postData["name"]);
            $em->persist($userProfile);
            $result["success"] = true;
            $result["message"] = "Creation successful";
        } catch (\Exception $exception) {
            $result["success"] = false;
            $result["message"] = $exception->getMessage();
        }
        return $result;
    }

    /**
     * @param string $lang
     * @param array $postData
     * @param User $user
     * @return array
     */
    public function updateUserProfile(string $lang, array $postData, User $user)
    {
        $result = ["success" => false, "message" => "No action taken"];
        $em = $this->getEntityManager();

        try {

            $userProfile = $user->getUserProfile();
            if ($userProfile == null) {
                $userProfile = new UserProfile();
                $userProfile->setUsr($user);
            }
            $userProfile
                ->setGsm($postData["gsm"])
                ->setName($postData["name"]);
            $em->persist($userProfile);
            $em->flush();
            $result["success"] = true;
            $result["message"] = "Creation successful";
        } catch (\Exception $exception) {
            $result["success"] = false;
            $result["message"] = $exception->getMessage();
        }
        return $result;
    }
}
