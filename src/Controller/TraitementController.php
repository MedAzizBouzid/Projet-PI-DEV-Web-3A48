<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TraitementController extends AbstractController
{
    #[Route('/back', name: 'back')]
    public function index(): Response
    {
        return $this->render('back/form.html.twig', [
            'controller_name' => 'TraitementController',
        ]);
    }
    #[Route('/front', name: 'app_front')]
    public function index_front(): Response
    {
        return $this->render('front/team.html.twig', [
            'controller_name' => 'TraitementController',
        ]);
    }
}
