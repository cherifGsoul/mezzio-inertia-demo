<?php

declare(strict_types=1);

return [
    'webpack' => [
        'manifest_file' => dirname(__DIR__, 2) . '/public/build/manifest.json',
        'public_dir' => dirname(__DIR__, 2) . '/build',
    ]
];
