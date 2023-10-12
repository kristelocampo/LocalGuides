<?php

namespace App\Form;

use App\Entity\Guide;
use App\Entity\Itineraries;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ItinerariesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class)
            ->add('description', TextareaType::class)
            ->add('tarif', NumberType::class)
            ->add('id_image', FileType::class,[
                'multiple' => false,
                'mapped' => false,
                'required' => false,
                'attr' => ['class' => 'inputFile']
            ]);

            if ($options['is_admin']) {
                $builder->add('id_guide', EntityType::class, [
                    'class' => Guide::class,
                    'choice_label' => function ($guide) {
                        return $guide->getFirstname() . ' ' . $guide->getLastname();
                    },
                    'placeholder' => 'Select a guide',
                ]);
            }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Itineraries::class,
            'is_admin' => false
        ]);
    }
}
