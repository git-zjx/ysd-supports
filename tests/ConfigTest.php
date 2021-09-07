<?php

namespace Git_zjx\Supports\Tests;

use Git_zjx\Supports\Collection;
use Git_zjx\Supports\Config;

class ConfigTest extends TestCase
{
    public function testBootstrap()
    {
        $config = [];

        $this->assertInstanceOf(Collection::class, new Config($config));
    }
}
