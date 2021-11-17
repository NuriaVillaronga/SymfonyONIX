<?php

namespace ContainerS9Jerap;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_3vXNkaxService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3vXNkax' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3vXNkax'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'passwordHasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
            'user' => ['privates', '.errored..service_locator.3vXNkax.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.3vXNkax": it references class "App\\Entity\\User" but no such service exists.'],
        ], [
            'em' => '?',
            'passwordHasher' => '?',
            'slugger' => '?',
            'user' => 'App\\Entity\\User',
        ]);
    }
}
