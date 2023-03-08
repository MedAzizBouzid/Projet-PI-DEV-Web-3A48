<?php

namespace App\Controller;

use App\Entity\CategorieOff;
use App\Form\CategorieOffType;
use App\Repository\CategorieOffRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/categorie')]
class CategorieOffController extends AbstractController
{
    #[Route('/', name: 'app_categorie_index', methods: ['GET'])]
    public function index(CategorieOffRepository $categorieRepository): Response
    {
        return $this->render('front/service.html.twig', [
            'categorie' => $categorieRepository->findAll(),
        ]);
    }
    #[Route('/afficher', name: 'app_categorie_index2', methods: ['GET'])]
    public function index2(CategorieOffRepository $categorieRepository, Request $request, PaginatorInterface $paginator): Response
    {
        
        $offre = $categorieRepository->findAll();
        $offre = $paginator->paginate(
            $offre, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            3/*limit per page*/
        );

return $this->render('back/tablec.html.twig', [
    'categories' => $offre,
]);
    }

    #[Route('/new', name: 'app_categorie_new', methods: ['GET', 'POST'])]
    public function new(Request $request, CategorieOffRepository $categorieRepository): Response
    {
        $categorie = new CategorieOff();
        $form = $this->createForm(CategorieOffType::class, $categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $categorieRepository->save($categorie, true);

            return $this->redirectToRoute('app_categorie_index2', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/formc.html.twig', [
            'categorie' => $categorie,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_categorie_show', methods: ['GET'])]
    public function show(CategorieOff $categorie): Response
    {
        return $this->render('categorie/show.html.twig', [
            'categorie' => $categorie,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_categorie_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, CategorieOff $categorie, CategorieOffRepository $categorieRepository): Response
    {
        $form = $this->createForm(CategorieOffType::class, $categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $categorieRepository->save($categorie, true);

            return $this->redirectToRoute('app_categorie_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/formc.html.twig', [
            'categorie' => $categorie,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_categorie_delete', methods: ['POST'])]
    public function delete(Request $request, CategorieOff $categorie, CategorieOffRepository $categorieRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$categorie->getId(), $request->request->get('_token'))) {
            $categorieRepository->remove($categorie, true);
        }

        return $this->redirectToRoute('app_categorie_index2', [], Response::HTTP_SEE_OTHER);
    }

   
 


}
