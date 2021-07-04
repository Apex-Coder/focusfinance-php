<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SavingsController extends AbstractController
{
    /**
     * @Route("/savings", name="savings")
     */
    public function index(): Response
    {
        return $this->render('savings/savings_list.html.twig', [
            'controller_name' => 'SavingsController',
        ]);
    }
}
