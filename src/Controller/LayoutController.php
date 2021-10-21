<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LayoutController extends AbstractController
{
    /**
     * @Route("/", name="layout")
     */
    public function index(): Response
    {
        return $this->render('pages/home.html.twig', [
            'controller_name' => 'LayoutController',
        ]);
    }
}
