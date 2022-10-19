<?php

declare(strict_types=1);

use Laminas\ConfigAggregator\ArrayProvider;
use Laminas\ConfigAggregator\ConfigAggregator;
use Laminas\ConfigAggregator\PhpFileProvider;
use OpsWay\Laminas\ServiceManager\Attributes\AutoWireConfigBuilder;
use OpsWay\Laminas\ServiceManager\Attributes\DI\AttributeScanner;

$cacheConfig = [
    'config_cache_path' => 'data/cache/config-cache.php',
];

$builder = new AutoWireConfigBuilder(
    new AttributeScanner('App')
);

$aggregator = new ConfigAggregator([
    // App
    App\ConfigProvider::class,

    // AutoWire
    new ArrayProvider([
        'dependencies' => $builder->getDependencies(),
    ]),
    new ArrayProvider($builder->getConfig()),

    // Configuration
    new PhpFileProvider(realpath(__DIR__) . '/autoload/{{,*.}global,{,*.}local}.php'),

    // Load development config if it exists
    new PhpFileProvider(realpath(__DIR__) . '/development.config.php'),
]);

return $aggregator->getMergedConfig();
