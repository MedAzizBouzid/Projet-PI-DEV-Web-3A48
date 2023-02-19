<?php

namespace App\Controller;

use App\Entity\Offres;
use App\Entity\Promotion;
use App\Form\PromotionType;
use App\Repository\PromotionRepository;
use App\Repository\OffresRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/promotion')]
class PromotionController extends AbstractController
{
    #[Route('/', name: 'app_promotion_index', methods: ['GET'])]
    public function index(PromotionRepository $promotionRepository): Response
    {
        return $this->render('back/tablep.html.twig', [
            'promotion' => $promotionRepository->findAll(),
        ]);
    }




    #[Route('/new', name: 'app_promotion_new', methods: ['GET', 'POST'])]
    public function new(Request $request, PromotionRepository $promotionRepository,OffresRepository $offRepository): Response
    {
        $promotion = new Promotion();
          $form = $this->createForm(PromotionType::class, $promotion);
           $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $promotionRepository->save($promotion, true);
          
    
          
    }

        return $this->renderForm('back/formpro.html.twig', [
            'promotion' => $promotion,
            'form' => $form,
        ]);}




    #[Route('/{id}', name: 'app_promotion_show', methods: ['GET'])]
    public function show(Promotion $promotion): Response
    {
        return $this->render('promotion/show.html.twig', [
            'promotion' => $promotion,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_promotion_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Promotion $promotion, PromotionRepository $promotionRepository): Response
    {
        $form = $this->createForm(PromotionType::class, $promotion);
        $form->handleRequest($request);
      

        if ($form->isSubmitted() && $form->isValid()) {
            $promotionRepository->save($promotion, true);
       

            return $this->redirectToRoute('app_promotion_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/formpro.html.twig', [
            'promotion' => $promotion,
            'form' => $form,
        ]);
    }
    #[Route('/delete/{id}', name: 'app_promotion_delete', methods: ['POST','GET'])]

    
    public function remove($id,ManagerRegistry $mr,PromotionRepository $repo): Response
    {
        
        $st=$repo->find($id);
        if($st==Null)
       {return $this->redirectToRoute('app_promotion_index');
        
      }
      else 
       
       {
        $em=$mr->getManager();
        $em->remove($st);
        $em->flush();
        return $this->redirectToRoute('app_promotion_index');
    }



          }
   

    
}
