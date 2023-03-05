<?php

namespace App\Controller;

use App\Entity\Activite;
use App\Repository\ActiviteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class JSONActiviteController extends AbstractController
{
    #[Route('/Displayhome', name: 'Display_Activite', methods: ['GET'])]
    public function Allmyactivities(ActiviteRepository $activiteRepository): JsonResponse
    {
        $activites = $activiteRepository->findAll();

        return $this->json($activites);
    }

    //    #[Route("addTestJSON", name: "addStudentJSON")]
    // public function addStudentJSON(Request $req,ManagerRegistry $mr,   NormalizerInterface $Normalizer)
    // {
    // $em = $mr->getManager();
    // $test = new Test();
    // $test->setNom($req->get('nom'));
    // $test->setPrenom($req->get('prenom'));
    // $em->persist($test);
    // $em->flush();

    // $jsonContent = $Normalizer->normalize($test, 'json', ['groups' => 'tests']);
    // return new Response(json_encode($jsonContent));
    
    #[Route("AddActivite", name: "Add_Activite",methods: ['GET'] )]
    public function addStudentJSON(Request $req,ManagerRegistry $mr,   NormalizerInterface $Normalizer)
    {
        
    $em = $mr->getManager();
    $activite = new Activite();
    $activite->setNom($req->get('nom'));
    $activite->setCategorie($req->get('categorie'));
    $activite->setIntensite($req->get('intensite'));
    $activite->setTenue($req->get('tenue'));
    $activite->setRecomendation($req->get('recomendation'));
    $activite->setMateriel($req->get('materiel'));
    $activite->setGrpMusculaire($req->get('GRPmusculaire'));
    // $activite->setImage($req->get('image'));


    $em->persist($activite);
    $em->flush();

    $jsonContent = $Normalizer->normalize($activite, 'json', ['groups' => 'Activite']);
    return new Response(json_encode($jsonContent));
}
    // *****************************************/ Afficher une activité\***************************************

    #[Route('/activites/{id}', name: 'show_activite', methods: ['GET'])]
    public function show(Activite $activite): JsonResponse
    {
        return $this->json($activite);
    }
    // *****************************************/ Modifier une activité\***************************************

    #[Route('/Edit_activites/{id}', name: 'update_activite', methods: ['PUT'])]
    public function update(Request $request, Activite $test, EntityManagerInterface $entityManager): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $test->setNom($data['nom']);
        $test->setCategorie($data['categorie']);
        $test->setMateriel($data['materiel']);
        $test->setIntensite($data['intensite']);
        $test->setGrpMusculaire($data['GRPmusculaire']);
        $test->setTenue($data['tenue']);

        $entityManager->flush();

        return $this->json(['message' => 'Activite updated!']);
    }
    // *****************************************/ Supprimer une activité\***************************************

    #[Route('/Delete_activites/{id}', name: 'delete_activite', methods: ['DELETE','GET'])]
    public function delete(Activite $activite, EntityManagerInterface $entityManager): JsonResponse
    {
        $entityManager->remove($activite);
        $entityManager->flush();

        return $this->json(['message' => 'test deleted!']);
    }
}