<?php

namespace ContainerY4rwkug;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ATwFDkJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.aTwFDkJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.aTwFDkJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'guide' => ['privates', '.errored..service_locator.aTwFDkJ.App\\Entity\\Guide', NULL, 'Cannot autowire service ".service_locator.aTwFDkJ": it needs an instance of "App\\Entity\\Guide" but this type has been excluded in "config/services.yaml".'],
        ], [
            'guide' => 'App\\Entity\\Guide',
        ]);
    }
}
