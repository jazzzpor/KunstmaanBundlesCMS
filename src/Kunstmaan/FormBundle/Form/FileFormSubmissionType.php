<?php

namespace Kunstmaan\FormBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * This class represents the type for the file FileFormSubmissionField
 */
class FileFormSubmissionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder The form builder
     * @param array                $options An array with options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        if (isset($options['value_constraints']) && !empty($options['value_constraints'])) {
            $options['constraints'] = $options['value_constraints'];
        }

        $keys = array_fill_keys(['label', 'required', 'constraints'], null);
        $fieldOptions = array_filter(
            array_replace($keys, array_intersect_key($options, $keys)),
            function ($v) {
                return isset($v);
            }
        );

        $builder->add('file', FileType::class, $fieldOptions);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            [
                'data_class' => 'Kunstmaan\FormBundle\Entity\FormSubmissionFieldTypes\FileFormSubmissionField',
                'value_constraints' => [],
            ]
        );
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'kunstmaan_formbundle_fileformsubmissiontype';
    }
}
