<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController
{
    #[Route('/', 'homepage')]
    public function index(): Response
    {
        return new Response('Files dans ta chambre !');
    }

    #[Route('/number', 'number')]
    public function number(): Response
    {
        $number = random_int(0,100);
        return new Response($number);
    }
}
