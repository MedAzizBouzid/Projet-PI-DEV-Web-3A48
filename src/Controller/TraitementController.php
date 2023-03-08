<?php

namespace App\Controller;

use App\Entity\Activite;
use App\Entity\Commande;
use App\Entity\Notification;
use App\Entity\Panier;
use App\Entity\RendezVous;
use App\Entity\Salle;
use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Repository\AbonnementRepository;
use App\Repository\ActiviteRepository;
use App\Repository\CalendrierRepository;
use App\Repository\CommandeRepository;
use App\Repository\NotificationRepository;
use App\Repository\OffresRepository;
use App\Repository\PanierRepository;
use App\Repository\PassRepository;
use App\Repository\RendezVousRepository;
use App\Repository\ServiceRepository;
use App\Repository\UserRepository;
use DateTimeImmutable;
use Doctrine\ORM\EntityManagerInterface;
use Sabberworm\CSS\Value\Size;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Validator\Constraints\Length;

class TraitementController extends AbstractController
{
    // ***************------------------Home page-------------************************

    #[Route('/home', name: 'app_Front_index')]
    public function index(ActiviteRepository $activiteRepository,UserRepository $userRepository
    ,OffresRepository $offresRepository,ServiceRepository $serviceRepository): Response
    {

        $activite=$activiteRepository->findAll();
        $offres=$offresRepository->findAll();
        $service=$serviceRepository->findAll();
        $coach=$userRepository->findAllUser('["ROLE_COACH"]');
        return $this->render('front/index.html.twig', [
            'activite' => $activite,
            'offres' => $offres,
            'service' => $service,
            'coach' => $coach,
        ]);
    }
    // ***************------------------Home page-------------************************
    #[Route('/random', name: 'app_random')]
    public function random(): Response
    {
        $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $longueurMax = strlen($caracteres);
        $chaineAleatoire = '';
        for ($i = 0; $i < 6; $i++)
        {
        $chaineAleatoire .= $caracteres[rand(0, $longueurMax - 1)];
        }
       
        return $this->render('front/random.html.twig', [
            'random' => $chaineAleatoire,
        ]);
    }
    #[Route('/administration', name: 'app_back_index')]
    public function indexB(NotificationRepository $notificationRepository): Response
    {
        return $this->render('back/index.html.twig', [
            'controller_name' => 'TraitementController',
            'notif' => $notificationRepository->findAll(),
        ]);
    }
    #[Route('/home', name: 'app_home')]
    public function home(): Response
    {
        return $this->render('front/index.html.twig', [
            
        ]);
    }
    #[Route('/team', name: 'app_team')]
    public function team(UserRepository $userRepository): Response
    {
        return $this->render('front/team.html.twig', [
            'users' => $userRepository->findAllUser('["ROLE_COACH"]'),

        ]);
    }
    #[Route('/404', name: 'app_err')]
    public function err(): Response
    {
        return $this->render('front/404.html.twig', [
            
        ]);
    }
//   *************************************
    #[Route('/profile/{id}', name: 'app_profile')]
    public function profile(User $user,PassRepository $passRepository,PanierRepository $panierRepository,
    CommandeRepository $commandeRepository,AbonnementRepository $abonnementRepository,CalendrierRepository $calendrierRepository): Response
    {
        $panier = new Panier();
        $panier=$panierRepository->findByClientId($user->getId());
        $PanierId=[];
        $commande=[];
        $cmd=[];
        // realtion usser coach 
        $calendar=$calendrierRepository->findCalendarByCoach($user->getId());
//°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
  //accéder au repo calendrier
   // créer un tableau Json a fin de stocker les données 
   
  $rdvs = [];
  foreach($calendar as $event){
       $rdvs[] = [
          'id' => $event->getId(),    
          'start' => $event->getStart()->format('Y-m-d H:i:s'),
          'end' => $event->getEnd()->format('Y-m-d H:i:s'),
          'title' =>$event->getSalla()->getNom()."\n". $event->getActivite(),
          'description' => $event->getDescription(),
          // 'activite' => $event->getActivite(),

          'backgroundColor' => $event->getBackgroundColor(),
          'borderColor' => $event->getBorderColor(),
          'textColor' => $event->getTextColor(),

       ];

  }
  $data = json_encode($rdvs);

        //********************************** */
        // $commande = new Commande();
         foreach($panier as $p){
           $PanierId[] = $p->getId();

         }
         foreach($PanierId as $pId){
           $commande[]=$commandeRepository->findByPanierId($pId);
         }
        for ($i=0; $i < count($commande); $i++) { 
            # code...
            $cmd[]=$commande[$i][0];
        }
        // dd($cmd);
        return $this->render('front/profileUser.html.twig', [
            'user' => $user,
            'data' => $data,
            'commandes'=>$cmd,
            'passes' => $passRepository->findPassByIdClient($user->getId()),
            'abonnements'=>$abonnementRepository->findByEmail($user->getEmail())
        ]);
    }
    //   *************************************

    #[Route('/Edit/{id}', name: 'app_profileEdit')]
    public function profileEdit(Request $request, User $user, UserRepository $userRepository,SluggerInterface $slugger): Response
    {$form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $image = $form->get('image')->getData();

            // this condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($image) {
                $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $image->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $image->move(
                        $this->getParameter('user_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'image$photoname' property to store the PDF file name
                // instead of its contents
                $user->setImage($newFilename);
            }
            $userRepository->save($user, true);

            return $this->redirectToRoute('app_profile', ['id'=>$user->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('front/editUser.html.twig', [
            'user' => $user,
            'form' => $form, 
        ]);
    }
    #[Route('/{id}', name: 'app_userD', methods: ['POST'])]
    public function delete(Request $request, User $user, UserRepository $userRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $userRepository->remove($user, true);
        }

        return $this->redirectToRoute('app_login', [], Response::HTTP_SEE_OTHER);
    }
    /************************act************************************** */
    #[Route('/Show_salle_front', name: 'Show_salle_front')]
    public function Show_salle_front(EntityManagerInterface $am): Response
    {
       
        $repo=$am->getRepository(Salle::class);
        $salle=$repo->findAll();
        
        return $this->render('front/mesSalles.html.twig', [
            'salle' => $salle,
        ]);
    }
    #[Route('/showactiviteinfront', name: 'show_activite_infront')]
    public function showSalleinfront(): Response
    {
        return $this->render('front/team.html.twig', [
            'controller_name' => 'TraitementController',
        ]);
    }
    #[Route('/cancel/{id}', name: 'app_rendez_vous_cancel', methods: ['POST'])]
    public function cancel(Request $request, RendezVous $rendezVou, RendezVousRepository $rendezVousRepository,NotificationRepository $notificationRepository): Response
    {
        $datee= new DateTimeImmutable();
        // $client= $rendezVou->getClient()->getNom();
        if ($this->isCsrfTokenValid('delete'.$rendezVou->getId(), $request->request->get('_token'))) {
            $rendezVousRepository->remove($rendezVou, true);
            $Notifica=new Notification();
            $Notifica->setMessage("Appointement has been Canceled ");
            $Notifica->setDateeAt($datee);
            $Notifica->setRdv($rendezVou);
            $notificationRepository->save($Notifica,true);
        }

        return $this->redirectToRoute('app_profil', [], Response::HTTP_SEE_OTHER);
}
}