<?php

namespace proGize\UserManagementBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use proGize\UserManagementBundle\Entity\User;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('username', 'text');
        $builder->add('email', 'text');
        $builder->add('password', 'repeated', array(
           'first_name'  => 'password',
           'second_name' => 'confirm',
           'type'        => 'password',
        ));
        $builder->add('first_name', 'text');
        $builder->add('last_name', 'text');
    }

    public function getName()
    {
        return 'register';
    }
}