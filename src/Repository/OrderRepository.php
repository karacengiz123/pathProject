<?php

namespace App\Repository;

use App\Entity\Order;
use App\Entity\Product;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @method Order|null find($id, $lockMode = null, $lockVersion = null)
 * @method Order|null findOneBy(array $criteria, array $orderBy = null)
 * @method Order[]    findAll()
 * @method Order[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrderRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Order::class);
    }


    public function newOrder(array $postData, EntityManagerInterface $em)
    {
        $result = ["success" => false, "message" => "İşlem yok"];
        try {
            $date = ((new \DateTime())->modify('+3 day'));

            $newOrder = new Order();
            $newOrder
                ->setQuantity($postData["quantity"])
                ->setAddress($postData["address"])
                ->setProduct($em->find(Product::class, $postData["product"]))
                ->setShippingDate($date)
                ->setUser($em->find(User::class, $postData["user"]));
            $em->persist($newOrder);
            $em->flush();

            $newOrder
                ->setOrderCode(crc32((string)$newOrder->getId()));

            $em->persist($newOrder);
            $em->flush();

            $result["success"] = true;
            $result["message"] = "Ürün eklendi";
        } catch (\Exception $exception) {
            $result["success"] = false;
            $result["message"] = $exception->getMessage();
        }
        return $result;
    }


    public function updateOrder(array $postData, EntityManagerInterface $em)
    {
        $result = ["success" => false, "message" => "İşlem yok"];
        try {
            $updateOrder = $em->find(Order::class, $postData["id"]);

            if (new \DateTime() < $updateOrder->getShippingDate()) {
                try {
                    $updateOrder
                        ->setQuantity($postData["quantity"])
                        ->setAddress($postData["address"])
                        ->setProduct($em->find(Product::class, $postData["product"]))
                        ->setUser($em->find(User::class, $postData["user"]));
                    $em->persist($updateOrder);
                    $em->flush();

                    $result["success"] = true;
                    $result["message"] = "Ürün güncellendi";
                } catch (\Exception $exception) {
                    $result["success"] = false;
                    $result["message"] = $exception->getMessage();
                }
            } else {
                $result["success"] = false;
                $result["message"] = "Kargo tarihi geçtiğinden güncelleme yapamazsınız";
            }
        } catch (\Exception $exception) {
            $result["success"] = false;
            $result["message"] = $exception->getMessage();
        }
        return $result;
    }

    /**
     * @param array $postData
     * @return array
     */
    public function getOrderList(array $postData)
    {
        $result = ["success" => false, "message" => "İşlem yok","data"=>null];
        try {
            $getOrderList = $this->createQueryBuilder("o")
                ->select("o.id")
                ->addSelect("o.address", "o.orderCode", "o.quantity", "o.shippingDate", "u.email", "p.name")
                ->where("u.id=:user")
                ->setParameter("user", $postData["user"])
                ->leftJoin("o.user", "u")
                ->leftJoin("o.product", "p")
                ->getQuery()->getResult();

            $result["success"] = true;
            $result["message"] = "Başarılı";
            $result["data"] = $getOrderList;
        } catch (\Exception $exception) {
            $result["success"] = false;
            $result["message"] = $exception->getMessage();
        }
        return $result;
    }




    /**
     * @param array $postData
     * @return array
     */
    public function getOrderDetailList(array $postData,EntityManagerInterface $em)
    {
        $result = ["success" => false, "message" => "İşlem yok","data"=>null];
        try {
            $order = $em->find(Order::class,$postData["orderId"]);
//            dump($order);
//            exit();
            if (!is_null($order)){
                $getOrderDetailList = $this->createQueryBuilder("o")
                    ->select("o.id")
                    ->addSelect("o.address", "o.orderCode", "o.quantity", "o.shippingDate", "u.email", "p.name")
                    ->leftJoin("o.user", "u")
                    ->leftJoin("o.product", "p")
                    ->where("u.id=:user")
                    ->setParameter("user", $postData["user"])
                    ->andWhere("o.id=:orderId")
                    ->setParameter("orderId",$postData["orderId"])
                    ->getQuery()->getResult();
                $result["success"] = true;
                $result["message"] = "Başarılı";
                $result["data"] = $getOrderDetailList;
            }else{
                $result["success"] = true;
                $result["message"] = "Kayıt bulunamadı";
            }

        } catch (\Exception $exception) {
            $result["success"] = false;
            $result["message"] = $exception->getMessage();
        }
        return $result;
    }
}
