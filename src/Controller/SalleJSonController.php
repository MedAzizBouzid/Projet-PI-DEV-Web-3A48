<?php

namespace App\Controller;

use App\Entity\Salle;
use App\Repository\SalleRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\Transport\Serialization\SerializerInterface;
use Symfony\Component\Routing\Annotation\Route;
 use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
 use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class SalleJSonController extends AbstractController
{
    #[Route('/salle/j/son', name: 'app_salle_j_son')]
    public function index(): Response
    {
        return $this->render('salle_j_son/index.html.twig', [
            'controller_name' => 'SalleJSonController',
        ]);
    }
    #[Route("/AllSalle", name: "All_Salle")]
    public function getAllsalle(SalleRepository $repo, SerializerInterface $serializer)
    {
        $salles = $repo->findAll();
         
        return $this->json($salles);
 
        //* Nous renvoyons une réponse Http qui prend en paramètre un tableau en format JSON
     }

     #[Route("addSalleJSON", name: "addSalleJSON")]
     public function addStudentJSON(Request $req,ManagerRegistry $mr,   NormalizerInterface $Normalizer)
     {
     $em = $mr->getManager();
     $salles = new Salle();
     $salles->setNom($req->get('nom'));
     $salles->setLieu($req->get('lieu'));
     $salles->setTelephone($req->get('telephone'));
     $salles->setEmail($req->get('email'));
     $salles->setSuperficie($req->get('superficie'));
     $salles->setDescription($req->get('description'));
     $salles->setImage($req->get('image'));

     $em->persist($salles);
     $em->flush();
 
     $jsonContent = $Normalizer->normalize($salles, 'json', ['groups' => 'salles']);
     return new Response(json_encode($jsonContent));
 }
}
