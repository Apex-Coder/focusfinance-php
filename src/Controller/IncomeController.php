<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IncomeController extends AbstractController
{
    /**
     * @Route("/income", name="income")
     */
    public function index(): Response
    {
        return $this->render('income/income_list.html.twig', [
            'controller_name' => 'IncomeController',
        ]);
    }
}
