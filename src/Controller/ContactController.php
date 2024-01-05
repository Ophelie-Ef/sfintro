<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', 'contact')]

    public function index(): Response
    
    {
        // $variable= 'Bienvenue sur la page Contact';

        // return new Response(
        //     '<html><body><h1>'.$variable.'</h1></body></html>'
        // );

        return $this->render('contact/index.html.twig');
    }
}