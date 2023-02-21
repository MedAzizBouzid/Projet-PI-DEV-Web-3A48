<?php

namespace App\Controller;

use App\Repository\CalendrierRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/main', name: 'app_main')]
    public function index(CalendrierRepository $calendar): Response
    {
        // $events = $calendar->findAll();

        // $rdvs = [];

        // foreach($events as $event){
        //     $rdvs[] = [
        //         'id' => $event->getId(),
        //         'start' => $event->getStart()->format('Y-m-d H:i:s'),
        //         'end' => $event->getEnd()->format('Y-m-d H:i:s'),
        //         'title' => $event->getTitle(),
        //         'description' => $event->getDescription(),
        //         'backgroundColor' => $event->getBackgroundColor(),
        //         'borderColor' => $event->getBorderColor(),
        //         'textColor' => $event->getTextColor(),
        //         'allDay' => $event->isAllDay(),
        //     ];
        // }

        // $data = json_encode($rdvs);

        return $this->render('back/FullCalender.html.twig', compact('data'));
    }
}
