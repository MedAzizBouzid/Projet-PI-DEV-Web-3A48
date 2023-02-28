<?php

namespace App\Controller;

use App\Form\ChatGptTyp;
use App\Repository\NotificationRepository;
use App\Service\OpenAiService;
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
    #[Route('/back', name: 'app_back')]
    public function back(Request $request,NotificationRepository $notificationRepository): Response
    {
       
        return $this->render('back/base.html.twig', [
            'notif' => $notificationRepository->findAll(),
        ]);


    }
    #[Route('/chat', name: 'app_chat')]
    public function chat(Request $request,OpenAiService $openAiService): Response
    {
       $form= $this->createForm(ChatGptTyp::class);
       $form->handleRequest(($request));
       if($form->isSubmitted() && $form->isValid()){
        $data=$form->getData();
        $json=$openAiService->getAnswer($data['question']);
        dd($json);

       }
        return $this->renderForm('back/chat.html.twig', [
            'form'=>$form,
        ]);


    }
}
