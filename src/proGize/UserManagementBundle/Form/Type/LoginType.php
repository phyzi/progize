<?php

namespace proGize\UserManagementBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use proGize\UserManagementBundle\Entity\User;

class LoginType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('username', 'text');
        $builder->add('password', 'password');
    }

    public function getName()
    {
        return 'login';
    }
}