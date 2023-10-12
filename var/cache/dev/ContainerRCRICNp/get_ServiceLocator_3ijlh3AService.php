<?php

namespace ContainerRCRICNp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_3ijlh3AService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3ijlh3A' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3ijlh3A'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'review' => ['privates', '.errored..service_locator.3ijlh3A.App\\Entity\\Review', NULL, 'Cannot autowire service ".service_locator.3ijlh3A": it needs an instance of "App\\Entity\\Review" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'review' => 'App\\Entity\\Review',
        ]);
    }
}
