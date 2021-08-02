<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HomePageController extends AbstractController
{
    /**
     * @Route("/", name="home_page_action", methods={"GET","POST"})
     * @param Request $request
     * @return Response
     */
    public function homePageAction(Request $request)
    {
        $language = $request->getLocale();

        return $this->render('home_page/index.html.twig', [
        ]);

    }
}
