<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Form\CommandeType;
use App\Repository\CommandeRepository;
use Doctrine\Persistence\ManagerRegistry;
use Dompdf\Dompdf;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/commande')]
class CommandeController extends AbstractController
{
    #[Route('/', name: 'app_commande_index', methods: ['GET'])]
    public function index(CommandeRepository $commandeRepository): Response
    {
        return $this->render('back/commande/CommandeB.html.twig', [
            'commandes' => $commandeRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_commande_new', methods: ['GET', 'POST'])]
    public function new(Request $request, CommandeRepository $commandeRepository): Response
    {
        $commande = new Commande();
        $form = $this->createForm(CommandeType::class, $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $commandeRepository->save($commande, true);

            return $this->redirectToRoute('app_commande_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/commande/new.html.twig', [
            'commande' => $commande,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_commande_show', methods: ['GET'])]
    public function show(Commande $commande): Response
    {
        return $this->render('back/commande/show.html.twig', [
            'commande' => $commande,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_commande_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Commande $commande, CommandeRepository $commandeRepository, $id): Response
    {
        $commande = $commandeRepository->findCommandeById($id);
        if ($commande->getEtat() == "En Cours de traitement") {
            $commande->setEtat("Traitée");
            $commandeRepository->save($commande, true);
        } else {
            $commande->setEtat("En Cours de traitement");
            $commandeRepository->save($commande, true);
        }



        return $this->redirectToRoute('app_commande_index');
    }

    #[Route('/{id}', name: 'app_commande_delete', methods: ['POST'])]
    public function delete(Request $request, Commande $commande, CommandeRepository $commandeRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $commande->getId(), $request->request->get('_token'))) {
            $commandeRepository->remove($commande, true);
        }

        return $this->redirectToRoute('app_commande_index', [], Response::HTTP_SEE_OTHER);
    }


    // ---------------------------------begin-DELETE pop up ----------------------------------

    #[Route('/delete/{id}', name: 'delete_commande')]
    public function deleteevent($id,ManagerRegistry $mr,CommandeRepository $repo): Response
    {
        $user = $this->getUser();

        $st=$repo->find($id);
        $em=$mr->getManager();
        $em->remove($st);
        $em->flush();
        $this->addFlash('success', 'Your Order  has been deleted.');

       return $this->redirectToRoute('app_profile',['id'=>$user->getId()]);
        // return new Response('removed');
    }
// ------------------------------end----DELETE pop up ----------------------------------





    #[Route('/{id}/pdf', name: 'app_commande_pdf')]
    public function generatePdfAction($id, CommandeRepository $cr)
    {
        // Récupérez les informations de la commande correspondant à l'ID
        $commande = $cr->findCommandeById($id);

        // Générez le contenu HTML à partir des informations de la commande
        $html = $this->renderView('back/commande/commandePDF.html.twig', ['commande' => $commande]);

        // Générez le PDF à partir du contenu HTML
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $pdfContent = $dompdf->output();

        // Renvoyez le PDF en tant que réponse HTTP
        $response = new Response();
        $response->headers->set('Content-Type', 'application/pdf');
        $response->setContent($pdfContent);
        return $response;
    }
}
