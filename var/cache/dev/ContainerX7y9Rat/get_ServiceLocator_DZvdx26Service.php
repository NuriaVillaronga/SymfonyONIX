<?php

namespace ContainerX7y9Rat;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DZvdx26Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.dZvdx26' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dZvdx26'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'file' => ['privates', '.errored..service_locator.dZvdx26.App\\Entity\\File', NULL, 'Cannot autowire service ".service_locator.dZvdx26": it references class "App\\Entity\\File" but no such service exists.'],
            'onixFile_directory' => ['privates', '.value.XibwmKv', 'get_Value_XibwmKvService', true],
        ], [
            'em' => '?',
            'file' => 'App\\Entity\\File',
            'onixFile_directory' => '?',
        ]);
    }
}
