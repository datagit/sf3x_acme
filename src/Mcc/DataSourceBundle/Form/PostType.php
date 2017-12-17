<?php

namespace Mcc\DataSourceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', null, array('required' => true))
            ->add('image', null, array('required' => false))
//            ->add('updatedAt')
//            ->add('createdAt')
//            ->add('slug')
            ->add('brief', null, array('required' => false))
            ->add('description', null, array('required' => false))
            ->add('author', null, array('required' => false))
            ->add('position', null, array('required' => false))
            ->add('enabled', null, array('required' => false))
//            ->add('tag')
        ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mcc\DataSourceBundle\Entity\Post',
            //'csrf_protection'   => false,
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'mcc_datasourcebundle_post';
    }


}
