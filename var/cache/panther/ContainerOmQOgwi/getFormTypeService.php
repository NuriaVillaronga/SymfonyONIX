<?php

namespace ContainerOmQOgwi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFormTypeService extends App_KernelPantherDebugContainer
{
    /**
     * Gets the private 'App\Form\FormType' shared autowired service.
     *
     * @return \App\Form\FormType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/FormType.php';

        return $container->privates['App\\Form\\FormType'] = new \App\Form\FormType();
    }
}
