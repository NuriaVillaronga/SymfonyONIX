<?php

namespace ContainerX7y9Rat;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Xx8TK6MService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.xx8TK6M' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.xx8TK6M'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'form' => ['privates', '.errored..service_locator.xx8TK6M.Symfony\\Component\\Form\\FormInterface', NULL, 'Cannot autowire service ".service_locator.xx8TK6M": it references interface "Symfony\\Component\\Form\\FormInterface" but no such service exists. Did you create a class that implements this interface?'],
            'passwordHasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
            'user' => ['privates', '.errored..service_locator.xx8TK6M.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.xx8TK6M": it references class "App\\Entity\\User" but no such service exists.'],
        ], [
            'em' => '?',
            'form' => 'Symfony\\Component\\Form\\FormInterface',
            'passwordHasher' => '?',
            'user' => 'App\\Entity\\User',
        ]);
    }
}
