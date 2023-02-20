<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController
{
    #[Route('/cart', name: 'app_cart')]
    public function index(SessionInterface $session, ProduitRepository $PR): Response
    {
        $panier = $session->get("panier", []);
        //on fabrique les données
        $dataPanier = [];
        $total = 0;

        foreach ($panier as $id => $quantite) {
            //get produit de la table
            $produit = $PR->find($id);
            //on va stocker les données dans dataPanier
            $dataPanier[] = [
                "produit" => $produit,
                "IdClient" => 1,
                "quantité" => $quantite
            ];
            $total += $produit->getPrix() * $quantite;
        }


        return $this->render(
            'front/cart/index.html.twig',
            compact("dataPanier", "total")
        );
    }
    #[Route('/add/{id}', name: 'app_cart_add')]
    public function add(Produit $produit, SessionInterface $session): Response
    {
        //On récupére le panier actuel
        $panier = $session->get("panier", []);
        $id = $produit->getId();

        //si la quantité est null
        if (!empty($panier[$id])) {
            $panier[$id]++;
        } else {
            $panier[$id] = 1;
        }
        //On sauvegarde dans la session les données de panier
        $session->set("panier", $panier);
        return $this->redirectToRoute("app_cart");
    }
    #[Route('/remove/{id}', name: 'app_cart_remove')]
    public function remove(Produit $produit, SessionInterface $session): Response
    {
        //On récupére le panier actuel
        $panier = $session->get("panier", []);
        $id = $produit->getId();

        //si la quantité est null
        if (!empty($panier[$id])) {
            if ($panier[$id] > 1) {
                $panier[$id]--;
            } else {
                //supprimer toute la ligne
                unset($panier[$id]);
            }
        }

        //On sauvegarde dans la session les données de panier
        $session->set("panier", $panier);
        return $this->redirectToRoute("app_cart");
    }
    #[Route('/delete/{id}', name: 'app_cart_delete')]
    public function delete(Produit $produit, SessionInterface $session): Response
    {
        //On récupére le panier actuel
        $panier = $session->get("panier", []);
        $id = $produit->getId();

        //si la quantité est null
        if (!empty($panier[$id])) {

            unset($panier[$id]);
        }

        //On sauvegarde dans la session les données de panier
        $session->set("panier", $panier);
        return $this->redirectToRoute("app_cart");
    }
    #[Route('/delete', name: 'app_cart_delete_all')]
    public function deleteAll(SessionInterface $session): Response
    {


        //On sauvegarde dans la session les données de panier
        $session->set("panier", []);
        return $this->redirectToRoute("app_cart");
    }
}
