<?php

namespace App\Form;

use App\Entity\Joueur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class InscriptionJoueurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //form creation with elements

        $builder        
            ->add('nomjoueur')
            ->add('prenomjoueur')
            ->add('emailjoueur')
            ->add('passwordjoueur', PasswordType::class)  
            ->add('confirm_passwordjoueur', PasswordType::class)         
            ->add('paysjoueur')
            ->add('villejoueur')
            ->add('continentjoueur')
            ->add('save', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Joueur::class,
        ]);
    }
}
