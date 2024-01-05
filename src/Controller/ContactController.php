<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ContactController
{
    #[Route('/contact', 'contact')]
    public function contact(): Response
    {
        $variable= 'Bienvenue sur la page Contact';

        return new Response(
            '<html><body><h1>'.$variable.'</h1></body></html>'
        );
    }
}