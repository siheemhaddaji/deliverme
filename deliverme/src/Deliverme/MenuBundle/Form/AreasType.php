<?php

namespace Deliverme\MenuBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AreasType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('zipCode')
            ->add('minimunPrice')
            ->add('data_created')
            ->add('data_updated')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Deliverme\MenuBundle\Entity\Areas'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'deliverme_menubundle_areas';
    }
}
