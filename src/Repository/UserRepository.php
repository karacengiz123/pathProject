<?php

namespace App\Repository;

use App\Entity\User;
use App\Service\MailProcessor;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    /**
     * @param array $postData
     * @param UserPasswordEncoderInterface $encoder
     * @return array
     */
    public function register( array $postData, UserPasswordEncoderInterface $encoder)
    {
        $result = ["success"=>false,"message"=>"No action taken"];
        $em = $this->getEntityManager();
        try {
            $user = null;
            if (isset($postData["platform"]) && $postData["platform"]){
                $isValidMailData = $this->isValidMail($postData);
                $user = $isValidMailData["data"];
            }
            if (is_null($user)){
                $user = new User();
                $userEncodePassword = $encoder->encodePassword($user, $postData['password']);
                $user
                    ->setUsername($postData['mail'])
                    ->setUsernameCanonical($postData['mail'])
                    ->setEmail($postData['mail'])
                    ->setEmailCanonical($postData['mail'])
                    ->setPassword($userEncodePassword)
                    ->setEnabled(true)
                    ->setRoles(['ROLE_CUSTOMER']);
                $em->persist($user);
            }else{
                $userEncodePassword = $encoder->encodePassword($user, $postData['password']);
                $user
                    ->setPassword($userEncodePassword);
                $em->persist($user);
            }
            try {
                $em->flush();
                $result["success"] = true;
                $result["message"] = "Creation successful";
            }catch (\Exception $exception){
                $result["success"] = false;
                $result["message"] = $exception->getMessage();
            }
        }catch (\Exception $exception){
            $result["success"] = false;
            $result["message"] = $exception->getMessage();
        }
        return $result;
    }

    /**
     * @param array $postData
     * @return array
     */
    public function isValidMail( array $postData)
    {
        $result = ["success"=>false,"message"=>"No action taken", "data"=>null];
        try {
            $isValidMail = $this->findOneBy(["email"=>$postData["mail"]]);
            if (is_null($isValidMail)){
                $result["success"]=true;
                $result["message"]="Successfuly";
                $result["data"]=$isValidMail;
            }else{
                $result["success"]=false;
                $result["message"]="Mail Is Exist";
                $result["data"]=$isValidMail;
            }
        }catch (\Exception $exception){
            $result["success"] = false;
            $result["message"] = $exception->getMessage();
            $result["data"]=null;
        }
        return $result;
    }

    /**
     * @param array $postData
     * @param UserPasswordEncoderInterface $encoder
     * @param string $md5
     * @return array
     */
    public function changePassword( array $postData, UserPasswordEncoderInterface $encoder, string $md5)
    {
        $result = ["success"=>false,"message"=>"No action taken"];
        $em = $this->getEntityManager();
        try {
            $actUser = $em->getRepository(User::class)->findOneBy(["forgotPassword"=>$md5]);
            if (!is_null($actUser)){
                try {
                    $userEncodePassword = $encoder->encodePassword($actUser, $postData['password']);
                    $actUser
                        ->setPassword($userEncodePassword)
                        ->setForgotPassword(null);
                    $em->persist($actUser);
                    $em->flush();
                    $result["success"] = true;
                    $result["message"] = "Creation successful";
                }catch (\Exception $exception){
                    $result["success"] = false;
                    $result["message"] = $exception->getMessage();
                }
            }else{
                $result["success"] = false;
                $result["message"] = "User not fount";
            }
        }catch (\Exception $exception){
            $result["success"] = false;
            $result["message"] = $exception->getMessage();
        }
        return $result;
    }

    /**
     * @param string $lang
     * @param array $postData
     * @param UserPasswordEncoderInterface $encoder
     * @param MailProcessor $mailProcessor
     * @return array
     */
    public function forgotPassword(string $lang, array $postData, UserPasswordEncoderInterface $encoder, MailProcessor $mailProcessor)
    {
        $result = ["success"=>false,"message"=>"No action taken"];
        $em = $this->getEntityManager();
        try {
            $user = $this->findOneBy(["email"=>$postData["mail"]]);
            if (!is_null($user)){
                try {
                    $md5 = md5((new \DateTime())->getTimestamp());
                    $url = $postData["url"]."/".$md5;
                    $sendMail = $mailProcessor->forgotPassword($lang,["mails"=>[$user->getEmail()],"url"=>$url]);
                    if ($sendMail["success"]){
                        $user->setForgotPassword($md5);
                        $em->persist($user);
                        $em->flush();
                        $result["success"] = true;
                        $result["message"] = "Creation successful";
                    }else{
                        return $sendMail;
                    }
                }catch (\Exception $exception){
                    $result["success"] = false;
                    $result["message"] = $exception->getMessage();
                }
            }else{
                $result["success"] = false;
                $result["message"] = "User not fount";
            }
        }catch (\Exception $exception){
            $result["success"] = false;
            $result["message"] = $exception->getMessage();
        }
        return $result;
    }
}

