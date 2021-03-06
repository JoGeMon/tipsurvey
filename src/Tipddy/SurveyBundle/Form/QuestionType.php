<?php

namespace Tipddy\SurveyBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class QuestionType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('question')
            ->add('description')
            ->add('randomOrder')
            ->add('questionRequired')
            //->add('survey')
            ->add('questionType')
            ->add('answerType')
            ->add('answers','collection',array(
                'type' => new AnswerType(),
                'allow_add' => true,
                'allow_delete' => true,
                'required' => true,
                'by_reference' => false
            ));
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Tipddy\SurveyBundle\Entity\Question'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tipddy_surveybundle_question';
    }
}
