<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExpensesController extends AbstractController
{
    /**
     * @Route("/expenses", name="expenses")
     */
    public function index(): Response
    {
        return $this->render('expenses/expense_list.html.twig', [
            'controller_name' => 'ExpensesController',
        ]);
    }
}
