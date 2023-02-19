<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Entity\Produit;
use App\Entity\Panier;
use App\Entity\LignePanier;
use App\Repository\CommandeRepository;
use App\Repository\LignePanierRepository;
use App\Repository\PanierRepository;
use App\Repository\ProduitRepository;
use App\Repository\UserRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController
{

    #[Route('/cart', name: 'app_cart')]
    public function index(SessionInterface $session, Request $request, ProduitRepository $PR, LignePanierRepository $LPR): Response
    {
        //   $panier = $session->get("panier", []);
        //on fabrique les données
        $dataPanier = [];
        $nbr = $LPR->countAll();
        $total = 0;
        $ordre = $request->get('ordre', 'asc');
        $result = $LPR->findAll();
        for ($i = 0; $i < count($result); $i++) {
            $total += $result[$i]->getProduit()->getPrix() * $result[$i]->getQuantite();
        }
        // foreach ($panier as $id => $quantite) {
        //     //get produit de la table
        //     $produit = $PR->find($id);
        //     if ($produit !== null) {
        //         //on va stocker les données dans dataPanier
        //         $dataPanier[] = [
        //             "produit" => $produit,
        //             "IdClient" => 1,
        //             "quantité" => $quantite
        //         ];
        //     }
        // }
        $totalC = $total + 7;

        return $this->render(
            'front/cart/index.html.twig',
            [
                'LignePaniers' => $LPR->trierParPrix($ordre),
                'total' => $total,
                'totalC' => $totalC,
                'nbr' => $nbr,
                'ordre'=>$ordre
            ]

        );
    }
    //----------------------------TEST D'ajout au  lignepanier---------------------------------------------------
    #[Route('/test/{id}', name: 'app_cart_test')]
    public function test($id, LignePanierRepository $LPRepository): Response
    {
        $result = $LPRepository->findByProduitId($id);
        if ($result ==   null) {

            return $this->redirectToRoute("app_cart_add", ['id' => $id]);
        } else {
            return $this->redirectToRoute("app_cart_update", ['id' => $id]);
        }
    }
    #[Route('/update/{id}', name: 'app_cart_update')]
    public function update(Produit $produit, $id, SessionInterface $session, ProduitRepository $repo, LignePanierRepository $LPRepository): Response
    {
        //On récupére le panier actuel
        $panier = $session->get("panier", []);
        $id = $produit->getId();
        $prix = $produit->getPrix();
        //si la quantité est null
        if (!empty($panier[$id])) {
            $panier[$id]++;
        } else {

            $panier[$id] = 1;
        }
        $session->set("panier", $panier);

        $lp = new LignePanier();
        $lp = $LPRepository->findByProduitId($id);
        //dd($lp);
        if ($produit->getStock() > $lp[0]->getQuantite()) {
            $lp[0]->setQuantite($lp[0]->getQuantite() + 1);
            $produit->setStock($produit->getStock() - 1);
        }

        $lp[0]->setTotalProduit($lp[0]->getQuantite() * $prix);
        $LPRepository->save($lp[0], true);
        $repo->save($produit, true);
        return $this->redirectToRoute("app_cart");
    }
    #[Route('/add/{id}', name: 'app_cart_add')]
    public function add(Produit $produit, SessionInterface $session, ProduitRepository $repo, LignePanierRepository $LPRepository): Response
    {

        //On récupére le panier actuel
        $panier = $session->get("panier", []);
        $id = $produit->getId();
        $prix = $produit->getPrix();
        //si la quantité est null
        if (!empty($panier[$id])) {
            $panier[$id]++;
        } else {

            $panier[$id] = 1;
        }
        $lignePanier = new lignePanier();
        $lignePanier->setQuantite(1);
        $lignePanier->setTotalProduit($prix    *   $lignePanier->getQuantite());
        $lignePanier->setProduit($produit);
        $produit->setStock($produit->getStock() - 1);
        //On sauvegarde dans la session les données de panier
        $session->set("panier", $panier);
        $LPRepository->save($lignePanier, true);
        $repo->save($produit, true);
        return $this->redirectToRoute("app_cart");
    }















    #[Route('/remove/{id}', name: 'app_cart_remove')]
    public function remove(Produit $produit, SessionInterface $session, ProduitRepository $rp, LignePanierRepository $LPRepository): Response
    {
        //On récupére le panier actuel
        $panier = $session->get("panier", []);
        $id = $produit->getId();
        $prix = $produit->getPrix();
        $lp = new LignePanier();
        $lp = $LPRepository->findByProduitId($id);
        //si la quantité est null
        if (!empty($panier[$id])) {
            if (($panier[$id] > 1) &&   ($lp[0]->getQuantite() > 1)) {
                $panier[$id]--;

                $lp[0]->setQuantite($lp[0]->getQuantite() - 1);
                $produit->setStock($produit->getStock() + 1);
                $lp[0]->setTotalProduit($lp[0]->getQuantite() * $prix);
                $LPRepository->save($lp[0], true);
            } else {
                //supprimer toute la ligne
                unset($panier[$id]);
                $LPRepository->remove($lp[0], true);
                $rp->save($produit, true);
            }
        }

        //On sauvegarde dans la session les données de panier
        $session->set("panier", $panier);
        return $this->redirectToRoute("app_cart");
    }
    #[Route('/delete/{id}', name: 'app_cart_delete')]
    public function delete(Produit $produit, SessionInterface $session, ProduitRepository $rp, LignePanierRepository $LPRepository): Response
    {
        //On récupére le panier actuel
        $panier = $session->get("panier", []);
        $id = $produit->getId();
        $lp = new LignePanier();
        $lp = $LPRepository->findByProduitId($id);

        //si la quantité est null
        if (!empty($panier[$id])) {
            $produit->setStock($lp[0]->getQuantite() + $produit->getStock());
            $LPRepository->remove($lp[0], true);
            $rp->save($produit, true);

            unset($panier[$id]);
        }

        //On sauvegarde dans la session les données de panier
        $session->set("panier", $panier);
        return $this->redirectToRoute("app_cart");
    }
    #[Route('/delete', name: 'app_cart_delete_all')]
    public function deleteAll(SessionInterface $session, LignePanierRepository $LPRepository): Response
    {

        $LPRepository->deleteAllLignePanier();
        //On sauvegarde dans la session les données de panier
        $session->set("panier", []);
        return $this->redirectToRoute("app_cart");
    }

    //---------------------------------tri ligne panier----------------------------------
    #[Route('/trier', name: 'app_panier_trie')]
    public function trierParPrix($ordre = 'asc', LignePanierRepository $lpr)
    {
        $lp = $lpr->trierParPrix($ordre);

        return $this->render('panier/index.html.twig', [
            'lp' => $lp,
        ]);
    }


    //----------------------------Panier-------------
    #[Route('/addPanier', name: 'app_panier_add')]
    public function addPanier(UserRepository $UR, PanierRepository $PR, CommandeRepository $cr, LignePanierRepository $LPRepository): Response
    {
        //integration dhia
        $client = $UR->findById(1);
        $result = $LPRepository->findAll();
        $panier = new Panier();
        $totalPanier = 0;
        $nbreArticles = 0;
        for ($i = 0; $i < count($result); $i++) {
            $panier->addLignesPanier($result[$i]);
            $totalPanier += $result[$i]->getTotalProduit();
            $nbreArticles += $result[$i]->getQuantite();
        }
        $panier->setClient($client);
        $panier->setNombreArticles($nbreArticles);
        $panier->getLignesPanier();
        $panier->setTotalPanier($totalPanier);
        $Commande = new Commande();
        $Commande->setNbArticles($panier->getNombreArticles());
        $Commande->setPanier($panier);
        $Commande->setTotalCommande($panier->getTotalPanier());
        $Commande->setEtat("En Cours de traitement");
        $Commande->setNumTelClient($panier->getClient()->getNumTel());



        $cr->save($Commande, true);
        $PR->save($panier, true);
        $LPRepository->deleteAllLignePanier();
        //return to commande
        return $this->render(
            'front/cart/Commande.html.twig'
        );
    }
    #[Route('/panier', name: 'app_panier_show')]
    public function panierShow(SessionInterface $session, UserRepository $UR, PanierRepository $PR): Response
    {

        // integration dhia
        $user = $UR->findById(1);

        return $this->render(
            'front/cart/panierShow.html.twig',
            [
                'Paniers' => $PR->findByClientId(1),
                'nom' => $user->getNom() . ' ' . $user->getPrenom()

            ]

        );
    }

    #[Route('/deletePanier/{id}', name: 'app_panier_delete')]
    public function deletePanier(Request $request, Panier $produit, PanierRepository $produitRepository): Response
    {
        //if ($this->isCsrfTokenValid('delete' . $produit->getId(), $request->request->get('_token'))) {
        $produitRepository->remove($produit, true);


        return $this->redirectToRoute('app_cart', [], Response::HTTP_SEE_OTHER);
    }
}
