<?php

namespace ContainerRhML9xs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Xrjs0XnService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.xrjs0Xn' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.xrjs0Xn'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'activiteRepository' => ['privates', 'App\\Repository\\ActiviteRepository', 'getActiviteRepositoryService', true],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
        ], [
            'activiteRepository' => 'App\\Repository\\ActiviteRepository',
            'slugger' => '?',
        ]);
    }
}
