<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('civility', ChoiceType::class, [
                'label'    => ' ',
                'required' => true,
                'choices'  => [
                    'Particulier'   => 'Particulier',
                    'Professionnel' => 'Professionnel',
                ]
            ])
            ->add('name', TextType::class, [
                'label'    => ' ',
                'required' => true,
                'attr'     => [
                    'placeholder' => 'Saisissez votre nom *'
                ]
            ])
            ->add('firstname', TextType::class, [
                'label'    => ' ',
                'required' => false,
                'attr'     => [
                    'placeholder' => 'Saisissez votre prénom'
                ]
            ])
            ->add('email', HiddenType::class, [
                'label' => ' ',
                'attr'  => [
                    'class' => 'email'
                ]
            ])
            ->add('contact', EmailType::class, [
                'label'    => ' ',
                'required' => true,
                'attr'     => [
                    'placeholder' => 'Saisissez votre email *'
                ]
            ])
            ->add('phone', TextType::class, [
                'label'    => ' ',
                'required' => false,
                'attr'     => [
                    'placeholder' => 'Saisissez votre téléphone'
                ]
            ])
            ->add('favorite', ChoiceType::class, [
                'label'     => ' ',
                'required'  => true,
                'choices'   => [
                    'Echanger par Email'     => 'Email',
                    'Echanger par Téléphone' => 'Téléphone'
                ]
            ])
            ->add('subject', TextareaType::class, [
                'label'     => ' ',
                'required'  => true,
                'attr'      => [
                    'placeholder'  => 'Saisissez votre message *'
                ]
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Envoyer',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => null,
        ]);
    }

    public function getBlockPrefix(): string
    {
        return 'contact_form';
    }
}