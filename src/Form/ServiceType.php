<?php

namespace App\Form;

use App\Entity\Service;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\File;
use Webmozart\Assert\Assert as AssertAssert;

class ServiceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom',TextType::class,[
                'constraints'=>[
                    new Assert\NotBlank(),
                    new Assert\Regex([
                        'pattern' => '/^[a-zA-Z\s]*$/',
                        'message' => 'Le champ nom ne peut pas contenir de chiffres.'
                    ]),
                    new Assert\Length(max:20)


                ]
            ] )
            ->add('type',TextType::class,[
                'constraints'=>[
                    new Assert\NotBlank(),
                    new Assert\Length(max:20)
                ]
            ])
            ->add('image', FileType::class, [
                'label' => 'Image du Service (Des fichiers images seulement)',

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
            ->add('description',TextType::class,[
                'constraints'=>[
                    new Assert\NotBlank(),
                    new Assert\Length(max:60)
                ]
                ])
            ->add('tarif') 
             
            
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Service::class,
        ]);
    }
}
