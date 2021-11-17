<?php

namespace ContainerH6UzAQJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_9roP677Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.9roP677' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9roP677'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'catalog' => ['privates', '.errored..service_locator.9roP677.App\\Entity\\Catalog', NULL, 'Cannot autowire service ".service_locator.9roP677": it references class "App\\Entity\\Catalog" but no such service exists.'],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'user' => ['privates', '.errored..service_locator.9roP677.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.9roP677": it references class "App\\Entity\\User" but no such service exists.'],
        ], [
            'catalog' => 'App\\Entity\\Catalog',
            'em' => '?',
            'user' => 'App\\Entity\\User',
        ]);
    }
}
