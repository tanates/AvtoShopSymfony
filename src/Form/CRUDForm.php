<?php

namespace App\Form;

use App\Entity\Avto;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
class CRUDFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('AvtoName', TextType::class , [
            'attr' => [
               'class'=>'form-control' // пример использования атрибута placeholder
            ]
        ] )
        ->add ('PriceAvto' ,TextType::class , [
            'attr' => [
               'class'=>'form-control ' // пример использования атрибута placeholder
            ]
        ])
        ->add ('AvtoImagesLink', TextType::class , [
            'attr' => [
               'class'=>'form-control' // пример использования атрибута placeholder
            ]
        ])
        ->getForm();
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Avto::class,
        ]);
    }
}