<?php

namespace Container5XZoBiR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getListControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ListController' shared autowired service.
     *
     * @return \App\Controller\ListController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/UserServices/CheckCredentials.php';
        include_once \dirname(__DIR__, 4).'/src/UserServices/UserService.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ListController.php';

        $container->services['App\\Controller\\ListController'] = $instance = new \App\Controller\ListController();

        $instance->setContainer(($container->privates['.service_locator.PRCEzdO'] ?? $container->load('get_ServiceLocator_PRCEzdOService'))->withContext('App\\Controller\\ListController', $container));

        return $instance;
    }
}
