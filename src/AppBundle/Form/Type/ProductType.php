<?php
namespace AppBundle\Form\Type;


use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Tanna\ProductBundle\Form\Type\ProductType as BaseType;

class ProductType {
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
    }

    /**
     * Set default
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Document\Product',
        ));
    }

    public function getName()
    {
        return 'product';
    }
}