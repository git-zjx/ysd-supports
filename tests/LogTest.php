<?php

namespace Git_zjx\Supports\Tests;

use Git_zjx\Supports\Log;

class LogTest extends TestCase
{
    public function testDebug()
    {
        $this->assertNull(Log::debug('test debug', ['foo' => 'bar']));

        $log = Log::getInstance();
        $this->assertNull($log->debug('test debug', ['foo' => 'bar']));
    }
}
