<?php

namespace App\Controller;
// require __DIR__ . '/vendor/autoload.php';


use App\Entity\Pass;
use App\Entity\User;
use App\Form\PassType;
use DateTimeImmutable;
use Twilio\Rest\Client;
use App\Entity\Evenement;
use App\Repository\PassRepository;
use App\Repository\UserRepository;
use App\Repository\EvenementRepository;
use Symfony\Contracts\EventDispatcher\Event;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/pass')]
class PassController extends AbstractController
{
    #[Route('/', name: 'app_pass_index', methods: ['GET'])]
    public function index(PassRepository $passRepository): Response
    {
        return $this->render('back/pass/index.html.twig', [
            'passes' => $passRepository->findAll(),
        ]);
    }
//afficher les passes d'un evenement back
    #[Route('/event/{id}', name: 'app_pass_event', methods: ['GET'])]
    public function index_pass_event(PassRepository $passRepository,$id): Response
    {
        return $this->render('back/pass/index.html.twig', [
            'passes' => $passRepository->findPassByIdEvent($id),
        ]);
    }


    //afficher les pass d'un client en front
    #[Route('/mesPass', name: 'app_pass_index_mesPass', methods: ['GET'])]
    public function mesPass(PassRepository $passRepository,Request $request): Response
    {
        // $user=new User();
       $user=$this->getUser();
       
        return $this->render('front/mes-Pass.html.twig', [
            'passes' => $passRepository->findPassByIdClient($user->getId()),
        ]);
    }




    #[Route('/new', name: 'app_pass_new', methods: ['GET', 'POST'])]
    public function new(Request $request, PassRepository $passRepository): Response
    {
        $pass = new Pass();
        $form = $this->createForm(PassType::class, $pass);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $passRepository->save($pass, true);

            return $this->redirectToRoute('app_pass_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('pass/new.html.twig', [
            'pass' => $pass,
            'form' => $form,
        ]);
    }

    #[Route('/generate-qr-code/{id}', name: 'app_qr_code')]
    public function generateQrCodeAction(Pass $pass): Response
    {
        // Récupérer les informations de l'objet Pass
        $nom_client = $pass->getClient()->getNom();
        $nom_event = $pass->getEvent()->getNom();
        $createdAt = $pass->getEvent()->getBeginAt();

       
                $qrCodeContent = $nom_client . ' ' . $nom_event . ' ' . $createdAt->format('Y-m-d H:i:s');

      

        return $this->render('front/qr_code.html.twig', [
            'qrCodeImage' =>  $qrCodeContent,
        ]);
    }


//confirmer reservation== ajout d'un pass a partir du front
    #[Route('/new_front/{id_event}', name: 'app_pass_new_front', methods: ['GET', 'POST'])]
    public function newF(PassRepository $passRepository,$id_event,Request $request, EvenementRepository $eventRepo, UserRepository $userRepo): Response
    {   
     

        $event=new Evenement();
        $event=$eventRepo->find($id_event);
        if (! $event->getCapacite() > 0) {
            return $this->redirectToRoute('app_pass_reservation', ['id_event'=>$id_event], Response::HTTP_SEE_OTHER);
        } 
        

//         $sid    = "ACe5e12645de4fa19a9d817da822c48552";
// $token  = "4890e95a4b67ff9d7f2d2127ed72ddb5";
// $twilio = new Client($sid, $token);





        $pass = new Pass();
        $client=new User();
        $event->setCapacite($event->getCapacite()-1);
        $user = $this->getUser();

        $pass->setEvent($event);
        $pass->setClient($user);
        $dateObj = new DateTimeImmutable();

        $pass->setCreatedAt($dateObj);
                

            $passRepository->save($pass, true);

//             $numeroTelephone=$client->getNumTel();
//             $numeroTelephoneEnString = (string)$numeroTelephone ; // conversion en chaîne de caractères
//             $receiver_number = '+216' . $numeroTelephoneEnString; // concaténation avec la chaîne '+216'
//             $client_name=$client->getNom();
// $event_name=$event->getNom();
// $event_place=$event->getLieu();
// $event_time=$event->getBeginAt();
// 	$body="Hello Mr ". $client_name ." you have just get a pass for our evenet ". $event_name . " who take place in ". $event_place;

	
    
            // $message = $twilio->messages
            //       ->create('+21626181201', // to
            //                array(
            //                    "body" => $body,
            //                    "from" => "+12697956309"
            //                )
            //       );


            // $callParams = [
            //     'url' => 'http://127.0.0.1:8000/evenement/call', // URL to TwiML instructions for the call
            //     'to' =>'+21626181201' , // Phone number to call
            //     'from' => '+12697956309', // Your Twilio phone number
            // ];
         
            // $call = $twilio->calls
            // ->create("+21626181201", // to
            //          "+12697956309", // from
            //          ["url" => "http://127.0.0.1:8000/evenement/call"]
            // );
            return $this->redirectToRoute('app_evenement_index_front', [], Response::HTTP_SEE_OTHER);
       

       
    }

    #[Route('/detail_Reservation/{id_event}', name: 'app_pass_reservation', methods: ['GET'])]
    public function detail(EvenementRepository $evenementRepository,$id_event,UserRepository $userRepo): Response
    {
        $event= new Event();
        $client=new User();
        $id=1;
        $event=$evenementRepository->find($id_event);
        $currentDate = new DateTimeImmutable();
        $currentDate->format('Y-m-d H:i:s');
        $client=$userRepo->find($id);
        if($this->getUser()){

            return $this->render('front/confirmer-pass.html.twig', [
                'event' => $event,
                'date'=>$currentDate,
                'client'=>$client,
            ]);
        }else{
            return $this->redirectToRoute('app_login');

        }
    }

    #[Route('/{id}', name: 'app_pass_show', methods: ['GET'])]
    public function show(Pass $pass): Response
    {
        return $this->render('back/pass/show.html.twig', [
            'pass' => $pass,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_pass_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Pass $pass, PassRepository $passRepository): Response
    {
        $form = $this->createForm(PassType::class, $pass);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $passRepository->save($pass, true);

            return $this->redirectToRoute('app_pass_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('pass/edit.html.twig', [
            'pass' => $pass,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_pass_delete', methods: ['POST'])]
    public function delete(Request $request, Pass $pass, PassRepository $passRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pass->getId(), $request->request->get('_token'))) {
            $passRepository->remove($pass, true);
        }

        return $this->redirectToRoute('app_pass_index', [], Response::HTTP_SEE_OTHER);
    }
}
