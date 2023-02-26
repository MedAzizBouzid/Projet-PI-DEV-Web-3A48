<?php

namespace App\Form;

use App\Entity\Abonnement;
use App\Entity\offres;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Regex;

class AbonnementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Name', TextType::class, [
                'constraints' => [
                    new Regex([
                        'pattern' => '/^[a-zA-Z\s]*$/',
                        'message' => 'Le champ nom ne peut pas contenir de chiffres.',
                    ]),
                ],
            ])

            ->add('Email')
            ->add('salle', ChoiceType::class, array(
                'choices' => array(
                    'Ariana' => 'Ariana',
                    'Nasser' => 'Nasser',
                    'Lac' => 'Lac'))
            )
            ->add('MPayement',
                ChoiceType::class, array(
                    'choices' => array(
                        'par carte' => 'par carte',
                        'espéce' => 'espéce',
                    ))

            )->add('DateD')
            ->add('offre', EntityType::class, [
                // looks for choices from this entity
                'class' => Offres::class,
                // uses the User.username property as the visible option string
                'choice_label' => 'categ.name',
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
