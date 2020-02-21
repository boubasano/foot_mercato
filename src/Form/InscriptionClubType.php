<?php

namespace App\Form;

use App\Entity\Club;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class InscriptionClubType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //form creation with elements

        $builder        
            ->add('nomclub')
            ->add('emailclub')
            ->add('passwordclub', PasswordType::class)            
            ->add('paysclub')
            ->add('villeclub')
            ->add('continentclub')
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
