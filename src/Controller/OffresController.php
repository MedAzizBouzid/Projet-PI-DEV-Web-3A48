<?php

namespace App\Controller;
use App\Entity\Promotion;
use App\Entity\Offres;
use App\Form\OffresType;
use App\Repository\OffresRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\MyEntityRepository;
use App\Repository\PromotionRepository;



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
      
        if($offre->getPromo()!= null){
            $offre->setPrix($offre->getPrix()-(($offre->getPrix()*$offre->getPromo()->getPourcentage())/100));}
           

        if ($form->isSubmitted() && $form->isValid()) {
            $offresRepository->save($offre, true);

            return $this->redirectToRoute('app_offres_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/form.html.twig', [
            'offres' => $offre,
            'form' => $form,
        ]);
    }

   #[Route('/show/{id}', name: 'app_offres_show', methods: ['GET'])]


   public function show(Offres $offres): Response
    {
      return $this->render('back/showo.html.twig', [
            'offre' => $offres,
            
        ]);
    }

//     #[Route('/{id}/edit', name: 'app_offres_edit', methods: ['GET', 'POST'])]
//     public function edit(Request $request, Offres $offre, OffresRepository $offresRepository): Response
//     {     if($offre->getPromo()!=null)
//        {
//         $bergila=0;
//         $bergila=$offre->getPromo()->getPourcentage();
       
//        }
//         $form = $this->createForm(OffresType::class, $offre);
      
//         $form->handleRequest($request);
        
        
//   if ($form->isSubmitted() && $form->isValid()) {
       
       
       
//         if($offre->getPromo()==null){
//             $offre->setPrix(($offre->getPrix()*100)/(100-$bergila));
//             }   
//             else 
            
//                 $offre->setPrix($offre->getPrix()-(($offre->getPrix()*$offre->getPromo()->getPourcentage())/100));
//                 $offresRepository->save($offre, true);
            

//             return $this->redirectToRoute('app_offres_index', [], Response::HTTP_SEE_OTHER);
//         }

//         return $this->renderForm('back/form.html.twig', [
//             'offres' => $offre,
//             'form' => $form,
//         ]);
//     }

#[Route('/{id}/edit', name: 'app_offres_edit', methods: ['GET', 'POST'])]
public function edit(Request $request, Offres $offre, OffresRepository $offresRepository): Response
{
    $pr = 0;
    if ($offre->getPromo() != null) {
        $pr = $offre->getPromo()->getPourcentage();
    }

    $form = $this->createForm(OffresType::class, $offre);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        if ($offre->getPromo() && $offre->getPromo()->getDateFin() <= new \DateTime()) {
            // La promotion est expirée, supprimer la référence à la promotion dans l'offre
            $offre->setPromo(null);
        } else {
            if ($offre->getPromo() == null) {
                $offre->setPrix(($offre->getPrix() * 100) / (100 - $pr));
            } else {
                $offre->setPrix($offre->getPrix() - (($offre->getPrix() * $offre->getPromo()->getPourcentage()) / 100));
            }
        }

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

}