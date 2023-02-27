<?php

namespace App\Controller;

use App\Entity\Commentaire;
use App\Entity\Sponsor;
use App\Form\CommentaireType;
use App\Form\SponsorType;
use App\Repository\CommentaireRepository;
use App\Repository\EvenementRepository;
use App\Repository\SponsorRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/sponsor')]
class SponsorController extends AbstractController
{
    #[Route('/', name:'app_sponsor_index', methods:['GET'])]
function index(SponsorRepository $sponsorRepository): Response
    {
    return $this->render('back/sponsor/index.html.twig', [
        'sponsors' => $sponsorRepository->findAll(),
    ]);
}

#[Route('/event/{id}', name:'app_sponsor_event', methods:['GET'])]
function index_sponsor_event(SponsorRepository $sponsorRepository, $id): Response
    {
    $sponsors = $sponsorRepository->findSponsorsByEvent($id);
    return $this->render('back/sponsor/index.html.twig', [
        'sponsors' => $sponsors,
    ]);
}

//afficher les details d'un event + ses sponsors + ses commentaires avec la possibilite d'ajout d'un commentaire a cet event
#[Route('/front/{id}', name:'app_sponsor_index_front', methods:['GET', 'POST'])]
function indexF(SponsorRepository $sponsorRepository, $id, EvenementRepository $eventrepo, Request $request, CommentaireRepository $commentaireRepository, UserRepository $userRepo): Response
    {

    $event = $eventrepo->find($id);
    $sponsors = $sponsorRepository->findSponsorsByEvent($id);

    $user = $this->getUser();

    $commentaire = new Commentaire();

    $form = $this->createForm(CommentaireType::class, $commentaire);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $commentaire->setEvent($event);
        $commentaire->setClient($user);
        $commentaireRepository->save($commentaire, true);

        return $this->redirectToRoute('app_sponsor_index_front', [
            'id' => $id,
        ], Response::HTTP_SEE_OTHER);
    }
    if ($user) {

        return $this->render('front/detail-event.html.twig', [
            'sponsors' => $sponsors,
            'event' => $event,
            'commentaires' => $commentaireRepository->findAll(),
            'form' => $form,
            'id_client' => $user->getId(),
        ]);
    } else {
        return $this->render('front/detail-event.html.twig', [
            'sponsors' => $sponsors,
            'event' => $event,
            'commentaires' => $commentaireRepository->findAll(),
            'form' => $form,
            'id_client' => null,
            
        ]);

    }

}

#[Route('/new', name:'app_sponsor_new', methods:['GET', 'POST'])]
function new (Request $request, SponsorRepository $sponsorRepository): Response {
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

#[Route('/{id}', name:'app_sponsor_show', methods:['GET'])]
function show(Sponsor $sponsor): Response
    {
    return $this->render('back/sponsor/show.html.twig', [
        'sponsor' => $sponsor,
    ]);
}

#[Route('/{id}/edit', name:'app_sponsor_edit', methods:['GET', 'POST'])]
function edit(Request $request, Sponsor $sponsor, SponsorRepository $sponsorRepository): Response
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

#[Route('/{id}', name:'app_sponsor_delete', methods:['POST'])]
function delete(Request $request, Sponsor $sponsor, SponsorRepository $sponsorRepository): Response
    {
    if ($this->isCsrfTokenValid('delete' . $sponsor->getId(), $request->request->get('_token'))) {
        $sponsorRepository->remove($sponsor, true);
    }

    return $this->redirectToRoute('app_sponsor_index', [], Response::HTTP_SEE_OTHER);
}
}
