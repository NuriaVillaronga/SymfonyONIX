<?php

namespace ContainerS9Jerap;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Value_XibwmKvService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.value.XibwmKv' shared service.
     *
     * @return \mixed
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.value.XibwmKv'] = \current([0 => (\dirname(__DIR__, 4).'/public/uploads/files')]);
    }
}
