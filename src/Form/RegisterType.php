<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class RegisterType extends AbstractType
{

    public function buildForm (FormBuilderInterface $formBuilderInterface, array $options) {
        $formBuilderInterface->add('name', TextType::class, array(
            'label' => 'Nombres'
        ));
        
        $formBuilderInterface->add('surname', TextType::class, array(
            'label' => 'Apellidos'
        ));
        
        $formBuilderInterface->add('email', EmailType::class, array(
            'label' => 'Correo Electrónico'
        ));

        $formBuilderInterface->add('password', PasswordType::class, array(
            'label' => 'Contraseña'
        ));

        $formBuilderInterface->add('submit', SubmitType::class, array(
            'label' => 'Registrarme'
        ));
    }
}