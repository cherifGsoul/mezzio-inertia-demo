<?php

declare(strict_types=1);

namespace App\Container;


use Fullpipe\TwigWebpackExtension\WebpackExtension;
use Psr\Container\ContainerInterface;

class WebpackExtensionFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $config = $container->get('config')['webpack'];
        return new WebpackExtension($config['manifest_file'], $config['public_dir']);
    }
}