<?php

namespace App\Form;

use App\Entity\Vote;
use App\Entity\Joueur;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VoteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            //->add('date')
            ->add('noteVote', ChoiceType::class, [
                'choices' => [
                    '1' => 1,
                    '2' => 2,
                    '3' => 3,
                    '4' => 4,
                    '5' => 5
                ],
                // 'multipe' => false,
                // 'expanded' => true
            ])
            ->add('joueur', EntityType::class, [
                'class' => Joueur::class,
                'choice_label' => 'nom',
                'expanded' => true,
                'multiple' => false,

            ])
            ->add('Vote', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Vote::class,
        ]);
    }
}
