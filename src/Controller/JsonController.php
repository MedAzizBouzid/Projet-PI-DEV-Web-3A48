<?php

namespace App\Controller;

use App\Entity\Test;
 use App\Repository\TestRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class JsonController extends AbstractController
{
    #[Route('/Display_test', name: 'activites', methods: ['GET'])]
    public function Allmyactivities(TestRepository $activiteRepository): JsonResponse
    {
        $activites = $activiteRepository->findAll();

        return $this->json($activites);
    }


    // *****************************************/  -Ajouter une activité- \***************************************
    // #[Route('/Json_create', name: 'create_activite', methods: ['POST','GET'])]
    // public function create(Request $request, EntityManagerInterface $entityManager): JsonResponse
    // {
    //     $data = json_decode($request->getContent(), true);

    //     $test = new Test();
    //     $test->setNom($data['nom']);
    //     $test->setPrenom($data['prenom']);


    //     $entityManager->persist($test);
    //     $entityManager->flush();

    //     return $this->json(['message' => 'test created!']);
    // }
    #[Route("addTestJSON", name: "addStudentJSON")]
    public function addStudentJSON(Request $req,ManagerRegistry $mr,   NormalizerInterface $Normalizer)
    {
    $em = $mr->getManager();
    $test = new Test();
    $test->setNom($req->get('nom'));
    $test->setPrenom($req->get('prenom'));
    $em->persist($test);
    $em->flush();

    $jsonContent = $Normalizer->normalize($test, 'json', ['groups' => 'tests']);
    return new Response(json_encode($jsonContent));
}
    // *****************************************/ Afficher une activité\***************************************

    #[Route('/activites/{id}', name: 'show_activite', methods: ['GET'])]
    public function show(Test $activite): JsonResponse
    {
        return $this->json($activite);
    }
    // *****************************************/ Modifier une activité\***************************************

    #[Route('/Edit_activites/{id}', name: 'update_activite', methods: ['PUT'])]
    public function update(Request $request, Test $test, EntityManagerInterface $entityManager): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $test->setNom($data['nom']);
        $test->setPrenom($data['prenom']);

        $entityManager->flush();

        return $this->json(['message' => 'Activite updated!']);
    }
    // *****************************************/ Supprimer une activité\***************************************

    #[Route('/Delete_activites/{id}', name: 'delete_activite', methods: ['DELETE','GET'])]
    public function delete(Test $activite, EntityManagerInterface $entityManager): JsonResponse
    {
        $entityManager->remove($activite);
        $entityManager->flush();

        return $this->json(['message' => 'test deleted!']);
    }
}