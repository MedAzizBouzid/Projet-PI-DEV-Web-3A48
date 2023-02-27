<?php

namespace App\Form;

use App\Entity\Abonnement;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\offres;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\TextType;







class AbonnementTypeFront extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        // ->add('Name',TextType::class,[
        //     'constraints'=>[
        //         new Assert\Regex([
        //             'pattern' => '/^[a-zA-Z\s]*$/',
        //             'message' => 'Le champ nom ne peut pas contenir de chiffres.'
        //             ]),
        //     ]
        //         ])
        //     ->add('Email',
        //     EmailType::class, [
             
        //         'attr' => [
        //             'class' => 'form-control',
        //             'placeholder' => 'Entrez votre adresse email'
        //         ]
        //     ]
           
        //     )
            ->add('salle',  
            
            )
            ->add('MPayement',
                
                ) ->add('DateD')
                ->add('offre', EntityType::class, [
                    // looks for choices from this entity
                    'class' => Offres::class,
                    // uses the User.username property as the visible option string
                    'choice_label' => 'id',
                    // used to render a select box, check boxes or radios
                    'multiple' => false,
                    'expanded' => false,
                ])
              

                

             
                
           
           
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Abonnement::class,
        ]);
    }
}