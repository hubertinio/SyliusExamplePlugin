<?php

declare(strict_types=1);

use Hubertinio\SyliusCashBillPlugin\Action\CaptureAction;
use Hubertinio\SyliusCashBillPlugin\Action\ConvertPaymentAction;
use Hubertinio\SyliusCashBillPlugin\Action\NotifyAction;
use Hubertinio\SyliusCashBillPlugin\Action\StatusAction;
use Hubertinio\SyliusCashBillPlugin\Api\CashBillApiClient;
use Hubertinio\SyliusCashBillPlugin\Api\CashBillApiClientInterface;
use Hubertinio\SyliusCashBillPlugin\Bridge\CashBillBridge;
use Hubertinio\SyliusCashBillPlugin\Bridge\CashBillBridgeInterface;
use Hubertinio\SyliusCashBillPlugin\CashBillGatewayFactory;
use Hubertinio\SyliusCashBillPlugin\Cli\DevCommand;
use Hubertinio\SyliusCashBillPlugin\Cli\FetchPaymentChannelsCommand;
use Hubertinio\SyliusCashBillPlugin\Cli\FetchTransactionDetailsCommand;
use Hubertinio\SyliusCashBillPlugin\Cli\PingCommand;
use Hubertinio\SyliusCashBillPlugin\Factory\ApiClientFactory;
use Hubertinio\SyliusCashBillPlugin\Form\Type\CashBillGatewayConfigurationType;
use Hubertinio\SyliusCashBillPlugin\Provider\PaymentDescriptionProvider;
use Payum\Core\Bridge\Symfony\Builder\GatewayFactoryBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function Symfony\Component\DependencyInjection\Loader\Configurator\service;
use function Symfony\Component\DependencyInjection\Loader\Configurator\param;
use Hubertinio\SyliusCashBillPlugin\Controller\StatusChangeNotificationController;

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
