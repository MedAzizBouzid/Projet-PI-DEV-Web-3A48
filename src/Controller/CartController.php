<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Entity\LignePanier;
use App\Entity\Panier;
use App\Entity\Produit;
use App\Entity\User;
use App\Repository\CommandeRepository;
use App\Repository\LignePanierRepository;
use App\Repository\PanierRepository;
use App\Repository\ProduitRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController
{
    //----------------------------showLignePanier-------------
    #[Route('/cart', name:'app_cart')]
function index(SessionInterface $session, Request $request, ProduitRepository $PR, LignePanierRepository $LPR): Response
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
            'ordre' => $ordre,
        ]

    );
}
//----------------------------TEST D'ajout au  lignepanier---------------------------------------------------
#[Route('/test/{id}', name:'app_cart_test')]
function test($id, LignePanierRepository $LPRepository): Response
    {
    $result = $LPRepository->findByProduitId($id);
    if ($this->getUser()) {
        if ($result == null) {

            return $this->redirectToRoute("app_cart_add", ['id' => $id]);
        } else {
            return $this->redirectToRoute("app_cart_update", ['id' => $id]);
        }
    }else{
        return $this->redirectToRoute("app_login");

    }
}
//----------------------------IncrementerLignePanier-------------
#[Route('/update/{id}', name:'app_cart_update')]
function update(Produit $produit, $id, SessionInterface $session, ProduitRepository $repo, LignePanierRepository $LPRepository): Response
    {
    //On récupére le panier actuel
    $id = $produit->getId();
    $prix = $produit->getPrix();

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
    $result = $LPRepository->findAll();
    $totalP = 0;
    for ($i = 0; $i < count($result); $i++) {
        $totalP += $result[$i]->getProduit()->getPrix() * $result[$i]->getQuantite();
    }
    $totalC = $totalP + 7;
    return $this->json([
        'code' => 200,
        ' message' => 'produit est bien ajouté',
        'nbr' => $lp[0]->getQuantite(),
        'total' => $lp[0]->getTotalProduit(),
        'totalP' => $totalP,
        'totalC' => $totalC,
        
    ]);
}
//----------------------------AddLignePanier-------------
#[Route('/add/{id}', name:'app_cart_add')]
function add(Produit $produit, SessionInterface $session, ProduitRepository $repo, LignePanierRepository $LPRepository): Response
    {

    $prix = $produit->getPrix();

    $lignePanier = new lignePanier();
    $lignePanier->setQuantite(1);
    $lignePanier->setTotalProduit($prix * $lignePanier->getQuantite());
    $lignePanier->setProduit($produit);
    $produit->setStock($produit->getStock() - 1);
    $LPRepository->save($lignePanier, true);
    $repo->save($produit, true);

    return $this->json([
        'code' => 200,
        'message' => 'produit est bien ajouté',
        'nbr' => $lignePanier->getQuantite(),
    ]);
}

//----------------------------décrementationlignePanier-------------
#[Route('/remove/{id}', name:'app_cart_remove')]
function remove(Produit $produit, SessionInterface $session, ProduitRepository $rp, LignePanierRepository $LPRepository): Response
    {

    $id = $produit->getId();
    $prix = $produit->getPrix();
    $lp = new LignePanier();
    $lp = $LPRepository->findByProduitId($id);
    //si la quantité est null
    if ($lp[0]->getQuantite() != 0) {
        if (($lp[0]->getQuantite() > 1)) {
            $lp[0]->setQuantite($lp[0]->getQuantite() - 1);
            $produit->setStock($produit->getStock() + 1);
            $lp[0]->setTotalProduit($lp[0]->getQuantite() * $prix);
            $LPRepository->save($lp[0], true);

        } else if ($lp[0]->getQuantite() == 1) {
            //supprimer toute la ligne

            $LPRepository->remove($lp[0], true);
            $rp->save($produit, true);
        }
    }

    $result = $LPRepository->findAll();
    $totalP = 0;
    for ($i = 0; $i < count($result); $i++) {
        $totalP += $result[$i]->getProduit()->getPrix() * $result[$i]->getQuantite();
    }
    $totalC = $totalP + 7;

    return $this->json([
        'code' => 200,
        ' message' => 'produit est bien ajouté',
        'nbr' => $lp[0]->getQuantite(),
        'total' => $lp[0]->getTotalProduit(),
        'totalP' => $totalP,
        'totalC' => $totalC,
    ]);
}
//----------------------------deleteLignePanier-------------
#[Route('/delete/{id}', name:'app_cart_delete')]
function delete(Produit $produit, SessionInterface $session, ProduitRepository $rp, LignePanierRepository $LPRepository): Response
    {

    $id = $produit->getId();
    $lp = new LignePanier();
    $lp = $LPRepository->findByProduitId($id);
    $produit->setStock($lp[0]->getQuantite() + $produit->getStock());
    $LPRepository->remove($lp[0], true);
    $rp->save($produit, true);

    $result = $LPRepository->findAll();
    $totalP = 0;
    for ($i = 0; $i < count($result); $i++) {
        $totalP += $result[$i]->getProduit()->getPrix() * $result[$i]->getQuantite();
    }
    $totalC = $totalP + 7;

    //On sauvegarde dans la session les données de panier

    return $this->redirectToRoute("app_cart");
}
//----------------------------deleteAllLignePanier-------------
#[Route('/delete', name:'app_cart_delete_all')]
function deleteAll(SessionInterface $session, LignePanierRepository $LPRepository): Response
    {

    $LPRepository->deleteAllLignePanier();

    return $this->redirectToRoute("app_cart");
}

//---------------------------------tri ligne panier----------------------------------
#[Route('/trier', name:'app_panier_trie')]
function trierParPrix($ordre = 'asc', LignePanierRepository $lpr)
    {
    $lp = $lpr->trierParPrix($ordre);

    return $this->render('panier/index.html.twig', [
        'lp' => $lp,
    ]);
}

//----------------------------Panier-------------

//----------------------------addPanier-------------
#[Route('/addPanier/{id}', name:'app_panier_add')]
function addPanier(UserRepository $UR, PanierRepository $PR, CommandeRepository $cr, LignePanierRepository $LPRepository, $id): Response
    {
    //integration dhia
    $client = new User();
    $client = $UR->findById($id);

    $result = $LPRepository->findAll();
    $panier = new Panier();
    $totalPanier = 0;
    $nbreArticles = 0;
    for ($i = 0; $i < count($result); $i++) {
        $panier->addLignesPanier($result[$i]);
        $totalPanier += $result[$i]->getTotalProduit();
        $nbreArticles += $result[$i]->getQuantite();
    }
    $panier->setClient($client[0]);
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
//----------------------------showPanier-------------
#[Route('/panier/{id}', name:'app_panier_show')]
function panierShow(SessionInterface $session, UserRepository $UR, PanierRepository $PR, $id): Response
    {

    // integration dhia
    $user = $UR->findById($id);

    return $this->render(
        'front/cart/panierShow.html.twig',
        [
            'Paniers' => $PR->findByClientId($id),

        ]

    );
}
//----------------------------deletePanier-------------
#[Route('/deletePanier/{id}', name:'app_panier_delete')]
function deletePanier(Request $request, Panier $produit, PanierRepository $produitRepository): Response
    {
    //if ($this->isCsrfTokenValid('delete' . $produit->getId(), $request->request->get('_token'))) {
    $produitRepository->remove($produit, true);

    return $this->redirectToRoute('app_cart', [], Response::HTTP_SEE_OTHER);
}
}
