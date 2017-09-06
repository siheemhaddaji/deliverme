<?php

namespace Deliverme\MenuBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DeliveryManType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName','text', array('label'=>'Nom' , 'attr' => array('class' => 'form-control')))
            ->add('lastName','text', array('label'=>'Prenom' , 'attr' => array('class' => 'form-control')))
            ->add('birthdate','date',array('label'=>'date de naissance',
                                                    'format' => 'ddMMyyyy',
                                                    'attr' => array('class' => 'form-control'),
                                                     'years' => range(1950,2017)
                                                    ))
        
            ->add('phoneNumber','text', array('label'=>'Numéro de téléphone' , 'attr' => array('class' => 'form-control')))
             ->add('file','file', array('label'=>'photo' , 'attr' => array('class' => 'form-control')))
            ->add('typeOfStay','choice', array( 'choices' => array(
                'B' => 'B',
                'C' => 'C',
                'L' => 'L',
                'G' => 'G')))
            //->add('file','file', array('label'=>'permitsOfStay','attr' => array('class' => 'form-control')))
            ->add('driversLicenseNumber')
            ->add('copyOfDrivingLicense')
            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Deliverme\MenuBundle\Entity\DeliveryMan'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'deliverme_menubundle_deliveryman';
    }
}
