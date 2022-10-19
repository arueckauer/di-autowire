<?php

declare(strict_types=1);

namespace App;

use Laminas\ServiceManager\Factory\InvokableFactory;
use OpsWay\Laminas\ServiceManager\Attributes\DI;

#[DI\Factory(InvokableFactory::class)]
class ServiceA
{
    public function invoke(): string
    {
        return __METHOD__;
    }
}
