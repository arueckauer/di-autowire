<?php

declare(strict_types=1);

use Psr\Container\ContainerInterface;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$container = require dirname(__DIR__) . '/config/container.php';
assert($container instanceof ContainerInterface);
