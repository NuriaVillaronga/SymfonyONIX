<?php

namespace ContainerS9Jerap;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KIdRpHKService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.kIdRpHK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kIdRpHK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'catalog' => ['privates', '.errored..service_locator.kIdRpHK.App\\Entity\\Catalog', NULL, 'Cannot autowire service ".service_locator.kIdRpHK": it references class "App\\Entity\\Catalog" but no such service exists.'],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
            'user' => ['privates', '.errored..service_locator.kIdRpHK.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.kIdRpHK": it references class "App\\Entity\\User" but no such service exists.'],
        ], [
            'catalog' => 'App\\Entity\\Catalog',
            'em' => '?',
            'slugger' => '?',
            'user' => 'App\\Entity\\User',
        ]);
    }
}
