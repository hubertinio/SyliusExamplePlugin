<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $servicesIdPrefix  = 'hubertinio_sylius_example_plugin.';

    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();

//    $services->set($servicesIdPrefix  . '.controller', StatusChangeNotificationController::class)
//        ->args([
//            true,
//            param('kernel.logs_dir'),
//            service('filesystem'),
//            service($servicesIdPrefix . 'bridge'),
//        ]);
};
