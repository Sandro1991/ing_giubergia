<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Collection;

class ContactType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('nombre', TextType::class, array("required"=>"required",
                'attr' => array(
                    'placeholder' => 'Dime tu nombre'
                )
            ))
            ->add('email', EmailType::class, array("required"=>"required",
                'attr' => array(
                    'placeholder' => 'Email para que pueda responderte'
                )
            ))
            ->add('motivo', TextType::class, array("required"=>"required",
                'attr' => array(
                    'placeholder' => 'El motivo de contactar con nosotros'
                )
            ))
            ->add('mensaje', TextareaType::class, array("required"=>"required",
                'attr' => array(
                    'cols' => 90,
                    'rows' => 6,
                    'placeholder' => 'Mensaje que quieres enviarme'
                )
            ))
            ->add('save', SubmitType::class, array('label' => 'Enviar', 'attr' => array('class' => 'btn btn-success btn-lg col-lg-6 col-lg-offset-3')));
    }

    public function setConfigureOptions(OptionsResolver $resolver)
    {
        $collectionConstraint = new Collection(array(
            'nombre' => array(
                new NotBlank(array('message' => 'El nombre no puede estar vacío.')),
                new Length(array('min' => 3))
            ),
            'email' => array(
                new NotBlank(array('message' => 'El email no puede estar vacío.')),
                new Email(array('message' => 'Email inválido.'))
            ),
            'motivo' => array(
                new NotBlank(array('message' => 'El motivo no puede estar vacío.')),
                new Length(array('min' => 3))
            ),
            'mensaje' => array(
                new NotBlank(array('message' => 'El mensaje no puede estar vacío.')),
                new Length(array('min' => 5))
            )
        ));

        $resolver->setDefaults(array(
            'constraints' => $collectionConstraint
        ));
    }


}