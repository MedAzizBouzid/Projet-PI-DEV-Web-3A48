<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TraitementController extends AbstractController
{
    #[Route('/traitement', name: 'app_traitement')]
    public function index(): Response
    {
        return $this->render('back/chart.html.twig', [
            'controller_name' => 'TraitementController',
        ]);
    }
}
