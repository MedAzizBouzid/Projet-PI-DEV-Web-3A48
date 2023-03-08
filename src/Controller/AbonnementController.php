<?php

namespace App\Controller;

use App\Entity\Abonnement;
use App\Entity\Offres;
use App\Form\AbonnementType;
use App\Form\AbonnementTypeFront;
use App\Repository\AbonnementRepository;
use App\Repository\OffresRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;
use Stripe\Charge;
use Stripe\Stripe;
use Stripe\Token;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/abonnement')]
class AbonnementController extends AbstractController
{
    #[Route('/', name: 'app_abonnement_index', methods: ['GET'])]
  
    public function indexx(AbonnementRepository $AbonnementRepository, Request $request, PaginatorInterface $paginator): Response
    {
        $offre = $AbonnementRepository->findAll();
        $offre = $paginator->paginate(
            $offre, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            3/*limit per page*/
        );

return $this->render('back/tablea.html.twig', [
    'abonnements' => $offre,
]);
    }
/////////////tri////////////
    #[Route('/tri', name: 'app_abbonement_trier', methods: ['GET'])]
    public function afftri(AbonnementRepository $AbonnementRepository,Request $request, PaginatorInterface $paginator): Response
    {
       
        $ab = $AbonnementRepository->tri();
        $ab = $paginator->paginate(
            $ab, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            3/*limit per page*/
        );

        // Passer les résultats à la vue Twig pour les afficher
        return $this->render('back/tablea.html.twig', [
            'abonnements' => $ab,
        ]);
    }
#[Route('/new/{id}', name:'app_abonnement_new', methods:['GET', 'POST'])]
function new (Request $request, AbonnementRepository $abonnementRepository, $id, OffresRepository $offRepository, SessionInterface $session): Response {
    $abonnement = new Abonnement();
    $offre = new Offres();
    $offre = $offRepository->find($id);
    $cardToken = $this->initStripe();

    $form = $this->createForm(AbonnementTypeFront::class, $abonnement);
    $form->remove('offre');
    $user = $this->getUser();

    $form->handleRequest($request);

    if ($form->isSubmitted() ) {
        // dd($form);
        $abonnementData = $form->getData();
        $session->set('abonnementData', $abonnementData);
        $session = $request->getSession();
        $session->set('abonnementData', $abonnementData);
        $abonnement->setOffre($offre);

        $abonnement->setName($user->getNom());
        $abonnement->setEmail($user->getEmail());

        $abonnementRepository->save($abonnement, true);

        return $this->redirectToRoute('app_process_payment', [], Response::HTTP_SEE_OTHER);

    }

    if ($this->getUser()) {

        return $this->renderForm('front/abonnement.html.twig', [
            'abonnement' => $abonnement,
            'form' => $form,
        ]);
    }else{
        return $this->redirectToRoute('app_login');

    }
}

function initStripe(): Token
    {
    Stripe::setApiKey('sk_test_51MeivKDKYp8OKChYrOHZFL2m7LkI331DgS1uORlIu8mrxzvKVszBT0VyODsq7mlF6DbPlQTs3VG6oPClzRgrAd8800LjV6yGbQ');

    // Créez un jeton de carte test
    $cardToken = Token::create([
        'card' => [
            'number' => '4242424242424242',
            'exp_month' => 1,
            'exp_year' => date('Y') + 1,
            'cvc' => '123',
        ],
    ]);

    return $cardToken;
}

#[Route('/payment', name:'app_process_payment', methods:['POST', 'GET'])]
function processPayment(Request $request, AbonnementRepository $abonnementRepository, SessionInterface $session,ManagerRegistry $mr): Response
    {
        $user=$this->getUser();
    // Initialiser la bibliothèque Stripe avec la clé d'API et le jeton de carte test
    $stripeToken = $this->initStripe();

    $abonnementData = new Abonnement();
    $abonnementData = $session->get('abonnementData');
    // dd($abonnementData);
    // $amount=$abonnementData->getOffre()->getPrix();

    // Récupérer les détails du paiement à partir du formulaire
    $amount = $request->request->get('amount');
  
    $cardTokenFromForm = $request->request->get('card_token');
    $email = $user->getEmail();
    $metadata = [
        'email' => $email,
    ];
    

$mpayement = $abonnementData->getMPayement();
$dateD = $abonnementData->getDateD();
$abonnementData->setEtatab(true);
    // Créer la charge Stripe
    try {
        $charge = Charge::create([
            'amount' => $amount * 100, // le montant doit être en centimes
            'currency' => 'eur',
            'source' => $stripeToken->id, // utilisez le jeton de carte
            'metadata' => $metadata,
        ]);

        // Paiement réussi

       
        $id=$abonnementData->getId();
        $abonnementRepository->changeEtat(true,$id);
        // $response = new JsonResponse(['status' => 'success']);
        $this->addFlash('success','payment affected');
        return $this->redirectToRoute('app_profil');

    } catch (\Exception$e) {
        // Erreur de paiement
        // $response = new JsonResponse(['status' => 'error', 'message' => $e->getMessage()]);
    }

    // Afficher l'alerte de paiement réussi ou d'erreur
    return $this->render('front/payment.html.twig', [
        // 'paymentResponse' => $response->getContent(),
        'cardToken' => $cardTokenFromForm,
        'prix'=>$abonnementData->getOffre()->getPrix()
    ]);
}

#[Route('/newb', name:'app_abonnement_new_inback', methods:['GET', 'POST'])]
function newback(Request $request, AbonnementRepository $abonnementRepository): Response
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

#[Route('/{id}', name:'app_abonnement_show', methods:['GET'])]
function show(Abonnement $abonnement): Response
    {
    return $this->render('back/showa.html.twig', [
        'abonnement' => $abonnement,
    ]);
}

#[Route('/{id}/edit', name:'app_abonnement_edit', methods:['GET', 'POST'])]
function edit(Request $request, Abonnement $abonnement, AbonnementRepository $abonnementRepository): Response
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

#[Route('/{id}', name:'app_abonnement_delete', methods:['POST'])]
function delete(Request $request, Abonnement $abonnement, AbonnementRepository $abonnementRepository): Response
    {
    if ($this->isCsrfTokenValid('delete' . $abonnement->getId(), $request->request->get('_token'))) {
        $abonnementRepository->remove($abonnement, true);
    }

    return $this->redirectToRoute('app_abonnement_index', [], Response::HTTP_SEE_OTHER);
}
#[Route('/enable/{id}', name:'app_abonnement_enable', methods:['GET'])]
function enable(AbonnementRepository $abonnementRepository,$id): Response
 {  
    $abonnementRepository->changeEtat(true,$id);
    return $this->redirectToRoute('app_abonnement_index');
}
private $entityManager;

function __construct(EntityManagerInterface $entityManager)
    {
    $this->entityManager = $entityManager;
}

}
