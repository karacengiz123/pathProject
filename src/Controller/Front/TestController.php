<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/test22", name="test222")
     */
    public function index()
    {
        return $this->render('test2/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
}
