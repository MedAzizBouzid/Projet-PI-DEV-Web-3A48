<?php

namespace App\Controller;

use DateTimeImmutable;
use App\Entity\Evenement;
use App\Repository\EvenementRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


#[Route('/evenement/api')]
class EvenementApiController extends AbstractController
{
    #[Route('/list', name: 'app_evenement_api')]
    public function index(EvenementRepository $evenementRepository,SerializerInterface $serializer): Response
    {

        $events=$evenementRepository->findAll();
        // $eventNor=$normalizer->normalize($events,'json',["groups"=>"events_list"]); 

        $json=$serializer->serialize($events,'json',['groups'=>'events_list']); 

        return new JsonResponse($json,200,[],true);
        // return $this->json($evenementRepository->findAll(),200,[],['groups'=>'events_list']);
    }

    #[Route('/new', name: 'app_evenement_api_add')]
    public function new(Request $req, SerializerInterface $serializer, ManagerRegistry $mr): Response
    {
        $em=$mr->getManager();
        $evenement= new Evenement();
        $evenement->setNom($req->get('nom'));
        $evenement->setLieu($req->get('lieu'));
        $beginAt = DateTimeImmutable::createFromFormat('Y-m-d H:i:s', $req->get('beginAt'));
        $evenement->setBeginAt($beginAt);
        $finishAt = DateTimeImmutable::createFromFormat('Y-m-d H:i:s', $req->get('finishAt'));
        $evenement->setFinishAt($finishAt);
        $evenement->setDescription($req->get('description'));
        $evenement->setCapacite($req->get('capacite'));
        $evenement->setPrix($req->get('prix'));
        $em->persist($evenement);
        $em->flush();



        // $events=$evenementRepository->findAll();
        // $eventNor=$normalizer->normalize($events,'json',["groups"=>"events_list"]); 

        // $json=$serializer->serialize($events,'json',['groups'=>'events_list']); 

        // return new JsonResponse($json,200,[],true);
        return $this->json($evenement, 200, [], ['groups' => 'events_list']);
    }

    #[Route('/update/{id}', name: 'app_evenement_api_update')]
    public function update(Request $req, ManagerRegistry $mr,Evenement $evenement): Response
    {
        // dd($evenement);
        $em = $mr->getManager();
        $evenement->setNom($req->get('nom'));
        $evenement->setLieu($req->get('lieu'));
        $beginAt = DateTimeImmutable::createFromFormat('Y-m-d H:i:s', $req->get('beginAt'));
        $evenement->setBeginAt($beginAt);
        $finishAt = DateTimeImmutable::createFromFormat('Y-m-d H:i:s', $req->get('finishAt'));
        $evenement->setFinishAt($finishAt);
        $evenement->setDescription($req->get('description'));
        $evenement->setCapacite($req->get('capacite'));
        $evenement->setPrix($req->get('prix'));
        $em->persist($evenement);
        $em->flush();


        return $this->json($evenement, 200, [], ['groups' => 'events_list']);
    }

    #[Route('/delete/{id}', name: 'app_evenement_api_delete')]
    public function delete(Request $req, ManagerRegistry $mr, Evenement $evenement): Response
    {
        // dd($evenement);
        $em = $mr->getManager();
       
        $em->remove($evenement);
        $em->flush();


        return $this->json($evenement, 200, [], ['groups' => 'events_list']);
    }

}
