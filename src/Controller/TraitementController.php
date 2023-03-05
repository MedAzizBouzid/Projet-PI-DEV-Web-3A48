<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Activite;
use App\Entity\Salle;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\String\Slugger\SluggerInterface;

 use App\Form\SalleType;
use App\Repository\CalendrierRepository;
use App\Repository\SalleRepository;
 use Symfony\Component\HttpFoundation\Request;

class TraitementController extends AbstractController
{

 
    #[Route('/heeeeey', name: 'map')]
    public function map(): Response
    {
        return $this->render('back/lefleat.html.twig', [
            'controller_name' => 'TraitementController',
        ]);
    }


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
        return $this->render('back/base.html.twig', [
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

    // ***********************************************
    #[Route('/indextimetable', name: 'indextimetable')]
    public function indextimetable(): Response
    {
        return $this->render('front/Calendrer_front.html.twig', [
            'controller_name' => 'TraitementController',
        ]);
    }
 
    // ***********************************************

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

    // #[Route('/ajax', name: 'ajax')]
    // public function ajax(): Response
    // {
    //     return $this->render('back/AjaxForm.html.twig', [
    //         'controller_name' => 'TraitementController',
    //         'form' => $form,

    //     ]);
    // }
    #[Route('/ajax', name: 'app_salle_new_ajax1', methods: ['GET', 'POST'])]
    public function new1(Request $request, SalleRepository $salleRepository,SluggerInterface $slugger): Response
    {
        $salle = new Salle();
        $form = $this->createForm(SalleType::class, $salle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $image = $form->get('image')->getData();

            if ($image) {
                $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $image->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $image->move(
                        $this->getParameter('activite_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'photo$photoname' property to store the PDF file name
                // instead of its contents
                $salle->setImage($newFilename);
            }
            $salleRepository->save($salle, true);

            return $this->redirectToRoute('app_salle_index', [], Response::HTTP_SEE_OTHER);
        }

        // return $this->renderForm('salle/new.html.twig', [
            return $this->renderForm('back/AjaxForm.html.twig', [
            'salle' => $salle,
            'form' => $form,
        ]);
    } 
    #[Route('/details', name: 'details')]
    public function details(): Response
    {
        return $this->render('front/class-details.html.twig', [
            'controller_name' => 'TraitementController',
        ]);
    }
    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        return $this->render('front/contact.html.twig', [
            'controller_name' => 'TraitementController',
        ]);
    }

    
}