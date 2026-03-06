<?php

declare(strict_types=1);

namespace App\Controller\Api;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Routing\Attribute\Route;

#[AsController]
readonly class HelloWorldController
{
    public function __construct(
        private LoggerInterface $logger
    ) {}

    #[Route('/hello-world')]
    public function index(): Response
    {
        $this->logger->info(__METHOD__ . " invoked");

        return new JsonResponse([
            "key" => "value",
            "array" => [1, 2, 3]
        ]);
    }
}
