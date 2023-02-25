<?php

namespace App\Form;

use App\Entity\Activite;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\Choice;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ActiviteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom',ChoiceType::class,[ 
                'multiple' => false,
                'expanded' => false,
                'choices' => [
                    'KB WORKOUT' => 'KB WORKOUT',
                    'CROSS FORCE' => 'CROSS FORCE',
                    'BODYATTACK' => 'BODYATTACK',
                    'BODYBALANCE' => 'BODYBALANCE',
                   
                    'ABDOS FESSIERS' => 'ABDOS FESSIERS',


                ],
             ])	

            ->add('categorie',ChoiceType::class,[ 
                'multiple' => false,
                'expanded' => false,
                'choices' => [
                    'Cardio' => 'Cardio',
                    'Force' => 'Force',
                    'Training' => 'Training',
                    'Souplesse' => 'Souplesse',

                ],
             ])	
             
            ->add('materiel',ChoiceType::class,[ 
                'multiple' => false,
                'expanded' => false,
                'choices' => [ 
                    'Aucun' => 'Aucun',
                    'Kettlebells, Slam Ball, Disques, Cordes…' => 'Kettlebells, Slam Ball, Disques, Cordes…',
                    'Kettlebells' => 'Kettlebells',
                    ' gants de boxe comme option' => 'gants de boxe comme option',
                    'Un step, une barre et un jeu de poids' => 'Un step, une barre et un jeu de poids',
                    'Vélo RPM,' => 'Vélo RPM',
                    ' Un tapis, poids légers' => 'Un tapis, poids légers',

                ],
             ])	

            ->add('intensite',TextType::class, [
                'constraints' => [
                new NotBlank(),
             ],
         ])
            ->add('GRPmusculaire',ChoiceType::class,[ 
                'multiple' => false,
                'expanded' => false,
                'choices' => [
                    'corps complet' => 'corps complet',
                     
                ],
             ])

            ->add('tenue',ChoiceType::class,[ 
                'multiple' => false,
                'expanded' => false,
                'choices' => [
                    'Vêtements confortables' => 'Vêtements confortables',
                    'Vêtements confortables et chaussures de sport' => 'Vêtements confortables et chaussures de sport',
                    ' Short cycliste rembourré, 
                    Chaussures de sport classiques' => 'Short cycliste rembourré,Chaussures de sport classiques ',
                ],
             ])


            ->add('recomendation',TextType::class, [
                'constraints' => [
                new NotBlank(),
             ],
         ])
         ->add('image', FileType::class, [
            'label' => 'Image du Produit (Des fichiers images seulement)',

            // unmapped means that this field is not associated to any entity property
            'mapped' => false,

            // make it optional so you don't have to re-upload the PDF file
            // every time you edit the Product details
            'required' => false,

            // unmapped fields can't define their validation using annotations
            // in the associated entity, so you can use the PHP constraint classes
            'constraints' => [
                new File([
                    'maxSize' => '1024k',
                    'mimeTypes' => [
                        'image/gif',
                        'image/jpeg',
                        'image/jpg',
                    ],
                    'mimeTypesMessage' => 'Please upload a valid Image ',
                ])
            ],
        ])
             
              
            



            // ->add('image', FileType::class, [
            //     'label' => 'Choisir une image',
            //     'required' => false,
             
            // ->add('image', FileType::class, [
            //     'label' => 'Image (image uniquement)',

            //     // unmapped means that this field is not associated to any entity property
            //     'mapped' => false,

            //     // make it optional so you don't have to re-upload the PDF file
            //     // every time you edit the Product details
            //     'required' => false,

            //     // unmapped fields can't define their validation using annotations
            //     // in the associated entity, so you can use the PHP constraint classes
            //     'constraints' => [
            //         new File([
            //             'maxSize' => '1024k',
            //             'mimeTypes' => [
            //                 'image/gif',
            //                 'image/jpeg',
            //                 'image/jpg',

            //             ],
            //             'mimeTypesMessage' => 'Please upload a valid Image ',
            //         ])
            //     ],
            // ])
    
    ;
    }

    //    public function configureOptions(OptionsResolver $resolver): void
    // {
    //     $resolver->setDefaults([
    //         'data_class' => Salle::class,
    //     ]);
    // }
        
    }

