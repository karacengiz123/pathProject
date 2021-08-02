<?php

namespace App\Controller;

use App\Service\PathProcessor;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BatmanController extends AbstractController
{

    public function toJson($data)
    {
        return $this->container->get('serializer')->serialize($data, 'json');
    }

    /**
     * @Route("/", name="batman")
     * @param PathProcessor $pathProcessor
     * @return Response
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function index(PathProcessor $pathProcessor)
    {

        $pathData = $pathProcessor->getBatmanDatas();
//        dump($pathData);
//        exit();
        $priceData=[];
        foreach ($pathData as $data){
            $sort= $data["normalPrice"]>$data["salePrice"];
            if ($sort>0){
                $priceData[]=[
                    "normalPrice" =>$data["normalPrice"] ,
                    "salePrice" =>$data["salePrice"],
                    "discountPrice" =>$data["normalPrice"] - $data["salePrice"],
                    "discountRate" =>"%".round(100-(($data["salePrice"]*100)/$data["normalPrice"])),
                    "title" =>$data["title"],
                    "internalName" =>$data["internalName"],
                    "thumb" =>$data["thumb"],
                ];
            }
        }
        usort($priceData, function($a, $b) {
            return $a['discountPrice'] < $b['discountPrice'] ? 1 : -1;
        });
        return $this->render('batman/index.html.twig',[
            "batmans"=>$this->toJson($priceData)
        ]);
    }
}
