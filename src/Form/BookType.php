<?php

namespace App\Form;

use App\Entity\Book;
use App\Form\ImageType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class BookType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('author')
            ->add('date')
            ->add('resume', TextareaType::class)
            ->add('category')
<<<<<<< HEAD
            ->add('image', ImageType::class)
=======
            ->add('image', ImageType::class, array('required' => false))
>>>>>>> parent of 5d9b8a8... Merge pull request #5 from PierreDemailly/dev
            ->add('client')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Book::class,
        ]);
    }
}
