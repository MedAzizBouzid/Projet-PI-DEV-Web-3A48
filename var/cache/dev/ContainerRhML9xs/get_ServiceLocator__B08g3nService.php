<?php

namespace ContainerRhML9xs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__B08g3nService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..b08g3n' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..b08g3n'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'calendrier' => ['privates', '.errored..service_locator..b08g3n.App\\Entity\\Calendrier', NULL, 'Cannot autowire service ".service_locator..b08g3n": it needs an instance of "App\\Entity\\Calendrier" but this type has been excluded in "config/services.yaml".'],
        ], [
            'calendrier' => 'App\\Entity\\Calendrier',
        ]);
    }
}
