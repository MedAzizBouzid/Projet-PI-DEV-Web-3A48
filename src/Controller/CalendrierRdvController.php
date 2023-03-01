<?php

namespace App\Controller;

use App\Entity\CalendrierRdv;
use App\Form\CalendrierRdvType;
use App\Repository\CalendrierRdvRepository;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/CalendrierRdv')]
class CalendrierRdvController extends AbstractController
{
    #[Route('/', name: 'app_CalendrierRdv_index', methods: ['GET'])]
    public function index(CalendrierRdvRepository $CalendrierRdvRepository): Response
    {

        $events = $CalendrierRdvRepository->findAll();

        $rdvs = [];

        foreach($events as $event){
            $rdvs[] = [
                'id' => $event->getId(),
                'start' => $event->getDebut()->format('Y-m-d H:i:s'),
                'end' => $event->getFin()->format('Y-m-d H:i:s'),
                'title' => $event->getTitre(),
                'description' => $event->getDescription(),
                'backgroundColor' => $event->getFondCouleur(),
                'borderColor' => $event->getBordureColor(),
                'textColor' => $event->getTextColor(),
                // 'allDay' => $event->getAllDay(),
            ];
        }

        $data = json_encode($rdvs);

   

        return $this->render('back/CalendrierRdv.html.twig', [
            'CalendrierRdvs' => $CalendrierRdvRepository->findAll(),
            'data'=>$data,
        ]);
    }
    #[Route('/bergila', name: 'app_CalendrierRdv_index', methods: ['GET'])]
    public function bergila(CalendrierRdvRepository $CalendrierRdvRepository): Response
    {

        $events = $CalendrierRdvRepository->findAll();

        $rdvs = [];

        foreach($events as $event){
            $rdvs[] = [
                'id' => $event->getId(),
                'start' => $event->getDebut()->format('Y-m-d H:i:s'),
                'end' => $event->getFin()->format('Y-m-d H:i:s'),
                'title' => $event->getTitre(),
                'description' => $event->getDescription(),
                'backgroundColor' => $event->getFondCouleur(),
                'borderColor' => $event->getBordureColor(),
                'textColor' => $event->getTextColor(),
                // 'allDay' => $event->getAllDay(),
            ];
        }

        $data = json_encode($rdvs);

   

        return $this->render('front/rdv.html.twig', [
            'CalendrierRdvs' => $CalendrierRdvRepository->findAll(),
            'data'=>$data,
        ]);
    }

    #[Route('/new', name: 'app_CalendrierRdv_new', methods: ['GET', 'POST'])]
    public function new(Request $request, CalendrierRdvRepository $CalendrierRdvRepository): Response
    {
        $CalendrierRdv = new CalendrierRdv();
        $form = $this->createForm(CalendrierRdvType::class, $CalendrierRdv);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $CalendrierRdvRepository->save($CalendrierRdv, true);

            return $this->redirectToRoute('app_CalendrierRdv_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('CalendrierRdv/new.html.twig', [
            'CalendrierRdv' => $CalendrierRdv,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_CalendrierRdv_show', methods: ['GET'])]
    public function show(CalendrierRdv $CalendrierRdv): Response
    {
        return $this->render('CalendrierRdv/show.html.twig', [
            'CalendrierRdv' => $CalendrierRdv,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_CalendrierRdv_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, CalendrierRdv $CalendrierRdv, CalendrierRdvRepository $CalendrierRdvRepository): Response
    {
        $form = $this->createForm(CalendrierRdvType::class, $CalendrierRdv);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $CalendrierRdvRepository->save($CalendrierRdv, true);

            return $this->redirectToRoute('app_CalendrierRdv_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('CalendrierRdv/edit.html.twig', [
            'CalendrierRdv' => $CalendrierRdv,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_CalendrierRdv_delete', methods: ['POST'])]
    public function delete(Request $request, CalendrierRdv $CalendrierRdv, CalendrierRdvRepository $CalendrierRdvRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$CalendrierRdv->getId(), $request->request->get('_token'))) {
            $CalendrierRdvRepository->remove($CalendrierRdv, true);
        }

        return $this->redirectToRoute('app_CalendrierRdv_index', [], Response::HTTP_SEE_OTHER);
    }


    #[Route('/find', name: 'app_CalendrierRdv_delete', methods: ['GET','POST'])]

    public function find_event(CalendrierRdvRepository $calendar)
    {
        $events = $calendar->findAll();

        $rdvs = [];

        foreach($events as $event){
            $rdvs[] = [
                'id' => $event->getId(),
                'start' => $event->getDebut()->format('Y-m-d H:i:s'),
                'end' => $event->getFin()->format('Y-m-d H:i:s'),
                'title' => $event->getTitre(),
                'description' => $event->getDescription(),
                'backgroundColor' => $event->getFondCouleur(),
                'borderColor' => $event->getBordureColor(),
                'textColor' => $event->getTextColor(),
                // 'allDay' => $event->getAllDay(),
            ];
        }

        $data = json_encode($rdvs);

        return $this->render('main/index.html.twig', compact('data'));
    }
     
    
 
}