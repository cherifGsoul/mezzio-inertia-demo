<?php

declare(strict_types=1);

namespace App\Handler;

use Cherif\InertiaPsr15\Middleware\InertiaMiddleware;
use Cherif\InertiaPsr15\Service\InertiaInterface;
use Mezzio\LaminasView\LaminasViewRenderer;
use Mezzio\Plates\PlatesRenderer;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class HomePageHandler implements RequestHandlerInterface
{
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        /** @var InertiaInterface $inertia */
        $inertia = $request->getAttribute(InertiaMiddleware::INERTIA_ATTRIBUTE);
        return $inertia->render('Home', [
            'greeting' => 'Inertia PSR-15'
        ]);
    }
}
