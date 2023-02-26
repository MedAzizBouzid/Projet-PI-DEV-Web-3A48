<?php

namespace App\Controller;
use Stripe\Stripe;
use Stripe\Charge;
use Stripe\Token;
use App\Controller\PaymentController;
use App\Entity\Offres;
use App\Entity\Abonnement;
use App\Form\AbonnementType;
use App\Form\AbonnementTypeFront;
use App\Repository\AbonnementRepository;
use App\Repository\OffresRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Mailer;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;






#[Route('/abonnement')]
class AbonnementController extends AbstractController

{
    #[Route('/', name: 'app_abonnement_index', methods: ['GET'])]
    public function index(AbonnementRepository $abonnementRepository): Response
    {
        return $this->render('back/tablea.html.twig', [
            'abonnements' => $abonnementRepository->findAll(),
        ]);
    }
   

    #[Route('/new/{id}', name: 'app_abonnement_new', methods: ['GET', 'POST'])]
    public function new(Request $request, AbonnementRepository $abonnementRepository, $id, OffresRepository $offRepository,SessionInterface $session): Response
    {
        $abonnement = new Abonnement();
        $offre = new Offres();
           $offre = $offRepository->find($id);
           $abonnement->setOffre( $offre);
           $cardToken = $this->initStripe();

        $form = $this->createForm(AbonnementTypeFront::class, $abonnement);
        $form->remove('offre');
    
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $abonnementData = $form->getData();
            // $session->set('abonnementData', $abonnementData);
            // $session=$request->getSession();
            // $session->set('abonnementData',$abonnementData);
            return $this->redirectToRoute('app_process_payment', [], Response::HTTP_SEE_OTHER);
          
            }
 
    
    return $this->renderForm('front/contact.html.twig', [
        'abonnement' => $abonnement,
        'form' => $form,
    ]);
    } 
   
    
    public function initStripe(): Token
    {
        Stripe::setApiKey('sk_test_51MeivKDKYp8OKChYrOHZFL2m7LkI331DgS1uORlIu8mrxzvKVszBT0VyODsq7mlF6DbPlQTs3VG6oPClzRgrAd8800LjV6yGbQ');
    
        // Créez un jeton de carte test
        $cardToken = Token::create([
            'card' => [
                'number' => '4242424242424242',
                'exp_month' => 1,
                'exp_year' => date('Y') + 1,
                'cvc' => '123'
            ]
        ]);

        return $cardToken;
    }

  
    
    #[Route('/payment', name: 'app_process_payment', methods: ['POST','GET'])]
    public function processPayment(Request $request, AbonnementRepository $abonnementRepository,SessionInterface $session): Response
    {
        // Initialiser la bibliothèque Stripe avec la clé d'API et le jeton de carte test
        $stripeToken = $this->initStripe();
        // $session=$request->getSession();
    // dd($session->get('abonnementData'));
        $abonnement = new Abonnement();
        // Récupérer les détails du paiement à partir du formulaire
        $amount = $request->request->get('amount');
        $cardTokenFromForm = $request->request->get('card_token');
        $email = $request->request->get('email');
$metadata = [
    'email' => $email,
];
$abonnementData = $session->get('abonnementData');
$name = $abonnementData->getName();
$email = $abonnementData->getEmail();
$mpayement = $abonnementData->getMPayement();
$dateD = $abonnementData->getDateD();
$offre = $abonnementData->getOffre();



$salle = $abonnementData->getSalle();
$abonnement = new Abonnement();
$abonnement->setName($name);
$abonnement->setEmail($email);
$abonnement->setMPayement($mpayement);
$abonnement->setDateD($dateD);
$abonnement->setOffre($offre);


$abonnement->setSalle($salle);
    // dd($abonnement);
        // Créer la charge Stripe
        try {
            $charge = Charge::create([
                'amount' => $amount * 100, // le montant doit être en centimes
                'currency' => 'eur',
                'source' => $stripeToken->id, // utilisez le jeton de carte
                'metadata' => $metadata,
            ]);
    
            // Paiement réussi
         
            $abonnementRepository->save($abonnement, true);

            $response = new JsonResponse(['status' => 'success']);
        } catch (\Exception $e) {
            // Erreur de paiement
            $response = new JsonResponse(['status' => 'error', 'message' => $e->getMessage()]);
        }
    
        // Afficher l'alerte de paiement réussi ou d'erreur
        return $this->render('front/payment.html.twig', [
            'paymentResponse' => $response->getContent(),
            'cardToken' => $cardTokenFromForm,
        ]);
    }
 
  
    
   

    #[Route('/newb', name: 'app_abonnement_new_inback', methods: ['GET', 'POST'])]
    public function newback(Request $request, AbonnementRepository $abonnementRepository): Response
    {
        $abonnement = new Abonnement();
        $form = $this->createForm(AbonnementType::class, $abonnement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $abonnementRepository->save($abonnement, true);

            return $this->redirectToRoute('app_abonnement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/forma.html.twig', [
            'abonnement' => $abonnement,
            'form' => $form,
        ]);
    } 

    #[Route('/{id}', name: 'app_abonnement_show', methods: ['GET'])]
    public function show(Abonnement $abonnement): Response
    {
        return $this->render('back/showa.html.twig', [
            'abonnement' => $abonnement,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_abonnement_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Abonnement $abonnement, AbonnementRepository $abonnementRepository): Response
    {
        $form = $this->createForm(AbonnementType::class, $abonnement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $abonnementRepository->save($abonnement, true);

            return $this->redirectToRoute('app_abonnement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/forma.html.twig', [
            'abonnement' => $abonnement,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_abonnement_delete', methods: ['POST'])]
    public function delete(Request $request, Abonnement $abonnement, AbonnementRepository $abonnementRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$abonnement->getId(), $request->request->get('_token'))) {
            $abonnementRepository->remove($abonnement, true);
        }

     
        return $this->redirectToRoute('app_abonnement_index', [], Response::HTTP_SEE_OTHER);
    }
    private $entityManager;

public function __construct(EntityManagerInterface $entityManager)
{
    $this->entityManager = $entityManager;
}


}
