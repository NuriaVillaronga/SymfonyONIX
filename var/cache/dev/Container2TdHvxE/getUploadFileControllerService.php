<?php

namespace Container2TdHvxE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUploadFileControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\UploadFileController' shared autowired service.
     *
     * @return \App\Controller\UploadFileController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/UserServices/CheckCredentials.php';
        include_once \dirname(__DIR__, 4).'/src/UserServices/UserService.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/UploadFileController.php';

        $container->services['App\\Controller\\UploadFileController'] = $instance = new \App\Controller\UploadFileController();

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\UploadFileController', $container));

        return $instance;
    }
}
