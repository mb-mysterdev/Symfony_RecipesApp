<?php

namespace ContainerXc51hJs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Pa7rLFkService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Pa7rLFk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Pa7rLFk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'footerRepo' => ['privates', 'App\\Repository\\FooterRepository', 'getFooterRepositoryService', true],
            'navbarRepo' => ['privates', 'App\\Repository\\NavbarRepository', 'getNavbarRepositoryService', true],
            'presentationRepo' => ['privates', 'App\\Repository\\PresentationHomeRepository', 'getPresentationHomeRepositoryService', true],
            'repo' => ['privates', 'App\\Repository\\HomeRepository', 'getHomeRepositoryService', true],
        ], [
            'footerRepo' => 'App\\Repository\\FooterRepository',
            'navbarRepo' => 'App\\Repository\\NavbarRepository',
            'presentationRepo' => 'App\\Repository\\PresentationHomeRepository',
            'repo' => 'App\\Repository\\HomeRepository',
        ]);
    }
}