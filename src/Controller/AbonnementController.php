<?php

namespace App\Controller;

use App\Entity\Offres;
use App\Entity\Abonnement;
use App\Form\AbonnementType;
use App\Form\AbonnementTypeFront;
use App\Repository\AbonnementRepository;
use App\Repository\OffresRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Mailer;

#[Route('/abonnement')]
class AbonnementController extends AbstractController
{
    #[Route('/', name: 'app_abonnement_index', methods: ['GET'])]
    public function index(AbonnementRepository $abonnementRepository): Response
    {
        return $this->render('back/tablea.html.twig', [
            'abonnements' => $abonnementRepository->findAll(),
        ]);
    }

    #[Route('/new/{id}', name: 'app_abonnement_new', methods: ['GET', 'POST'])]
    public function new(Request $request, AbonnementRepository $abonnementRepository,$id,OffresRepository $offRepository): Response
    {
        $abonnement = new Abonnement();
        $offre = new Offres();
           $offre = $offRepository->find($id);
           $abonnement->setOffre( $offre);
     

        $form = $this->createForm(AbonnementTypeFront::class, $abonnement);
        $form->remove('offre');
    
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $abonnementRepository->save($abonnement, true);
   return $this->renderForm('front/contact.html.twig', [
            'abonnement' => $abonnement,
            'form' => $form,
        ]);
    }
    return $this->renderForm('front/contact.html.twig', [
        'abonnement' => $abonnement,
        'form' => $form,
    ]);
    }


    #[Route('/newb', name: 'app_abonnement_new_inback', methods: ['GET', 'POST'])]
    public function newback(Request $request, AbonnementRepository $abonnementRepository): Response
    {
        $abonnement = new Abonnement();
        $form = $this->createForm(AbonnementType::class, $abonnement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $abonnementRepository->save($abonnement, true);

            return $this->redirectToRoute('app_abonnement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/forma.html.twig', [
            'abonnement' => $abonnement,
            'form' => $form,
        ]);
    } 

    #[Route('/{id}', name: 'app_abonnement_show', methods: ['GET'])]
    public function show(Abonnement $abonnement): Response
    {
        return $this->render('back/showa.html.twig', [
            'abonnement' => $abonnement,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_abonnement_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Abonnement $abonnement, AbonnementRepository $abonnementRepository): Response
    {
        $form = $this->createForm(AbonnementType::class, $abonnement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $abonnementRepository->save($abonnement, true);

            return $this->redirectToRoute('app_abonnement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/forma.html.twig', [
            'abonnement' => $abonnement,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_abonnement_delete', methods: ['POST'])]
    public function delete(Request $request, Abonnement $abonnement, AbonnementRepository $abonnementRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$abonnement->getId(), $request->request->get('_token'))) {
            $abonnementRepository->remove($abonnement, true);
        }

        return $this->redirectToRoute('app_abonnement_index', [], Response::HTTP_SEE_OTHER);
    }


}
