<?php

namespace App\Controller;

use App\Entity\Salle;
use App\Form\SalleType;
use App\Repository\CalendrierRepository;
use App\Repository\SalleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/salle')]
class SalleController extends AbstractController
{
    #[Route('/', name:'app_salle_index', methods:['GET', 'POST'])]
function index(Request $request, SalleRepository $salleRepository, EntityManagerInterface $em, SluggerInterface $slugger): Response
    {

    $salle = new Salle();
    $form = $this->createForm(SalleType::class, $salle);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $image = $form->get('image')->getData();

        if ($image) {
            $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            // this is needed to safely include the file name as part of the URL
            $safeFilename = $slugger->slug($originalFilename);
            $newFilename = $safeFilename . '-' . uniqid() . '.' . $image->guessExtension();

            // Move the file to the directory where brochures are stored
            try {
                $image->move(
                    $this->getParameter('activite_directory'),
                    $newFilename
                );
            } catch (FileException $e) {
                // ... handle exception if something happens during file upload
            }

            // updates the 'photo$photoname' property to store the PDF file name
            // instead of its contents
            $salle->setImage($newFilename);
        }
        $salleRepository->save($salle, true);

        return $this->redirectToRoute('app_salle_index', [], Response::HTTP_SEE_OTHER);
    }

    return $this->renderForm('back/table_salle.html.twig', [
        'salles' => $salleRepository->findAll(),
        'form' => $form,
    ]);

}

// _______________________________________________________________________________
#[Route('/chercher_salle', name:'chercher_salle')]
function chercher_student(EntityManagerInterface $em, Request $request, SalleRepository $repo)
    {
    $r = $request->query->get('dhia');
    if ($r != "") {
        $req = $em->createQuery("select c from App\Entity\Salle c   where c.lieu=:t ");

        $req->setParameter('t', $r);
        $salles = $req->getResult();

    } else {
        $salles = $repo->findAll();
    }
    return $this->render('back/table.html.twig', ['salles' => $salles]);
}
// _______________________________________________________________________________
#[Route('/new', name:'app_salle_new', methods:['GET', 'POST'])]
function new (Request $request, SalleRepository $salleRepository, SluggerInterface $slugger): Response {
    $salle = new Salle();
    $form = $this->createForm(SalleType::class, $salle);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $image = $form->get('image')->getData();

        if ($image) {
            $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            // this is needed to safely include the file name as part of the URL
            $safeFilename = $slugger->slug($originalFilename);
            $newFilename = $safeFilename . '-' . uniqid() . '.' . $image->guessExtension();

            // Move the file to the directory where brochures are stored
            try {
                $image->move(
                    $this->getParameter('activite_directory'),
                    $newFilename
                );
            } catch (FileException $e) {
                // ... handle exception if something happens during file upload
            }

            // updates the 'photo$photoname' property to store the PDF file name
            // instead of its contents
            $salle->setImage($newFilename);
        }
        $salleRepository->save($salle, true);

        return $this->redirectToRoute('app_salle_index', [], Response::HTTP_SEE_OTHER);
    }

    // return $this->renderForm('salle/new.html.twig', [
    return $this->renderForm('back/form.html.twig', [
        'salle' => $salle,
        'form' => $form,
    ]);
}
// _______________________________________________________________________________

#[Route('/new1', name:'app_salle_new_ajax', methods:['GET', 'POST'])]
function new1(Request $request, SalleRepository $salleRepository, SluggerInterface $slugger): Response
    {
    $salle = new Salle();
    $form = $this->createForm(SalleType::class, $salle);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $image = $form->get('image')->getData();

        if ($image) {
            $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            // this is needed to safely include the file name as part of the URL
            $safeFilename = $slugger->slug($originalFilename);
            $newFilename = $safeFilename . '-' . uniqid() . '.' . $image->guessExtension();

            // Move the file to the directory where brochures are stored
            try {
                $image->move(
                    $this->getParameter('activite_directory'),
                    $newFilename
                );
            } catch (FileException $e) {
                // ... handle exception if something happens during file upload
            }

            // updates the 'photo$photoname' property to store the PDF file name
            // instead of its contents
            $salle->setImage($newFilename);
        }
        $salleRepository->save($salle, true);

        return $this->redirectToRoute('app_salle_index', [], Response::HTTP_SEE_OTHER);
    }

    // return $this->renderForm('salle/new.html.twig', [
    return $this->renderForm('back/AjaxForm.html.twig', [
        'salle' => $salle,
        'form' => $form,
    ]);
}
// _______________________________________________________________________________

#[Route('/{id}', name:'app_salle_show', methods:['GET'])]
function show(Salle $salle): Response
    {
    return $this->render('back/show_salle.html.twig', [
        'salle' => $salle,
    ]);
}
// _________Start___Details Calendrier In front ___________________________________________________________________

#[Route('/{id}/front', name:'app_salle_show_front', methods:['GET'])]
function show_fornt(Salle $salle, CalendrierRepository $calendrierRepository): Response
    {
    $events = $calendrierRepository->findcalendarBySalle($salle->getId());
    $rdvs = [];
    foreach ($events as $event) {
        $rdvs[] = [
            'id' => $event->getId(),
            'start' => $event->getStart()->format('Y-m-d H:i:s'),
            'end' => $event->getEnd()->format('Y-m-d H:i:s'),
            'title' => $event->getActivite(),
            'description' => $event->getDescription(),
            'backgroundColor' => $event->getBackgroundColor(),
            'borderColor' => $event->getBorderColor(),
            'textColor' => $event->getTextColor(),
        ];
    }
    $data = json_encode($rdvs);
    return $this->render('front/class_details.html.twig', [
        'salle' => $salle,
        'data' => $data,
    ]);
}
// _________End___Details Calendrier In front ___________________________________________________________________

