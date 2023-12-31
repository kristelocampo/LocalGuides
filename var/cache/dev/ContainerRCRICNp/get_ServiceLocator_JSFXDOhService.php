<?php

namespace ContainerRCRICNp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JSFXDOhService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.jSFXDOh' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jSFXDOh'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'itinerariesRepository' => ['privates', 'App\\Repository\\ItinerariesRepository', 'getItinerariesRepositoryService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'itinerariesRepository' => 'App\\Repository\\ItinerariesRepository',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
