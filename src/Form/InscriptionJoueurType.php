<?php

namespace App\Form;

use App\Entity\Joueur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class InscriptionJoueurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //form creation with elements

        $builder        
            ->add('nomjoueur', TextType::class)
            ->add('prenomjoueur', TextType::class)
            ->add('emailjoueur', EmailType::class)
            ->add('passwordjoueur', PasswordType::class)  
            ->add('confirm_passwordjoueur', PasswordType::class)         
            ->add('paysjoueur', TextType::class)
            ->add('villejoueur', TextType::class)
            ->add('continentjoueur', TextType::class)
            ->add('save', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
            'data_class' => Joueur::class,
        ]);
    }
}
