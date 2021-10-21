<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomePageController extends AbstractController
{
    /**
     * @Route("/", name="home_page")
     */
    public function index(): Response
    {
        return new Response(
            '<! DOCTYPE html><html><body><center><h1>Hello world from Symfony 5 !</h1></center></body></html>'
        );
    }
}
