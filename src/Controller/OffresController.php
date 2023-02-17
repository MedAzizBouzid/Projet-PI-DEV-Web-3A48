<?php

namespace App\Controller;

use App\Entity\Offres;
use App\Form\OffresType;
use App\Repository\OffresRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\MyEntityRepository;



#[Route('/offres')]
class OffresController extends AbstractController
{
    #[Route('/', name: 'app_offres_index', methods: ['GET'])]
    public function index(OffresRepository $offresRepository): Response
    {
        return $this->render('back/tableo.html.twig', [
            'offres' => $offresRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_offres_new', methods: ['GET', 'POST'])]
    public function new(Request $request, OffresRepository $offresRepository): Response
    {
        $offre = new Offres();
        $form = $this->createForm(OffresType::class, $offre);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $offresRepository->save($offre, true);

            return $this->redirectToRoute('app_offres_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/form.html.twig', [
            'offres' => $offre,
            'form' => $form,
        ]);
    }

  //  #[Route('/{id}', name: 'app_offres_show', methods: ['GET'])]


 //  public function show(OffresRepository $offresRepository): Response
   // {
      //  return $this->render('back/table.html.twig', [
        //    'offres' => $offresRepository->findbyId(),
            
        //]);
   // }

    #[Route('/{id}/edit', name: 'app_offres_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Offres $offre, OffresRepository $offresRepository): Response
    {
        $form = $this->createForm(OffresType::class, $offre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $offresRepository->save($offre, true);

            return $this->redirectToRoute('app_offres_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/form.html.twig', [
            'offres' => $offre,
            'form' => $form,
        ]);
    }

    #[Route('/delte/{id}', name: 'app_offres_delete', methods: ['GET','POST'])]
// public function delete(Request $request, Offres $offre, OffresRepository $offresRepository): Response
  //  {
      //if ($this->isCsrfTokenValid('delete'.$offre->getId(), $request->request->get('_token'))) {
    //  $offresRepository->remove($offre,TRUE);
      //}
    //return $this->redirectToRoute('app_offres_index', [], Response::HTTP_SEE_OTHER);
     
 
    //}
    public function remove($id,ManagerRegistry $mr,OffresRepository $repo): Response
    {
        
        $st=$repo->find($id);
        if($st==Null)
       {return $this->redirectToRoute('app_offres_index');
        
      }
      else 
       
       {
        $em=$mr->getManager();
        $em->remove($st);
        $em->flush();
        return $this->redirectToRoute('app_offres_index');
    }



          }


          #[Route('/afficher', name: 'app_offres_index2', methods: ['GET'])]

          public function index2(OffresRepository $myEntityRepository)
    {
        $data = $myEntityRepository->findAllData();

        return $this->render('front/services.html.twig', [
            'data' => $data,
        ]);
    }


    #[Route('/tri', name: 'app_tri', methods: ['GET'])]

    public function tri(OffresRepository $myEntityRepository)
{
  $data = $myEntityRepository->tri();

  return $this->render('back/tableee.html.twig', [
      'offres' => $data,
    
  ]);
}
  
        }