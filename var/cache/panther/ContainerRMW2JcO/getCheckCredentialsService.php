<?php

namespace ContainerRMW2JcO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCheckCredentialsService extends App_KernelPantherDebugContainer
{
    /**
     * Gets the public 'App\UserServices\CheckCredentials' shared autowired service.
     *
     * @return \App\UserServices\CheckCredentials
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/UserServices/CheckCredentials.php';

        $container->services['App\\UserServices\\CheckCredentials'] = $instance = new \App\UserServices\CheckCredentials();

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\UserServices\\CheckCredentials', $container));

        return $instance;
    }
}
