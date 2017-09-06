<?php

namespace Deliverme\MenuBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DishesType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name','text', array('label'=>'Nom' , 'attr' => array('class' => 'form-control')))
            ->add('ingredients','textarea', array("label"=> "A propos" ,'attr' => array('class' => 'form-control wysihtml5','rows' => '10','cols' => '10')))
            ->add('file','file', array('label'=>'photo' , 'attr' => array('class' => 'form-control')))
            ->add('price','text', array('label'=>'price' , 'attr' => array('class' => 'form-control')))
            ->add('status','text', array('label'=>'status' , 'attr' => array('class' => 'form-control')))
            ->add('ranking','text', array('label'=>'ranking' , 'attr' => array('class' => 'form-control')))
            ->add('dishesType', 'entity', array('attr' => array("label"=> "dishesType" ,'class' => 'form-control') , 'class'    => 'DelivermeMenuBundle:DishesType'))
        ;
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Deliverme\MenuBundle\Entity\Dishes'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'deliverme_menubundle_dishes';
    }
}
