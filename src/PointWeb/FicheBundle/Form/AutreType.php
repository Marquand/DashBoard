<?php

namespace PointWeb\FicheBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AutreType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('commercial')
            ->add('debutDate')
            ->add('finDate')
            ->add('creationDate')
            ->add('justificatif')
            ->add('frais')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PointWeb\FicheBundle\Entity\Autre'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pointweb_fichebundle_autre';
    }
}
