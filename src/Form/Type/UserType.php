<?php

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class UserType extends AbstractType
{
    public function buildUserForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('username', TextType::class,[
                'label' => "Username",
                'attr' => [
                    'placeholder' => "Write a title"
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => "Email",
            ])
            ->add('password', PasswordType::class, [
                'label' => 'Password',
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Send',
            ])
        ;
    }
}