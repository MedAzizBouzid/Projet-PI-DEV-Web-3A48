<?php

namespace App\Controller;

use App\Entity\RendezVous;
use App\Form\RendezVousType;
use App\Entity\Service;
use App\Repository\RendezVousRepository;
use App\Repository\ServiceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/rendezVous')]
class RendezVousController extends AbstractController
{
    #[Route('/', name: 'app_rendez_vous_index', methods: ['GET'])]
    public function index(RendezVousRepository $rendezVousRepository): Response
    {
        return $this->render('back/tableRendezVous.html.twig', [
            'rendez_vouses' => $rendezVousRepository->findAll(),
        ]);
    }

    #[Route('/newR/{id}', name: 'app_rendezvous_new', methods: ['GET', 'POST'])]
    public function new(Request $request, RendezVousRepository $rendezVousRepository,$id,ServiceRepository $serv): Response
    {
        
        $service= new Service();
        $service= $serv->find($id);
        
        $rendezVou = new RendezVous();
        $form = $this->createForm(RendezVousType::class, $rendezVou);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $rendezVou->setService($service);
            $rendezVousRepository->save($rendezVou, true);

            return $this->redirectToRoute('app_service_index_Front', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('front/rdv.html.twig', [
            'rendez_vou' => $rendezVou,
            'service' => $service,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_rendez_vous_show', methods:['GET', 'POST'])]
    public function show(RendezVous $rendezVou): Response
    {
        return $this->render('rendez_vous/show.html.twig', [
            'rendez_vou' => $rendezVou,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_rendez_vous_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, RendezVous $rendezVou, RendezVousRepository $rendezVousRepository): Response
    {
        $form = $this->createForm(RendezVousType::class, $rendezVou);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $rendezVousRepository->save($rendezVou, true);

            return $this->redirectToRoute('app_rendez_vous_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('rendez_vous/edit.html.twig', [
            'rendez_vou' => $rendezVou,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_rendez_vous_delete', methods: ['POST'])]
    public function delete(Request $request, RendezVous $rendezVou, RendezVousRepository $rendezVousRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$rendezVou->getId(), $request->request->get('_token'))) {
            $rendezVousRepository->remove($rendezVou, true);
        }

        return $this->redirectToRoute('app_rendez_vous_index', [], Response::HTTP_SEE_OTHER);
    }
}
