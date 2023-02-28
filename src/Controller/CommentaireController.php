<?php

namespace App\Controller;

use App\Entity\Commentaire;
use App\Entity\CommentLike;
use App\Form\CommentaireType;
use App\Repository\CommentaireRepository;
use App\Repository\CommentLikeRepository;
use App\Repository\UserRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/commentaire')]
class CommentaireController extends AbstractController
{
    #[Route('/', name: 'app_commentaire_index', methods: ['GET'])]
    public function index(CommentaireRepository $commentaireRepository): Response
    {
        return $this->render('commentaire/index.html.twig', [
            'commentaires' => $commentaireRepository->findAll(),
        ]);
    }

    #[Route('/event/{id}', name: 'app_commentaire_event', methods: ['GET'])]
    public function index_comment_event(CommentaireRepository $commentaireRepository, $id): Response
    {
        return $this->render('commentaire/index.html.twig', [
            'commentaires' => $commentaireRepository->findCommentByEvent($id),
        ]);
    }

    #[Route('/new', name: 'app_commentaire_new', methods: ['GET', 'POST'])]
    public function new(Request $request, CommentaireRepository $commentaireRepository): Response
    {
        $commentaire = new Commentaire();
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $commentaireRepository->save($commentaire, true);

            return $this->redirectToRoute('app_commentaire_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('commentaire/new.html.twig', [
            'commentaire' => $commentaire,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/remove/{id_event}/front', name: 'app_commentaire_delete_front', methods: ['POST','GET'])]
    public function deleteF($id,Request $request , ManagerRegistry $mr,  CommentaireRepository $commentaireRepository,$id_event): Response
    {
        
        $st = $commentaireRepository->find($id);
        $em = $mr->getManager();
        // if ($this->isCsrfTokenValid('delete' . $commentaire->getId(), $request->request->get('_token'))) {
        //     $commentaireRepository->remove($commentaire, true);
        // }
        $em->remove($st);
        
        $em->flush();

        return $this->redirectToRoute('app_sponsor_index_front', ['id'=> $id_event], Response::HTTP_SEE_OTHER);
    }
    // #[Route('/remove/{id}', name: 'remove')]
    // public function remove($id, ManagerRegistry $mr, StudentRepository $repo): Response
    // {
    //     $st = $repo->find($id);
    //     $em = $mr->getManager();
    //     $em->remove($st);
    //     $em->flush();
    //     return $this->redirectToRoute('listStudent');
    // }




    #[Route('/{id}', name: 'app_commentaire_show', methods: ['GET'])]
    public function show(Commentaire $commentaire): Response
    {
        return $this->render('commentaire/show.html.twig', [
            'commentaire' => $commentaire,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_commentaire_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Commentaire $commentaire, CommentaireRepository $commentaireRepository): Response
    {
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $commentaireRepository->save($commentaire, true);

            return $this->redirectToRoute('app_commentaire_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('commentaire/edit.html.twig', [
            'commentaire' => $commentaire,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_commentaire_delete', methods: ['POST'])]
    public function delete(Request $request, Commentaire $commentaire, CommentaireRepository $commentaireRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$commentaire->getId(), $request->request->get('_token'))) {
            $commentaireRepository->remove($commentaire, true);
        }

        return $this->redirectToRoute('app_commentaire_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * like  unlike cmment
     * Commentaire $commentaire, ObjectManager $mg,CommentLikeRepository $likeRepo
     */
    #[Route('/comment/{id}/like/{id_event}', name: 'app_commentaire_like')]
    public function like(ManagerRegistry $manager, Commentaire $commentaire,$id_event, CommentLikeRepository $likeRepo,UserRepository $userRepo,Request $request): Response
    {
        $like= new CommentLike();
        $em = $manager->getManager();

        if ($commentaire->isLikedByUser()) {
            $like= $likeRepo->findOneBy([
                'commentaire'=> $commentaire,
                'user'=> $userRepo->findOneById(1),
            ]);

            $em->remove($like);
            $em->flush();

            // return $this->json([
            //     'code'=> 200,
            //     'message'=>'like bien supprime',
            //     'likes'=>$likeRepo->count(['commentaire'=>$commentaire])
            // ],200);
            // dd($request);
            return $this->redirectToRoute('app_sponsor_index_front', ['id' => $id_event], Response::HTTP_SEE_OTHER);


        }

        $like->setCommentaire($commentaire);
        $like->setUser($userRepo->findOneById(1));
        $em->persist($like);
        $em->flush();

        // return $this->json([
        //     'code' => 200,
        //     'message' => 'like bien ajoute',
        //     'likes' => $likeRepo->count(['commentaire' => $commentaire])
        // ], 200);
        return $this->redirectToRoute('app_sponsor_index_front', ['id' => $id_event], Response::HTTP_SEE_OTHER);


    }



    
}
