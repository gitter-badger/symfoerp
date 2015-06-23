<?php
/**
 * Created by PhpStorm.
 * User: vistiyos
 * Date: 23/6/15
 * Time: 18:44
 */

namespace Vistiyos\UI\UIBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ProfileFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',null,[
                'label' => 'profile.form.name.label'
            ])
            ->add('locale', 'choice', [
                'choices' => [
                    'en' => 'profile.form.locale.options.en',
                    'es' => 'profile.form.locale.options.es'
                ],
                'label' => 'profile.form.locale.label'
            ])
            ->remove('current_password')// Deleting current password field
            ->setAction('fos_user_profile_edit');
    }

    /**
     * {@inheritdoc}
     *
     * @return string
     */
    public function getParent()
    {
        return 'fos_user_profile';
    }

    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return 'vistiyos_ui_profile';
    }
}