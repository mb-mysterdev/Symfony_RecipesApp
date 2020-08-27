<?php

namespace ContainerTS82tJU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GoZyRstService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.GoZyRst' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.GoZyRst'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'footerRepo' => ['privates', 'App\\Repository\\FooterRepository', 'getFooterRepositoryService', true],
            'navbarRepo' => ['privates', 'App\\Repository\\NavbarRepository', 'getNavbarRepositoryService', true],
            'recipeRepository' => ['privates', 'App\\Repository\\RecipeRepository', 'getRecipeRepositoryService', true],
        ], [
            'footerRepo' => 'App\\Repository\\FooterRepository',
            'navbarRepo' => 'App\\Repository\\NavbarRepository',
            'recipeRepository' => 'App\\Repository\\RecipeRepository',
        ]);
    }
}