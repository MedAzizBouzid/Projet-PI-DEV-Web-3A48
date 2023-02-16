<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Activite;
use App\Entity\Salle;

class TraitementController extends AbstractController
{
    #[Route('/Show_salle_front', name: 'Show_salle_front')]
    public function Show_salle_front(EntityManagerInterface $am): Response
    {
       
        $repo=$am->getRepository(Salle::class);
        $salle=$repo->findAll();
        
        return $this->render('front/mesSalles.html.twig', [
            'salle' => $salle,
        ]);
    }
  
  
  
  
    #[Route('/back', name: 'back')]
    public function index(): Response
    {
        return $this->render('back/table.html.twig', [
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
    #[Route('/form', name: 'form')]
    public function form_display(): Response
    {
        return $this->render('back/form.html.twig', [
            'controller_name' => 'TraitementController',
        ]);
    }
    #[Route('/chart', name: 'chart')]
    public function chart(): Response
    {
        return $this->render('back/widget.html.twig', [
            'controller_name' => 'TraitementController',
        ]);
    }
    #[Route('/gofront', name: 'go_front')]
    public function gofront(): Response
    {
        return $this->render('front/baseF.html.twig', [
            'controller_name' => 'TraitementController',
        ]);
    }
    #[Route('/gobutton', name: 'go_button')]
    public function gobutton(): Response
    {
        return $this->render('back/button.html.twig', [
            'controller_name' => 'TraitementController',
        ]);
    }
    #[Route('/showactiviteinfront', name: 'show_activite_infront')]
    public function showSalleinfront(): Response
    {
        return $this->render('front/team.html.twig', [
            'controller_name' => 'TraitementController',
        ]);
    }
    
    #[Route('/service', name: 'service')]
    public function Show_activitefront(EntityManagerInterface $am): Response
    {
       
        $repo=$am->getRepository(Activite::class);
        $activite=$repo->findAll();
        
        return $this->render('front/salles.html.twig', [
            'activite' => $activite,
        ]);
    }

}