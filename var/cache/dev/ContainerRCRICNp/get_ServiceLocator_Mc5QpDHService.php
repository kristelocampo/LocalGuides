<?php

namespace ContainerRCRICNp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Mc5QpDHService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Mc5QpDH' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Mc5QpDH'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'imageRepository' => ['privates', 'App\\Repository\\ImageRepository', 'getImageRepositoryService', true],
            'itinerariesRepository' => ['privates', 'App\\Repository\\ItinerariesRepository', 'getItinerariesRepositoryService', true],
            'reviewRepository' => ['privates', 'App\\Repository\\ReviewRepository', 'getReviewRepositoryService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'entityManager' => '?',
            'imageRepository' => 'App\\Repository\\ImageRepository',
            'itinerariesRepository' => 'App\\Repository\\ItinerariesRepository',
            'reviewRepository' => 'App\\Repository\\ReviewRepository',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
