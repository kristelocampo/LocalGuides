<?php

namespace ContainerY4rwkug;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GTtmPI1Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.gTtmPI1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.gTtmPI1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'itinerary' => ['privates', '.errored..service_locator.gTtmPI1.App\\Entity\\Itineraries', NULL, 'Cannot autowire service ".service_locator.gTtmPI1": it needs an instance of "App\\Entity\\Itineraries" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'itinerary' => 'App\\Entity\\Itineraries',
        ]);
    }
}
