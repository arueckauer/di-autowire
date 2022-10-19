<?php

declare(strict_types=1);

use App\ServiceA;
use Psr\Container\ContainerInterface;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$container = require dirname(__DIR__) . '/config/container.php';
assert($container instanceof ContainerInterface);

$serviceA = $container->get(ServiceA::class);
assert($serviceA instanceof ServiceA);

echo $serviceA->invoke() . PHP_EOL;
