<?php

namespace App\Service;

use GuzzleHttp\Client;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class PathProcessor
{
    /** @var TokenStorageInterface */
    private $tokenStorage;
    /** @var ContainerInterface */
    protected $container;
    /** @var string */
    protected $token = null;
    /** @var string */
    protected $refreshToken = null;
    /** @var Client */
    protected $httpClient;

    /**
     * @return Client
     */
    public function getHttpClient()
    {
        return $this->httpClient;
    }

    public function __construct(TokenStorageInterface $tokenStorage, ContainerInterface $container)
    {
        $this->tokenStorage = $tokenStorage;
        $this->container = $container;

        //TODO: MNG API BAĞLANTI BİLGİLERİ
        $this->httpClient = new Client();
//        try {
//            $request = $this->httpClient->request("POST", $this->mng->getApiUrl() . "/mngapi/api/token", [
//                "headers" => [
//                    "Accept" => "application/json",
//                    "Content-Type" => "application/json",
//                    "x-ibm-client-id" => $this->mng->getClientId(),
//                    "x-ibm-client-secret" => $this->mng->getSecretKey()
//                ],
//                "body" => json_encode([
//                    "customerNumber" => $this->mng->getCustomerNumber(),
//                    "password" => $this->mng->getCustomerPassword(),
//                    "identityType" => $this->mng->getIdentityType(),
//                ])
//            ]);
//            $result = json_decode($request->getBody()->getContents(), true);
//            $this->token = $result["jwt"];
//            $this->refreshToken = $result["refreshToken"];
//        } catch (\GuzzleHttp\Exception\BadResponseException $exception) {
//            dump($exception->getMessage());
//            exit();
////            $error = json_decode($exception->getResponse()->getBody()->getContents(), true)["error"];
////            try {
////                $request = $this->httpClient->request("POST", $this->mng->getApiUrl() . "/mngapi/api/refresh/" . $error["refreshToken"], [
////                    "headers" => [
////                        "Accept" => "application/json",
////                        "Content-Type" => "application/json",
////                        "x-ibm-client-id" => $this->mng->getClientId(),
////                        "x-ibm-client-secret" => $this->mng->getSecretKey()
////                    ]
////                ]);
////                $result = json_decode($request->getBody()->getContents(), true);
////                $this->token = $result["jwt"];
////                $this->refreshToken = $result["refreshToken"];
////            } catch (\GuzzleHttp\Exception\BadResponseException $exception) {
////                $error = json_decode($exception->getResponse()->getBody()->getContents(), true);
////                $this->token = null;
////                $this->refreshToken = null;
////            }
//        }
    }



    /**
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getBatmanDatas()
    {
        try {
            $request = $this->getHttpClient()->request("GET", "https://www.cheapshark.com/api/1.0/deals?title=batman", [
                "headers" => [
                    "Accept" => "application/json",
                    "Content-Type" => "application/json",
                ]
            ]);
            $result = json_decode($request->getBody()->getContents(), true);
            return $result;
        } catch (\GuzzleHttp\Exception\BadResponseException $exception) {
            $error = json_decode($exception->getResponse()->getBody()->getContents(), true);
            return $error;
        }
    }
}
