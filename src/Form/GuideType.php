<?php

namespace App\Form;

use App\Entity\Guide;
use App\Entity\Language;
use App\Entity\Location;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GuideType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {

        $builder
            ->add('firstname', TextType::class)
            ->add('lastname', TextType::class)
            ->add('bio', TextareaType::class)
            ->add('telNumber', TextType::class)
            ->add('languages', EntityType::class, [
                'class' => Language::class,
                'choice_label' => 'name',
                'multiple' => true,
                'expanded' => false,
                'label' => 'Languages',
            ])
            ->add('id_location', EntityType::class, [
                'class' => Location::class,
                'choice_label' => function ($location) {
                    return $location->getCity() . ', ' . $location->getCountry();
                },
                'multiple' => false,
                'expanded' => false,
                'label' => 'Location'
            ])

        ;

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Guide::class
        ]);
    }
}
