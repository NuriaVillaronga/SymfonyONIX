<?php

namespace ContainerE5cZ7u1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCreateControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\CreateController' shared autowired service.
     *
     * @return \App\Controller\CreateController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/UserServices/CheckCredentials.php';
        include_once \dirname(__DIR__, 4).'/src/UserServices/UserService.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/CreateController.php';

        $container->services['App\\Controller\\CreateController'] = $instance = new \App\Controller\CreateController();

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\CreateController', $container));

        return $instance;
    }
}
