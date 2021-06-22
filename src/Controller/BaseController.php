<?php

namespace App\Controller;

// use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class BaseController extends AbstractController
{
    protected $em;
    private $session;

    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }
}