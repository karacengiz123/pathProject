<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class AdminHomePageController extends AbstractController
{
    /**
     * @Route("/", name="admin_home_page", methods={"GET","POST"})
     * @param Request $request
     * @return Response
     */
    public function adminHomePage(Request $request)
    {
        $language = $request->getLocale();
        return $this->render("admin_home_page/index.html.twig", [
            "includeMorris" => true
        ]);

    }
}
