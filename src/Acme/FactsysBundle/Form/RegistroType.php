<?php

namespace Acme\FactsysBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RegistroType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('rfc')
            ->add('nombre_municipio')
            ->add('direccion')
            ->add('ciudad')
            ->add('estado')
            ->add('pais')
            ->add('telefono')
            ->add('fax')
            ->add('contacto')
            ->add('sha_key')
            ->add('estatuto')
            ->add('fecha_alta')
            ->add('fecha_ult_mvto')
            ->add('fecha_caduca')
            ->add('notas')
            ->add('periodo_nombre')
            ->add('periodo_tipo')
            ->add('periodo_unidades')
            ->add('periodo_actual')
            ->add('periodos_en_ejercicio')
            ->add('periodo_fecha_inicio')
            ->add('periodo_fecha_final')
            ->add('periodo_acumulado_actual')
            ->add('periodo_acumulado_ejercicio')
            ->add('periodo_acumulado_total')
            ->add('ejercicio_nombre')
            ->add('ejercicio_tipo')
            ->add('ejercicio_unidades')
            ->add('ejercicio_actual')
            ->add('ejercicios_en_mandato')
            ->add('ejercicio_fecha_inicio')
            ->add('ejercicio_fecha_final')
            ->add('ejercicio_acumulado_actual')
            ->add('ejercicio_acumulado_ejercicio')
            ->add('ejercicio_acumulado_total')
            ->add('factura_actual')
            ->add('documento_actual')
            ->add('recibo_actual')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\FactsysBundle\Entity\Registro'
        ));
    }

    public function getName()
    {
        return 'acme_factsysbundle_registrotype';
    }
}
