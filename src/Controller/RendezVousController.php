<?php

namespace App\Controller;

use App\Entity\Notification;
use App\Entity\RendezVous;
use App\Form\RendezVousType;
use App\Entity\Service;
use App\Repository\CalendrierRepository;
use App\Repository\NotificationRepository;
use App\Repository\RendezVousRepository;
use App\Repository\ServiceRepository;
use DateTime;
use DateTimeImmutable;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

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
    #[Route('/check_availability', name: 'check_time_availability', methods: ['POST, GET'])]
    public function checkAvailability(Request $request, RendezvousRepository $rendezvousRepository): JsonResponse
    {
        $dateAt = new \DateTime($request->request->get('dateAt'));

        $isAvailable = $rendezvousRepository->isDateRangeAvailable($dateAt->format('Y-m-d H:i:s'));

        return new JsonResponse(['isAvailable' => $isAvailable]);
    }

    

    #[Route('/newR/{id}', name: 'app_rendezvous_new', methods: ['GET', 'POST'])]
public function new(Request $request, RendezVousRepository $rendezVousRepository, $id, ServiceRepository $serv,CalendrierRepository $calendrierRepository): Response
{
    $service = $serv->find($id);
    $rendezVou = new RendezVous();
    $rendezVou->setService($service);
    $form = $this->createForm(RendezVousType::class, $rendezVou);
    $form->handleRequest($request);
    $events = $calendrierRepository->findAll();

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

    if ($form->isSubmitted() && $form->isValid()) {
        $requestedDate = $rendezVou->getDateAt();
        if (!$rendezVousRepository->isDateRangeAvailable($requestedDate->format('Y-m-d H:i:s'))) {
            $response = array('status' => 'error', 'message' => 'This time is not available. Please choose another time.');
            return $this->render('front/rdv.html.twig', [
                'rendez_vou' => $rendezVou,
                'service' => $service,
                'form' => $form->createView(),
                'response' => $response
            ]);
        }
        $rendezVousRepository->save($rendezVou, true);

        $response = array('status' => 'success', 'message' => 'Rendezvous added successfully.');
        return $this->render('front/rdv.html.twig', [
            'rendez_vou' => $rendezVou,
            'service' => $service,
            'form' => $form->createView(),
            'response' => $response,
             'calendriers' => $calendrierRepository->findAll(),
            'data'=>$data
        ]);
    }

    return $this->render('front/rdv.html.twig', [
        'rendez_vou' => $rendezVou,
        'service' => $service,
        'form' => $form->createView(),
        'calendriers' => $calendrierRepository->findAll(),
            'data'=>$data
    ]);
}





    // #[Route('/{id}', name: 'app_rendez_vous_show', methods:['GET', 'POST'])]
    // public function show(RendezVous $rendezVou): Response
    // {
    //     return $this->render('rendez_vous/show.html.twig', [
    //         'rendez_vou' => $rendezVou,
    //     ]);
    // }

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
    public function delete(Request $request, RendezVous $rendezVou, RendezVousRepository $rendezVousRepository,NotificationRepository $notificationRepository): Response
    {
        $datee= new DateTimeImmutable();
        // $client= $rendezVou->getClient()->getNom();
        if ($this->isCsrfTokenValid('delete'.$rendezVou->getId(), $request->request->get('_token'))) {
            $rendezVousRepository->remove($rendezVou, true);
            $Notifica=new Notification();
            $Notifica->setMessage("Appointement has been Canceled ");
            $Notifica->setDateeAt($datee);
            $Notifica->setRdv($rendezVou);
            $notificationRepository->save($Notifica,true);
        }

        return $this->redirectToRoute('app_rendez_vous_index', [], Response::HTTP_SEE_OTHER);
    }
     
    #[Route('/bmi', name: 'bmi')]
    public function bmiCalculator(Request $request): Response
    {
        // Récupération des données du formulaire
        $weight = $request->request->get('weight');
        $height = $request->request->get('height');

        // Calcul du BMI
        $bmi = $weight / ($height * $height);

        // Affichage du résultat dans une vue Twig
        return $this->render('front/calculator.html.twig', [
            'bmi' => $bmi,
        ]);
    }
}
