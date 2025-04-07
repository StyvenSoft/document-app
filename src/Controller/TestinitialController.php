<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TestinitialController extends AbstractController
{
    #[Route('/')]
    public function index(): Response
    {
        $contents = $this->renderView('testinitial/index.html.twig');
        return new Response($contents);
    }
}