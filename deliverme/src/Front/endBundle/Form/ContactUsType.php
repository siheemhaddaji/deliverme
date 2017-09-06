<?php

namespace Front\endBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContactUsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('subject','text', array('label'=>'Subject' , 'attr' => array('class' => "validate['required'] textbox1")))
            ->add('fullName','text', array('label'=>'fullName' , 'attr' => array('class' => "validate['required'] textbox1")))
            ->add('PhoneNumber','text', array('label'=>'PhoneNumber' , 'attr' => array('class' =>  "validate['required'] textbox1")))
            ->add('Mail','text', array('label'=>'Mail' , 'attr' => array('class' =>  "validate['required'] textbox1")))
            ->add('Message','textarea', array('label'=>'Message' , 'attr' => array('class' => 'form-control')))
                
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Front\endBundle\Entity\Contact'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'Front_endBundle_Contact';
    }
}
