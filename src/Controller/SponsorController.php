<?php

namespace App\Controller;

use App\Entity\Commentaire;
use App\Entity\Pass;
use App\Entity\User;
use App\Form\PassType;
use App\Form\UserType;
use DateTimeImmutable;
use App\Entity\Sponsor;
use App\Form\CommentaireType;
use App\Form\SponsorType;
use App\Repository\CommentaireRepository;
use App\Repository\PassRepository;
use App\Repository\SponsorRepository;
use App\Repository\EvenementRepository;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/sponsor')]
class SponsorController extends AbstractController
{
    #[Route('/', name: 'app_sponsor_index', methods: ['GET'])]
    public function index(SponsorRepository $sponsorRepository): Response
    {
        return $this->render('back/sponsor/index.html.twig', [
            'sponsors' => $sponsorRepository->findAll(),
        ]);
    }

    #[Route('/event/{id}', name: 'app_sponsor_event', methods: ['GET'])]
    public function index_sponsor_event(SponsorRepository $sponsorRepository,$id): Response
    {
        $sponsors=$sponsorRepository->findSponsorsByEvent($id);
        return $this->render('back/sponsor/index.html.twig', [
            'sponsors' => $sponsors,
        ]);
    }

    function badwords($message)
    {
        // $badwords = array("Bonjour1", "bonsoiree", "tifo");
        $badwords = BadWordController::badword();
// dd($badwords);
        $filter = "*******";
        $message = str_replace($badwords, $filter, $message);
        return $message;
    }
    //afficher les details d'un event + ses sponsors + ses commentaires avec la possibilite d'ajout d'un commentaire a cet event
    #[Route('/front/{id}', name: 'app_sponsor_index_front', methods: ['GET', 'POST'])]
    public function indexF(SponsorRepository $sponsorRepository,$id,EvenementRepository $eventrepo, Request $request, CommentaireRepository $commentaireRepository,UserRepository $userRepo): Response
    {
        // $monArray = require_once 'config/profanities.php';
        // dd($monArray);
        //session_start()
        $session=$request->getSession();
        $session->set('id_client',1);
        $id_client=$session->get('id_client');



        // $pass = new Pass();
        // $form = $this->createForm(PassType::class, $pass);
        // $form->handleRequest($request);
        $event=$eventrepo->find($id);
        $sponsors=$sponsorRepository->findSponsorsByEvent($id);


        $commentaire = new Commentaire();
        $client= new User();
        $client=$userRepo->find($id_client);
    


        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $commentaire->setEvent($event);
            $commentaire->setClient($client);

            $message = $commentaire->getDescription();
            $filtredMessage = $this->badwords($message);

            $commentaire->setDescription($filtredMessage);

            $commentaireRepository->save($commentaire, true);


            return $this->redirectToRoute('app_sponsor_index_front', [
                'id'=>$id
            ], Response::HTTP_SEE_OTHER);
        }
        
        // if ($form->isSubmitted() && $form->isValid()) {
        // dd($form);
        // $currentDate = new DateTimeImmutable();
        // dd($currentDate);
        // $currentDate->format('Y-m-d H:i:s');
        // $pass->setCreatedAt($currentDate);
        //     $pass->setEvent($event);
        //     $passRepository->save($pass, true);
        //     return $this->redirectToRoute('app_pass_index', [], Response::HTTP_SEE_OTHER);
        // }  

        return $this->render('front/detail-event.html.twig', [
            'sponsors' => $sponsors,
            'event'=>$event,
            'commentaires' => $commentaireRepository->findAll(),
            'form'=>$form,
            'id_client'=>$id_client,
        ]);

    }
  
    #[Route('/new', name: 'app_sponsor_new', methods: ['GET', 'POST'])]
    public function new(Request $request, SponsorRepository $sponsorRepository): Response
    {
        $sponsor = new Sponsor();
        $form = $this->createForm(SponsorType::class, $sponsor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $sponsorRepository->save($sponsor, true);

            return $this->redirectToRoute('app_sponsor_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/sponsor/new.html.twig', [
            'sponsor' => $sponsor,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_sponsor_show', methods: ['GET'])]
    public function show(Sponsor $sponsor): Response
    {
        return $this->render('back/sponsor/show.html.twig', [
            'sponsor' => $sponsor,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_sponsor_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Sponsor $sponsor, SponsorRepository $sponsorRepository): Response
    {
        $form = $this->createForm(SponsorType::class, $sponsor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $sponsorRepository->save($sponsor, true);

            return $this->redirectToRoute('app_sponsor_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/sponsor/edit.html.twig', [
            'sponsor' => $sponsor,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_sponsor_delete', methods: ['POST'])]
    public function delete(Request $request, Sponsor $sponsor, SponsorRepository $sponsorRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$sponsor->getId(), $request->request->get('_token'))) {
            $sponsorRepository->remove($sponsor, true);
        }

        return $this->redirectToRoute('app_sponsor_index', [], Response::HTTP_SEE_OTHER);
    }
}
