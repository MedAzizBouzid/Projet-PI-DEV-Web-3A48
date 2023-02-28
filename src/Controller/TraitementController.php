<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TraitementController extends AbstractController
{
    #[Route('/traitement', name: 'app_traitement')]
    public function bmiCalculator(Request $request): Response
    {
        // Récupération des données du formulaire
        $weight = $request->request->get('weight');
        $height = $request->request->get('height');

        if($height){

            // Calcul du BMI
       $bmi = ($weight / ($height * $height))*10000;
        }else{

            $bmi=0;
        }
      
       

        // Affichage du résultat dans une vue Twig
        return $this->render('front/BmiCalculator.html.twig', [
            'bmi' => $bmi,
        ]);


    }
}
