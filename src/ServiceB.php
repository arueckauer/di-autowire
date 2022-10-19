<?php

declare(strict_types=1);

namespace App;

use OpsWay\Laminas\ServiceManager\Attributes\DI;

#[DI\AutoWireFactory]
class ServiceB
{
    public function __construct(
        #[DI\InjectService(ServiceA::class)] private readonly ServiceA $myDependency,
    ) {
    }

    public function invoke(): string
    {
        return $this->myDependency->invoke();
    }
}
