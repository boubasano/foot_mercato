<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;


class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // form creation with elements
        $builder
            ->add('nomcontact', TextType::class)
            ->add('prenomcontact', TextType::class)
            ->add('emailcontact', EmailType::class)
            ->add('commentairecontact', TextareaType::class)
            ->add('datecontact', DateType::class)
            ->add('save', SubmitType::class)
        ;
    }

    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
             'data_class' => Contact::class,
        ]);
    }
}
