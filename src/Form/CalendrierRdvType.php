<?php

namespace App\Form;

use App\Entity\CalendrierRdv;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CalendrierRdvType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre')
            ->add('debut')
            ->add('fin')
            ->add('description')
            ->add('fond_couleur',ColorType::class)
            ->add('bordure_color',ColorType::class)
            ->add('textColor',ColorType::class)

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => CalendrierRdv::class,
        ]);
    }
}
