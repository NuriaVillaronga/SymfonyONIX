<?php

namespace Container2TdHvxE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_W4WZv7cService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.W4WZv7c' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.W4WZv7c'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'file' => ['privates', '.errored..service_locator.W4WZv7c.App\\Entity\\File', NULL, 'Cannot autowire service ".service_locator.W4WZv7c": it references class "App\\Entity\\File" but no such service exists.'],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
            'user' => ['privates', '.errored..service_locator.W4WZv7c.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.W4WZv7c": it references class "App\\Entity\\User" but no such service exists.'],
        ], [
            'em' => '?',
            'file' => 'App\\Entity\\File',
            'slugger' => '?',
            'user' => 'App\\Entity\\User',
        ]);
    }
}
