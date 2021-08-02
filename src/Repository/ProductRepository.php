<?php

namespace App\Repository;

use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;

/**
 * @method Product|null find($id, $lockMode = null, $lockVersion = null)
 * @method Product|null findOneBy(array $criteria, array $orderBy = null)
 * @method Product[]    findAll()
 * @method Product[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    public function newProduct(array $postData,EntityManagerInterface $em)
    {
        $result = ["success"=>false, "message"=>"İşlem yok"];
        try {
            $newProduct = new Product();
            $newProduct
                ->setName($postData["name"])
                ->setPrice($postData["price"]);
            $em->persist($newProduct);
            $em->flush();

            $result["success"] = true;
            $result["message"] = "Ürün eklendi";
        }catch (\Exception $exception){
            $result["success"] = false;
            $result["message"] = "Kayıt yapılamadı";
        }
    }
}
