<?php

namespace ContainerY4rwkug;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_0aVz0s0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.0aVz0s0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0aVz0s0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'language' => ['privates', '.errored..service_locator.0aVz0s0.App\\Entity\\Language', NULL, 'Cannot autowire service ".service_locator.0aVz0s0": it needs an instance of "App\\Entity\\Language" but this type has been excluded in "config/services.yaml".'],
        ], [
            'language' => 'App\\Entity\\Language',
        ]);
    }
}
