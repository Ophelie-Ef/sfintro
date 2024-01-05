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
        $employesArray=[

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

        // dump($employesArray);

        return $this->render('employe/index.html.twig', [
            'employes' => $employesArray,
            'title' => 'Liste des employés'
        ]);
    }
}
