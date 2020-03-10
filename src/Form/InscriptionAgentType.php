<?php

namespace App\Form;

use App\Entity\Agent;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class InscriptionAgentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //form creation with elements

        $builder        
            ->add('nomagent', TextType::class)
            ->add('prenomagent', TextType::class)
            ->add('emailagent', EmailType::class)
            ->add('passwordagent', PasswordType::class) 
            ->add('confirm_passwordagent', PasswordType::class)           
            ->add('paysagent', TextType::class)
            ->add('villeagent', TextType::class)
            ->add('continentagent', TextType::class)
            ->add('save', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Agent::class,
        ]);
    }
}
