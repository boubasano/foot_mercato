<?php

namespace App\Form;

use App\Entity\Club;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;


class InscriptionClubType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //form creation with elements

        $builder        
            ->add('nomclub', TextType::class)
            ->add('emailclub', EmailType::class)
            ->add('passwordclub', PasswordType::class) 
            ->add('confirm_passwordclub', PasswordType::class)           
            ->add('paysclub', TextType::class)
            ->add('villeclub', TextType::class)
            ->add('continentclub', TextType::class)
            ->add('save', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Club::class,
        ]);
    }
}