#[Route('/{id}/edit', name:'app_salle_edit', methods:['GET', 'POST'])]
function edit(Request $request, Salle $salle, SalleRepository $salleRepository, SluggerInterface $slugger): Response
    {
    $form = $this->createForm(SalleType::class, $salle);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $image = $form->get('image')->getData();

        if ($image) {
            $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            // this is needed to safely include the file name as part of the URL
            $safeFilename = $slugger->slug($originalFilename);
            $newFilename = $safeFilename . '-' . uniqid() . '.' . $image->guessExtension();

            // Move the file to the directory where brochures are stored
            try {
                $image->move(
                    $this->getParameter('activite_directory'),
                    $newFilename
                );
            } catch (FileException $e) {
                // ... handle exception if something happens during file upload
            }

            // updates the 'photo$photoname' property to store the PDF file name
            // instead of its contents
            $salle->setImage($newFilename);
        }
        $salleRepository->save($salle, true);

        return $this->redirectToRoute('app_salle_index', [], Response::HTTP_SEE_OTHER);
    }

    // return $this->renderForm('salle/edit.html.twig', [

    return $this->renderForm('back/form.html.twig', [

        'salle' => $salle,
        'form' => $form,
    ]);
}
// _______________________________________________________________________________

#[Route('/{id}', name:'app_salle_delete', methods:['POST'])]
function delete(Request $request, Salle $salle, SalleRepository $salleRepository): Response
    {
    if ($this->isCsrfTokenValid('delete' . $salle->getId(), $request->request->get('_token'))) {
        $salleRepository->remove($salle, true);
    }

    return $this->redirectToRoute('app_salle_index', [], Response::HTTP_SEE_OTHER);
}

// _______________Afficher les salles dans la partie front________________________________________________________________

// _______________________________________________________________________________

#[Route('/Show_salle', name:'Show_salle')]
function showstudent(EntityManagerInterface $am): Response
    {

    $repo = $am->getRepository(Salle::class);
    $result = $repo->findAll();

    return $this->render('back/table.html.twig', [
        'result' => $result,
    ]);
}
// _______________________________________________________________________________

#[Route('/delete/{id}', name:'deleteevent')]
function deleteevent($id, ManagerRegistry $mr, SalleRepository $repo): Response
    {
    $st = $repo->find($id); //select * from student wehere id=id
    $em = $mr->getManager();
    $em->remove($st);
    $em->flush();
    return $this->redirectToRoute('app_salle_index');
    // return new Response('removed');
}
// _______________________________________________________________________________
#[Route('/find_Salle', name:'find_Salle')]
function findSalle(EntityManagerInterface $em, Request $request, SalleRepository $repo)
    {
    $r = $request->query->get('findbyname');
    if ($r != "") {
        $req = $em->createQuery("select c from App\Entity\Salle c   where c.id=:t ");

        $req->setParameter('t', $r);
        $result = $req->getResult();

        //  $req=$em->createQuery("select c from App\Entity\Salle c   where c.id=:t ");
        // // $req=$em->createQuery("select c from App\Entity\Salle c    where c.id=:t ");
        // $req->setParameter('t',$r);
        //  $result=$req->getResult();
        // $salles = $repo->createQueryBuilder('s')
        // ->where('s.lieu LIKE :r')
        // ->setParameter('r', '%'.$r.'%')
        // ->getQuery()
        // ->getResult();

    } else {
        $salles = $repo->findAll();
    }
    return $this->render('back/table.html.twig', [
        'salles' => $salles]);
}
// _______________________________________________________________________________

// _______________________________________________________________________________

#[Route('/addnew', name:'addnew_salle')]

function addnewsalle(Request $request, EntityManagerInterface $entityManager): Response
    {
    $salle = new Salle();
    $form = $this->createForm(SalleType::class, $salle);

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager->persist($salle);
        $entityManager->flush();

        $this->addFlash('success', 'La salle a été ajoutée avec succès.');

        return $this->redirectToRoute('app_salle_index');
    }

    return $this->renderForm('back/table.html.twig', [
        'salle' => $salle,
        'form' => $form,
    ]);
}
// _______________________________________________________________________________

#[Route('/ajouter_salle', name:'app_salle')]
function ajouter_salle(Request $request, EntityManagerInterface $entityManager, SalleRepository $salleRepository): Response
    {
    $nom = $request->query->get('nom');
    $lieu = $request->query->get('lieu');
    $telephone = $request->query->get('telephone');
    $email = $request->query->get('email');
    $superficie = $request->query->get('superficie');
    $description = $request->query->get('description');

    if (($nom != "") && ($lieu != "") && ($telephone != "") && ($email != "") && ($superficie != "") && ($description != "")) {
        $salle = new Salle();
        $salle->setNom($nom);
        $salle->setLieu($lieu);
        $salle->setTelephone($telephone);
        $salle->setEmail($email);
        $salle->setSuperficie($superficie);
        $salle->setDescription($description);

        $entityManager->persist($salle);
        $entityManager->flush();
    }

    return $this->redirectToRoute("app_salle_index");
}
}
