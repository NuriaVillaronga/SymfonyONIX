<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File as ConstraintsFile;
use App\Entity\File;

class UploadFilesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('files', FileType::class, [
                'label' => 'Upload a Onix file', 
                'mapped' => false,
                'required' => true,
                'constraints' => [
                    new ConstraintsFile([
                        'maxSize' => '4000000',
                        'mimeTypes' => [
                            'application/xml',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid XML File. '
                    ])
                ]
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
