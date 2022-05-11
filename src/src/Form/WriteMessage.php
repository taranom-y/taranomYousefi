<?php

namespace App\Form;

use http\Message;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class WriteMessage extends  AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
            $builder->add('message',TextareaType::class,['attr'=>['placeholder'=>'write Message']])
            ->add ('save',SubmitType::class,['label'=> 'save']);

    }
    public function configureOptions(OptionsResolver $resolver)
    {
       $resolver->setDefaults([
           'data_class'=>Message::class,
       ]);
    }

}