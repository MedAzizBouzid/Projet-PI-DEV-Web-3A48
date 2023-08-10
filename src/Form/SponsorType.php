<?php

namespace App\Form;

use App\Entity\Sponsor;
use App\Entity\Evenement;
use App\Entity\TypeContrat;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SponsorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('logo')
            ->add('email')
            ->add('type', EntityType::class, [
                // looks for choices from this entity
                'class' => TypeContrat::class,
                // uses the User.username property as the visible option string
                'choice_label' => 'typeC',
                // used to render a select box, check boxes or radios
                'multiple' => false,
                'expanded' => false,
            ])
            ->add('event', EntityType::class, [
                // looks for choices from this entity
                'class' => Evenement::class,
                // uses the User.username property as the visible option string
                'choice_label' => 'nom',
                // used to render a select box, check boxes or radios
                'multiple' => false,
                'expanded' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Sponsor::class,
        ]);
    }
}
