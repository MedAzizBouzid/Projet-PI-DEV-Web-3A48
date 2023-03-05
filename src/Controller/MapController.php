<?php

namespace App\Controller;

use App\Entity\Map;
use App\Entity\Salle;
use App\Form\MapType;
use App\Repository\MapRepository;
use App\Repository\SalleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/map')]
class MapController extends AbstractController
{
    #[Route('/displayMap', name: 'app_map_index', methods: ['GET'])]
    public function index(MapRepository $mapRepository): Response
    {
        $mydata = $mapRepository->findAll();
        return $this->render('back/lefleat.html.twig',  [
            'mydata' => $mydata,
         ]);
    }
// Ajout parametrer
    #[Route('/{id}/Add_MapToSSalle', name: 'app_Map_new', methods: ['GET', 'POST'])]
     public function new($id,Request $request, MapRepository $MapRepository,SalleRepository $SalleRe): Response
    {

        $salle  = new Salle();
        $salle=$SalleRe->find($id);

        $map = new Map();
        $form = $this->createForm(MapType::class, $map);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {


        // $map->setActivite($request->get('Salle'));
        $map->setMapsalle($salle);
            $MapRepository->save($map, true);

            return $this->redirectToRoute('app_map_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/newMap.html.twig', [
            'map' => $map,
            'salle' => $salle,
            'form' => $form,
        ]);
    }


  
    // #[Route('/new', name: 'app_map_new', methods: ['GET', 'POST'])]
    // public function new(Request $request, MapRepository $mapRepository): Response
    // {
    //     $map = new Map();
    //     $form = $this->createForm(MapType::class, $map);
    //     $form->handleRequest($request);

    //     if ($form->isSubmitted() && $form->isValid()) {
    //         $mapRepository->save($map, true);

    //         return $this->redirectToRoute('app_map_index', [], Response::HTTP_SEE_OTHER);
    //     }

    //     return $this->renderForm('back/lefleat.html.twig', [
    //         'map' => $map,
    //         'form' => $form,
    //     ]);
    // }

    #[Route('/{id}', name: 'app_map_show', methods: ['GET'])]
    public function show(Map $map): Response
    {
        return $this->render('map/show.html.twig', [
            'map' => $map,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_map_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Map $map, MapRepository $mapRepository): Response
    {
        $form = $this->createForm(MapType::class, $map);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $mapRepository->save($map, true);

            return $this->redirectToRoute('app_map_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('map/edit.html.twig', [
            'map' => $map,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_map_delete', methods: ['POST'])]
    public function delete(Request $request, Map $map, MapRepository $mapRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$map->getId(), $request->request->get('_token'))) {
            $mapRepository->remove($map, true);
        }

        return $this->redirectToRoute('app_map_index', [], Response::HTTP_SEE_OTHER);
    }
}
