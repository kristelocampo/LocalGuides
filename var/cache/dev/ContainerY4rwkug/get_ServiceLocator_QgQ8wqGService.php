<?php

namespace ContainerY4rwkug;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QgQ8wqGService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.QgQ8wqG' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.QgQ8wqG'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'languageRepository' => ['privates', 'App\\Repository\\LanguageRepository', 'getLanguageRepositoryService', true],
        ], [
            'languageRepository' => 'App\\Repository\\LanguageRepository',
        ]);
    }
}
