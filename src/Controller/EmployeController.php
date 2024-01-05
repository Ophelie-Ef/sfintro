<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EmployeController extends AbstractController
{
    #[Route('/employe', name: 'app_employe')]
    public function index(): Response
    {
        $employes=[

            ['Name' => 'Larbin DeService',
            'Age' => 42,
            'Email' => 'avotreservice@jebosse.dur'],

            ['Name' => 'Gaston Lagaffe',
            'Age' => 33,
            'Email' => 'legaffeur@editions-dupuis.be'],

            ['Name' => 'Lilly Rose',
            'Age' => 24,
            'Email' => 'fleurbleue@naive.fr']
        ];

        dump($employes);

        return $this->render('employe/index.html.twig', [
            'employes' => $employes,
            'title' => 'Liste des employés'
        ]);
    }
}
