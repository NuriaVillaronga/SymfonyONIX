<?php

namespace ContainerRMW2JcO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHomepageControllerService extends App_KernelPantherDebugContainer
{
    /**
     * Gets the public 'App\Controller\HomepageController' shared autowired service.
     *
     * @return \App\Controller\HomepageController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/UserServices/CheckCredentials.php';
        include_once \dirname(__DIR__, 4).'/src/UserServices/UserService.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/HomepageController.php';

        $container->services['App\\Controller\\HomepageController'] = $instance = new \App\Controller\HomepageController();

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\HomepageController', $container));

        return $instance;
    }
}
