<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class UserMobileController extends AbstractController
{
    #[Route('/signupMobile', name: 'app_usignupMobile')]
    public function signupMobile(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
    {
        if (!filter_var($request->get('email'), FILTER_VALIDATE_EMAIL)) {
            return new Response("email invalid.");
        }

        $user = new User();
       
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $request->get('password')
                )
            );
            $user->setImage( $request->get('image'));
            $user->setNom($request->get('nom'));
            $user->setPrenom($request->get('prenom'));
            $user->setUserName($request->get('username'));
            $user->setNumTel($request->get('numTel'));
            $user->setEmail($request->get('email'));
         

           try{

               $entityManager->persist($user);
               $entityManager->flush();

               return new JsonResponse("Account created",200);
           }catch (Exception $ex){
            return new Response("execption ".$ex->getMessage());
           }
    

       
        
    }

     #[Route(path: '/signinMobile', name: 'app_signinMobile')]
    public function signinMobile(Request $request,UserRepository $userRepository, SerializerInterface $serializerInterface): Response
    {
        $email=$request->get('email');
                    
        $password=$request->get('password');
        $user=$userRepository->findOneByEmail($email);
        if($user){
            if(password_verify($password,$user->getPassword())){
                $json=$serializerInterface->serialize($user,'json');
                return new Response($json);
            }else{
                return new Response("password not found");

            }
        }else{
            return new Response("user not found");

        }
        

    }
#[Route('/editUserMobile', name: 'app_editUserMobile')]
    public function editUserMobile(Request $request, UserPasswordHasherInterface $userPasswordHasher, UserRepository $userRepository): Response
    {
        $id=$request->get("id");
        $user = $userRepository->find($id);

        // if($request->files->get("photo")!= null){
        //     $file =$request->files->get("photo");
        //     $fileName=$file->getClientOriginalName();
        //     $file->move($fileName);
        //     $user->setImage($fileName);

        // }
    //    $user->setImage($fileName);

            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $request->get('password')
                )
            );
            $user->setNom($request->get('nom'));
            $user->setPrenom($request->get('prenom'));
            $user->setUserName($request->get('username'));
            $user->setNumTel($request->get('numTel'));
            $user->setEmail($request->get('email'));
         

           try{

               $userRepository->save($user,true);

               return new JsonResponse("Account updated successfuly",200);
           }catch (Exception $ex){
            return new Response("fail ".$ex->getMessage());
           }
   
    }
     #[Route('/deleteAccount', name: 'app_user_deleteAccount')]
    public function deleteAccount(Request $request, UserRepository $userRepository): Response
    {
        $id=$request->get("id");
        $user=$userRepository->find($id);
            try {

                $userRepository->remove($user, true);

                return new JsonResponse("Account deleted successfuly", 200);
            } catch (Exception $ex) {
                return new Response("fail " . $ex->getMessage());
            }


    }
 }

