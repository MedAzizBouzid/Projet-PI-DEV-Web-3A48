<?php

namespace App\Form;

use App\Entity\Evenement;
use App\Entity\TypeEvent;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;

class EvenementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom',TextType::class, [
                
                'constraints' => [
                    new NotBlank(),
                    new Regex([
                        'pattern'=>'/^[a-zA-Z]+$/',
                        'message'=>'le nom doit contenir que des caracteres'
                    
                ]),

                ]
                ])
            ->add('lieu',TextType::class, [
                
                'constraints' => [
                    new NotBlank(),
                    new Regex([
                        'pattern'=>'/^[a-zA-Z0-9 ]+$/',
                        'message'=>'le lieux doit contenur que des nombres et caracteres'
                    
                ]),

                ]
                ])
            ->add('beginAt')
            ->add('finishAt')
            ->add('description',TextType::class, [
                
                'constraints' => [
                    new NotBlank(),
                    

                ]
                ])
            ->add('capacite',NumberType::class,[
                
                'constraints' => [
                    new NotBlank([
                        'message' => 'ce champ ne doit pas etre vide',
                    ]),
                    
                    new Regex([
                        'pattern'=>'/^[0-9]+$/',
                        'message'=>'veuillez entrer que des nombres'
                    
                ]),
            ]])
            ->add('prix')
            ->add('type', EntityType::class, [
                // looks for choices from this entity
                'class' => TypeEvent::class,
                // uses the User.username property as the visible option string
                'choice_label' => 'typeE',
                // used to render a select box, check boxes or radios
                'multiple' => false,
                'expanded' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Evenement::class,
        ]);
    }
}
