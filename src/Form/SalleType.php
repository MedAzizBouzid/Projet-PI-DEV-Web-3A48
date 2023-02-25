<?php

namespace App\Form;

use App\Entity\Activite;
use App\Entity\Salle;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
 use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
 use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

use Symfony\Component\Validator\Constraints\File;
 use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class SalleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom',TextType::class, [
                'constraints' => [
                    new NotBlank(),
                    new Length(['min' => 5,'max' => 20]),
                ],
             ])
            ->add('lieu',TextType::class, [
                'constraints' => [
                    new NotBlank([
                        'message'=>'Attention ! Ce champ ne doit pas étre vide '
                    ]),
                    new Length(['min' => 3, 
                     
                    'max' => 50,
                  ]),
                    
                ],
             ])
            ->add('telephone',NumberType::class, [
                'constraints' => [
                    new NotBlank([
                        'message'=>'Attention ! Ce champ ne doit pas étre vide '
                    ]),
                    new Length(['min' => 8, 
                    'max' => 8,
 
                  ]),
                    
                ],
             ])
            ->add('email', EmailType::class, [
                'constraints' => [
                    new NotBlank([
                        'message'=>'Attention ! Ce champ ne doit pas étre vide '
                    ]),
                    //  new UniqueEntity([
                    //     'fields' => 'email',
                    //     'message' => 'Cette adresse email est déjà utilisée.'   ]),
                    //  new Email([
                    //     'message'=>'La fome de cet email est invalide veuillez réesayer'
                        
                    // ]),
                    // new Unique(['entity' => 'App\Entity\Salle', 'field' => 'email']),
                ],
             ])
            ->add('superficie',TextType::class, [
                    'constraints' => [
                    new NotBlank([
                        'message'=>'Attention ! Ce champ ne doit pas étre vide '
                    ]),
                 ],
             ])
            ->add("description",TextType::class, [
                'constraints' => [
                new NotBlank([
                    'message'=>'Attention ! Ce champ ne doit pas étre vide '
                ]),
             ],
         ])
         ->add('cours', EntityType::class, [
            'class' => Activite::class,
            'choice_label' => 'nom',
            'label' => 'cours',
            'multiple' => true,
            'required' => true,
        ])
        //  ->add('cours',EntityType::class,['class' =>Activite::class,
        //     'choice_label'=>'nom',
        //     'label'=>'cours',
        //     'multiple'=>true ,
        //     'required' => true,
        //     ])
        //  ->add('cours', EntityType::class, array(
        //     // query choices from this entity
        //     'class' => cours::class,
        //     'choice_label' => 'cours.nom',
        //     'multiple' => true,
        //     'expanded' => true,
        //     ))
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
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Salle::class,
        ]);
    }
}
