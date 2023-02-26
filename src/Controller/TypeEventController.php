<?php

namespace App\Controller;

use App\Entity\TypeEvent;
use App\Form\TypeEventType;
use App\Repository\TypeEventRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/type/event')]
class TypeEventController extends AbstractController
{
    #[Route('/', name: 'app_type_event_index', methods: ['GET'])]
    public function index(TypeEventRepository $typeEventRepository): Response
    {
        return $this->render('back/type_event/index.html.twig', [
            'type_events' => $typeEventRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_type_event_new', methods: ['GET', 'POST'])]
    public function new(Request $request, TypeEventRepository $typeEventRepository): Response
    {
        $typeEvent = new TypeEvent();
        $form = $this->createForm(TypeEventType::class, $typeEvent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $typeEventRepository->save($typeEvent, true);

            return $this->redirectToRoute('app_type_event_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/type_event/new.html.twig', [
            'type_event' => $typeEvent,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_type_event_show', methods: ['GET'])]
    public function show(TypeEvent $typeEvent): Response
    {
        return $this->render('back/type_event/show.html.twig', [
            'type_event' => $typeEvent,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_type_event_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, TypeEvent $typeEvent, TypeEventRepository $typeEventRepository): Response
    {
        $form = $this->createForm(TypeEventType::class, $typeEvent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $typeEventRepository->save($typeEvent, true);

            return $this->redirectToRoute('app_type_event_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/type_event/edit.html.twig', [
            'type_event' => $typeEvent,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_type_event_delete', methods: ['POST'])]
    public function delete(Request $request, TypeEvent $typeEvent, TypeEventRepository $typeEventRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$typeEvent->getId(), $request->request->get('_token'))) {
            $typeEventRepository->remove($typeEvent, true);
        }

        return $this->redirectToRoute('app_type_event_index', [], Response::HTTP_SEE_OTHER);
    }
}
