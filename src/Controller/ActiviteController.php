<?php

namespace App\Controller;

use App\Entity\Activite;
use App\Form\ActiviteType;
use App\Repository\ActiviteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

use Doctrine\Persistence\ManagerRegistry;


#[Route('/activite')]
class ActiviteController extends AbstractController
{
    #[Route('/', name: 'app_activite_index', methods:['GET', 'POST'])]
    public function index(Request $request ,ActiviteRepository $activiteRepository,SluggerInterface $slugger): Response
    {
        $activite = new Activite();
        $form = $this->createForm(ActiviteType::class, $activite);
        $form->handleRequest($request);

        
        if ($form->isSubmitted() && $form->isValid()) {
            $image = $form->get('image')->getData();

            if ($image) {
                $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $image->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $image->move(
                        $this->getParameter('activite_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'photo$photoname' property to store the PDF file name
                // instead of its contents
                $activite->setImage($newFilename);
            }

            $activiteRepository->save($activite, true);

            return $this->redirectToRoute('app_activite_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('back/table_act.html.twig', [
            'activite' => $activiteRepository->findAll(),
            'form' => $form,

        ]);
    }
//_________________________________________________________AJOUT _____________________________________________________________

    #[Route('/new', name: 'app_activite_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ActiviteRepository $activiteRepository,SluggerInterface $slugger): Response
    {
        $activite = new Activite();
        $form = $this->createForm(ActiviteType::class, $activite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $image = $form->get('image')->getData();

            if ($image) {
                $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $image->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $image->move(
                        $this->getParameter('activite_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'photo$photoname' property to store the PDF file name
                // instead of its contents
                $activite->setImage($newFilename);
            }

 
            $activiteRepository->save($activite, true);
  

            return $this->redirectToRoute('app_activite_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/form2.html.twig', [
            'activite' => $activite,
            'form' => $form,
        ]);
    }
    //_________________________________________________________AJOUT _____________________________________________________________

    #[Route('/Show_activite_front', name: 'Show_activite_front')]
    public function Show_activitefront(EntityManagerInterface $am): Response
    {
       
        $repo=$am->getRepository(Activite::class);
        $activite=$repo->findAll();
        
        return $this->render('front/showsalle.html.twig', [
            'activite' => $activite,
        ]);
    }
    // Show_activite_front_par_salle_______________________________________________________________________________________________
    #[Route('/Show_activite_front_par_salle', name: 'Show_activite_front_par_salle')]
    public function Show_activite_front_par_salle(EntityManagerInterface $am): Response
    {
       
        $repo=$am->getRepository(Activite::class);
        $activite=$repo->findAll();
        
        return $this->render('front/class_details.html.twig', [
            'activite' => $activite,
        ]);
    }

    #[Route('/Show_activite', name: 'Show_activite')]
    public function Show_activite(EntityManagerInterface $am): Response
    {
       
        $repo=$am->getRepository(Activite::class);
        $activite=$repo->findAll();
        
        return $this->render('back/table_act.html.twig', [
            'activite' => $activite,
        ]);
    }
    // _______________________________________________________________________________
    #[Route('show/{id}', name: 'app_activite_show', methods: ['GET'])]
    public function show(Activite $activite): Response
    {
        return $this->render('back/show_act.html.twig', [
            'activite' => $activite,
        ]);
    }
    // _______________________________________________________________________________

    #[Route('/{id}/front', name: 'app_activite_show_front', methods: ['GET'])]
    public function show_act(Activite $activite): Response
    {
        return $this->render('front/Act_Details.html.twig', [
            'activite' => $activite,
        ]);
    }
    // _______________________________________________________________________________

    #[Route('/{id}/edit', name: 'app_activite_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Activite $activite, SluggerInterface $slugger,ActiviteRepository $activiteRepository): Response
    {
        $form = $this->createForm(ActiviteType::class, $activite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $image = $form->get('image')->getData();

            if ($image) {
                $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $image->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $image->move(
                        $this->getParameter('activite_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'photo$photoname' property to store the PDF file name
                // instead of its contents
                $activite->setImage($newFilename);
            }

            $activiteRepository->save($activite, true);

            return $this->redirectToRoute('app_activite_index', [], Response::HTTP_SEE_OTHER);
        } 

        return $this->renderForm('back/form2.html.twig', [
            'activite' => $activite,
            'form' => $form,
        ]);
    }

    // #[Route('/delete/{id}', name: 'app_activite_delete', methods: ['GET', 'POST'])]
    // public function delete(Request $request, Activite $activite, ActiviteRepository $activiteRepository): Response
    // {
    //     if ($this->isCsrfTokenValid('delete'.$activite->getId(), $request->request->get('_token'))) {
    //         $activiteRepository->remove($activite, true);
    //     }

    //    return $this->redirectToRoute('app_activite_index', [], Response::HTTP_SEE_OTHER);
    // }
    

    // #[Route('/delete/{id}', name: 'app_activite_delete', methods: ['POST'])]
    // public function delete(Request $request, Activite $activite, activiteRepository $activiteRepository): Response
    // {
    //     if ($this->isCsrfTokenValid('delete'.$activite->getId(), $request->request->get('_token'))) {
    //         $activiteRepository->remove($activite, true);
    //     }

    //     return $this->redirectToRoute('app_activite_index', [], Response::HTTP_SEE_OTHER);
    // }
    #[Route('/{id}', name: 'app_activite_delete')]
    public function removeStudent($id,ManagerRegistry $mr,activiteRepository $repo): Response
    {
        $st=$repo->find($id);//select * from student wehere id=id
        $em=$mr->getManager();
        $em->remove($st);
        $em->flush();
       
        // return new Response('removed');
                return $this->redirectToRoute('app_activite_index', [], Response::HTTP_SEE_OTHER);

    }
    

    #[Route('/findActitivité', name: 'find_actitivité')]
    public function findSalle(EntityManagerInterface $em,Request $request,ActiviteRepository $repo)
    {
        $r=$request->query->get('findbyname');
         if($r!=""){
            $req=$em->createQuery("select c from App\Entity\Activite c   where c.id=:t ");
                   
            $req->setParameter('t' ,$r);
             $activite=$req->getResult();  
                    }
                    else {
                $salles= $repo->findAll();
            }
            return $this->render('back/table_act.html.twig',[
                'activite' => $activite]);
        }
}

//     #[Route('/add_Student', name: 'add_Student')]
//     public function addStudent(Request $request ,ManagerRegistry $mg,SluggerInterface $slugger){
       
//         $activite=new Activite();
 
//          $form=$this->createForm(ActiviteType::class,$activite);
//          $form->handleRequest($request);
 
//          if( $form->isSubmitted() && $form->isValid()){
//             $actvite = $form->getData();

//          $brochureFile = $form->get('image')->getData();
//          if ($brochureFile) {
//             $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
//             // this is needed to safely include the file name as part of the URL
//             $safeFilename = $slugger->slug($originalFilename);
//             $newFilename = $safeFilename.'-'.uniqid().'.'.$brochureFile->guessExtension();
//             try {
//                 $brochureFile->move(
//                     $this->getParameter('activite_directory'),
//                     $newFilename
//                 );
//             } catch (FileException $e) {
//                 // ... handle exception if something happens during file upload
//             }
//             $activite->setImage($newFilename);
//         }


//             $em=$mg->getManager();
//             $em->persist($actvite);
//             $em->flush();
//             return $this->redirectToRoute('app_activite_index');
 
//     }
//     return $this->render('back/form3.html.twig',[
//         'activite' => $activite,
//         'form' => $form->createView(),
//     ]);
//  }