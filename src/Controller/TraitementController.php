<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TraitementController extends AbstractController
{
    #[Route('/traitement', name: 'app_Front_index')]
    public function index(): Response
    {
        return $this->render('front/index.html.twig', [
            'controller_name' => 'TraitementController',
        ]);
    }
    #[Route('/administration', name: 'app_back_index')]
    public function indexB(): Response
    {
        return $this->render('back/index.html.twig', [
            'controller_name' => 'TraitementController',
        ]);
    }
    #[Route('/home', name: 'app_home')]
    public function home(): Response
    {
        return $this->render('front/index.html.twig', [
            
        ]);
    }
}
