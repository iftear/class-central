<?php

namespace ClassCentral\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class InstitutionType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('url')
            ->add('slug')
            ->add('isUniversity', null, array('required' => false))
            //->add('courses')
        ;
    }

    public function getName()
    {
        return 'classcentral_sitebundle_institutiontype';
    }
}
