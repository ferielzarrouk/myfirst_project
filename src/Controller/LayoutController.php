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
    /**
     * @Route("/about", name="about")
     */
    public function about(): Response
    {
        return $this->render('pages/about.html.twig', [
            'controller_name' => 'LayoutController',
        ]);
    }

    /**
     * @Route("/products", name="products")
     */
    public function products(): Response
    {
        return $this->render('pages/products.html.twig', [
            'controller_name' => 'LayoutController',
        ]);
    }
     /**
     * @Route("/store", name="store")
     */
    public function store(): Response
    {
        return $this->render('pages/store.html.twig', [
            'controller_name' => 'LayoutController',
        ]);
    }
}
