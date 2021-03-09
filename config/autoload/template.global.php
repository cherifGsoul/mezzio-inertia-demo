<?php

declare(strict_types=1);

use Cherif\InertiaPsr15\Twig\InertiaExtension;
use Fullpipe\TwigWebpackExtension\WebpackExtension;

return [
    'templates' => [
        'paths' => [
            'error' => [dirname(__DIR__, 2) . '/templates/error'],
            '__main__' => [dirname(__DIR__, 2) . '/templates']
        ]
    ],
    'twig' => [
        'extensions' => [
            WebpackExtension::class,
            InertiaExtension::class
        ]
    ]
];