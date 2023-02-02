<?php

namespace App\Controller;

use App\Entity\Vote;
use App\Form\VoteType;
use App\Repository\JoueurRepository;
use App\Repository\VoteRepository;
use DateTimeImmutable;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExamController extends AbstractController
{
    #[Route('/exam', name: 'app_exam')]
    public function index(): Response
    {
        return $this->render('exam/index.html.twig', [
            'controller_name' => 'ExamController',
        ]);
    }
    #[Route('/joueur', name: 'app_joueur')]
    public function listJoueur(JoueurRepository $joueurRepository): Response
    {
        $joueurs = $joueurRepository->findAll();
        return $this->render('exam/listJoueur.html.twig', [
            'joueurs' => $joueurs,
        ]);
    }
    #[Route('/test', name: 'app_test')]
    public function test(VoteRepository $repo, ManagerRegistry $mr): Response
    {
        $vote = new Vote();

        $form = $this->createForm(VoteType::class, $vote);
        $req=new Request();
        $form->handleRequest($req);
        if ($form->isSubmitted()) {
            // $c->setPersonne($p);

            $vote->setDate(new DateTimeImmutable());
            $em = $mr->getManager();
            $em->persist($vote);
            $em->flush();

            return $this->redirectToRoute('list_p');
        }
        return $this->render('exam/add.html.twig', ['f' => $form]);
    }
}
