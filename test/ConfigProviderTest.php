<?php

declare(strict_types=1);

namespace AppTest;

use App\ConfigProvider;
use PHPUnit\Framework\TestCase;

class ConfigProviderTest extends TestCase
{
    public function test___invoke(): void
    {
        $actual = (new ConfigProvider())->__invoke();

        self::assertArrayHasKey('dependencies', $actual);
        self::assertArrayHasKey('factories', $actual['dependencies']);
    }
}
