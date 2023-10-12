<?php

namespace App\Form;

use App\Entity\Article;
use App\Entity\Guide;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextareaType::class)
            ->add('context', TextareaType::class);

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
            'data_class' => Article::class,
            'is_admin' => false,
        ]);
    }
}
