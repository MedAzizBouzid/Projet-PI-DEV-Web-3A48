<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Role;
use App\Form\UserType;
use App\Repository\RoleRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/user')]
class UserController extends AbstractController
{
    /**************affichage************ */
    #[Route('/admin', name: 'app_user_admin', methods: ['GET'])]
    public function admin(UserRepository $userRepository): Response
    {
        return $this->render('back/tableAdmin.html.twig', [
            'users' => $userRepository->RoleDiff("admin"),
        ]);
    }
    #[Route('/client', name: 'app_user_client', methods: ['GET'])]
    public function client(UserRepository $userRepository): Response
    {
        return $this->render('back/tableClient.html.twig', [
            'users' => $userRepository->RoleDiff("client"),
        ]);
    }
    #[Route('/coach', name: 'app_user_coach', methods: ['GET'])]
    public function coach(UserRepository $userRepository): Response
    {
        return $this->render('back/tableCoach.html.twig', [
            'users' => $userRepository->RoleDiff("coach"),
        ]);
    }
    /**************ajout************ */

    #[Route('/new', name: 'app_user_new', methods: ['GET', 'POST'])]
    public function new(Request $request, UserRepository $userRepository ,RoleRepository $roleRepository): Response
    {
        $user = new User();
        $role=$roleRepository->find(2);
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setRole($role);
            $user->setEtat(0);

            $userRepository->save($user, true);

            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('front/signup.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }
    #[Route('/newA', name: 'app_user_newA', methods: ['GET', 'POST'])]
    public function newA(Request $request, UserRepository $userRepository ,RoleRepository $roleRepository): Response
    {
        $user = new User();
        $role=$roleRepository->find(1);
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setRole($role);
            $user->setEtat(0);

            $userRepository->save($user, true);

            return $this->redirectToRoute('app_user_admin', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/FormAdmin.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }
    #[Route('/newC', name: 'app_user_newC', methods: ['GET', 'POST'])]
    public function newC(Request $request, UserRepository $userRepository ,RoleRepository $roleRepository): Response
    {
        $user = new User();
        $role=$roleRepository->find(3);
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setRole($role);
            $user->setEtat(0);
            $userRepository->save($user, true);

            return $this->redirectToRoute('app_user_coach', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/FormCoach.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }
    /************************** */


    #[Route('/{id}', name: 'app_user_show', methods: ['GET'])]
    public function show(User $user): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,    
        ]);
    }

    /**************modif************ */

    #[Route('/{id}/edit', name: 'app_user_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, UserRepository $userRepository): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $userRepository->save($user, true);

            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('user/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }
    #[Route('/{id}/editA', name: 'app_user_editA', methods: ['GET', 'POST'])]
    public function editA(Request $request, User $user, UserRepository $userRepository): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $userRepository->save($user, true);

            return $this->redirectToRoute('app_user_admin', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/FormAdmin.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }
    #[Route('/{id}/editC', name: 'app_user_editC', methods: ['GET', 'POST'])]
    public function editC(Request $request, User $user, UserRepository $userRepository): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $userRepository->save($user, true);

            return $this->redirectToRoute('app_user_coach', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/FormCoach.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }
    /**************supp************ */

    #[Route('/{id}', name: 'app_user_delete', methods: ['POST'])]
    public function delete(Request $request, User $user, UserRepository $userRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $userRepository->remove($user, true);
        }

        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/A/{id}', name: 'app_user_deleteA', methods: ['POST'])]
    public function deleteA(Request $request, User $user, UserRepository $userRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $userRepository->remove($user, true);
        }

        return $this->redirectToRoute('app_user_admin', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/C/{id}', name: 'app_user_deleteC', methods: ['POST'])]
    public function deleteC(Request $request, User $user, UserRepository $userRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $userRepository->remove($user, true);
        }

        return $this->redirectToRoute('app_user_coach', [], Response::HTTP_SEE_OTHER);
    }
   
}
