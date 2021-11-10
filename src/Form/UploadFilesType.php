<?php

namespace App\Form;

use App\Entity\File;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UploadFilesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('user')
            ->add('catalog', ChoiceType::class, [
                'choices'  => [
                    'Tipo1' => '1',
                    'Tipo2' => '2',
                    'Tipo3' => '3',
                    'Tipo4' => '4',
                ],
            ])
            ->add('files', FileType::class, [
                'label' => 'Upload a Onix file', 
                'mapped' => false, 
                'required' => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => File::class,
        ]);
    }
}
