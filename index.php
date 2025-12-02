<?php

require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Runtime\SymfonyRuntime;

class App extends BaseKernel {
    #[Route('/api', name: 'api_index', methods: ['GET'])]
   public function index(): JsonResponse {
       return new JsonResponse(['message' => 'Api is working!']);
   }
   use MicroKernelTrait;
}

$app = new App(environment: 'dev', debug: true);

new SymfonyRuntime()
    ->getRunner(\PHP_SAPI === 'cli' ? new Application($app) : $app)
    ->run();
