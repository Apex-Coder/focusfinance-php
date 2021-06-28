<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RedirectTestController extends AbstractController
{
    /**
     * @Route("/redirect/test", name="redirect_test")
     */
    public function index(): Response
    {
        return $this->render('redirect_test/index.html.twig', [
            'controller_name' => 'RedirectTestController',
        ]);
    }

    /**
     * @Route("/redirect/test/homepage", name="login_success_redirect_test")
     */
    public function loginSuccess(): Response
    {
        return $this->render('redirect_test/index.html.twig', [
            'controller_name' => 'RedirectTestController',
        ]);
    }
}
