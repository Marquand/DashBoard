<?php

namespace PointWeb\FicheBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FraisType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('qtNuit', 'integer', array(
                "label" => "Nombre de nuit :",
                'attr' => array('class' => 'form-control'),
                'label_attr' => array('class' => 'col-lg-2 control-label'),
            ))
            ->add('qtRepas', 'integer', array(
                "label" => "Nombre de Repas :",
                'attr' => array('class' => 'form-control'),
                'label_attr' => array('class' => 'col-lg-2 control-label'),
            ))
            ->add('qtKm', 'integer', array(
                "label" => "Nombre de trajet :",
                'attr' => array('class' => 'form-control'),
                'label_attr' => array('class' => 'col-lg-2 control-label'),
            ))


            ->add('prixNuit', 'text', array(
                "label" => "Prix de la nuité :",
                'attr' => array('class' => 'form-control cubage-multiply'),
                'label_attr' => array('class' => 'col-lg-2 control-label'),
            ))
            ->add('prixRepas', 'text', array(
                "label" => "Prix repas :",
                'attr' => array('class' => 'form-control'),
                'label_attr' => array('class' => 'col-lg-2 control-label'),
            ))
            ->add('prixKm', 'text', array(
                "label" => "Prix essence :",
                'attr' => array('class' => 'form-control'),
                'label_attr' => array('class' => 'col-lg-2 control-label'),
            ))


            ->add('totalNuit', 'text', array(
                "label" => "Total nuit :",
                'attr' => array('class' => 'form-control container'),
                'label_attr' => array('class' => 'col-lg-2 control-label'),
            ))
            ->add('totalRepas', 'text', array(
                "label" => "Total repas:",
                'attr' => array('class' => 'form-control'),
                'label_attr' => array('class' => 'col-lg-2 control-label'),
            ))
            ->add('totalKm', 'text', array(
                "label" => "Total Kilomètrage :",
                'attr' => array('class' => 'form-control'),
                'label_attr' => array('class' => 'col-lg-2 control-label'),
            ))

            ->add('total', 'text', array(
                "label" => "Total :",
                'attr' => array('class' => 'form-control'),
                'label_attr' => array('class' => 'col-lg-2 control-label'),
            ))

        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PointWeb\FicheBundle\Entity\Frais'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pointweb_fichebundle_frais';
    }
}
