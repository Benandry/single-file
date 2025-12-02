<?php

use App\Controller\Api\CustomerController;
use App\Controller\HomeController;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return function (RoutingConfigurator $routes) {
    $routes->add('homepage', '/')
        ->controller([HomeController::class, 'index']);
    
    $routes->add('api_customers', '/api/customers')
        ->controller([CustomerController::class, 'index']);
};
