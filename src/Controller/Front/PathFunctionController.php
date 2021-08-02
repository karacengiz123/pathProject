<?php

namespace App\Controller\Front;

use App\Repository\OrderRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

/**
 * @Route("/api/path-function", name="path_")
 */
class PathFunctionController extends AbstractController
{

    /**
     * @Route("/create-order", name="create_order", methods={"POST"})
     * @param Request $request
     * @param TokenStorageInterface $tokenStorage
     * @param OrderRepository $orderRepository
     * @param EntityManagerInterface $em
     * @return JsonResponse
     */
    public function createOrder(Request $request, TokenStorageInterface $tokenStorage,OrderRepository $orderRepository,EntityManagerInterface $em)
    {
        $actUser = $tokenStorage->getToken()->getUser();
        $postData = [];
        $jsonData = json_decode($request->getContent(), true);
        if (!is_null($jsonData)) $postData = $jsonData;
        $postData = array_merge($postData, $request->query->all());
        $postData = array_merge($postData, $request->request->all());
        $postData = array_merge($postData, $request->files->all());
        $postData["user"] = $actUser->getId();
        $createOrder = $orderRepository->newOrder($postData,$em);

        return $this->json($createOrder);
    }

    /**
     * @Route("/update-order", name="update_order", methods={"POST"})
     * @param Request $request
     * @param TokenStorageInterface $tokenStorage
     * @param OrderRepository $orderRepository
     * @param EntityManagerInterface $em
     * @return JsonResponse
     */
    public function updateOrder(Request $request, TokenStorageInterface $tokenStorage,OrderRepository $orderRepository,EntityManagerInterface $em)
    {
        $actUser = $tokenStorage->getToken()->getUser();
        $postData = [];
        $jsonData = json_decode($request->getContent(), true);
        if (!is_null($jsonData)) $postData = $jsonData;
        $postData = array_merge($postData, $request->query->all());
        $postData = array_merge($postData, $request->request->all());
        $postData = array_merge($postData, $request->files->all());
        $postData["user"] = $actUser->getId();
        $createOrder = $orderRepository->updateOrder($postData,$em);

        return $this->json($createOrder);
    }

    /**
     * @Route("/order-list", name="order_list", methods={"POST"})
     * @param Request $request
     * @param TokenStorageInterface $tokenStorage
     * @param OrderRepository $orderRepository
     * @param EntityManagerInterface $em
     * @return JsonResponse
     */
    public function getOrderList(Request $request, TokenStorageInterface $tokenStorage,OrderRepository $orderRepository,EntityManagerInterface $em)
    {
        $actUser = $tokenStorage->getToken()->getUser();
        $postData = [];
        $jsonData = json_decode($request->getContent(), true);
        if (!is_null($jsonData)) $postData = $jsonData;
        $postData = array_merge($postData, $request->query->all());
        $postData = array_merge($postData, $request->request->all());
        $postData = array_merge($postData, $request->files->all());
        $postData["user"] = $actUser->getId();
        $createOrder = $orderRepository->getOrderList($postData);

        return $this->json($createOrder);
    }
    /**
     * @Route("/order-detail-list", name="order_detail_list", methods={"POST"})
     * @param Request $request
     * @param TokenStorageInterface $tokenStorage
     * @param OrderRepository $orderRepository
     * @param EntityManagerInterface $em
     * @return JsonResponse
     */
    public function getOrderDetailList(Request $request, TokenStorageInterface $tokenStorage,OrderRepository $orderRepository,EntityManagerInterface $em)
    {
        $actUser = $tokenStorage->getToken()->getUser();
        $postData = [];
        $jsonData = json_decode($request->getContent(), true);
        if (!is_null($jsonData)) $postData = $jsonData;
        $postData = array_merge($postData, $request->query->all());
        $postData = array_merge($postData, $request->request->all());
        $postData = array_merge($postData, $request->files->all());
        $postData["user"] = $actUser->getId();
        $createOrder = $orderRepository->getOrderDetailList($postData,$em);

        return $this->json($createOrder);
    }
}
