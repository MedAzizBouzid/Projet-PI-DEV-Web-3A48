<?php

namespace App\Controller;

use App\Entity\Pass;
use App\Entity\User;
use App\Form\PassType;
use App\Form\UserType;
use DateTimeImmutable;
use App\Entity\Sponsor;
use App\Form\SponsorType;
use App\Repository\PassRepository;
use App\Repository\SponsorRepository;
use App\Repository\EvenementRepository;
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
        return $this->render('sponsor/index.html.twig', [
            'sponsors' => $sponsorRepository->findAll(),
        ]);
    }

    #[Route('/event/{id}', name: 'app_sponsor_event', methods: ['GET'])]
    public function index_sponsor_event(SponsorRepository $sponsorRepository,$id): Response
    {
        $sponsors=$sponsorRepository->findSponsorsByEvent($id);
        return $this->render('sponsor/index.html.twig', [
            'sponsors' => $sponsors,
        ]);
    }

    #[Route('/front/{id}', name: 'app_sponsor_index_front', methods: ['GET', 'POST'])]
    public function indexF(SponsorRepository $sponsorRepository,$id,EvenementRepository $eventrepo, Request $request, PassRepository $passRepository): Response
    {
        // $pass = new Pass();
        // $form = $this->createForm(PassType::class, $pass);
        // $form->handleRequest($request);

        $event=$eventrepo->find($id);
        $sponsors=$sponsorRepository->findSponsorsByEvent($id);
        
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
            // 'form'=>$form,
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

        return $this->renderForm('sponsor/new.html.twig', [
            'sponsor' => $sponsor,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_sponsor_show', methods: ['GET'])]
    public function show(Sponsor $sponsor): Response
    {
        return $this->render('sponsor/show.html.twig', [
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

        return $this->renderForm('sponsor/edit.html.twig', [
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
