<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;

final class HomeController
{
    public function index(): JsonResponse
    {
        return JsonResponse::fromJsonString(
            json_encode(['message' => 'Api is working!'])
        );
    }
}
