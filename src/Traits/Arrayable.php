<?php

declare(strict_types=1);

namespace Git_zjx\Supports\Traits;

use ReflectionClass;
use Git_zjx\Supports\Str;

trait Arrayable
{
    /**
     * toArray.
     *
     * @author Git_zjx <me@Git_zjx.cn>
     *
     * @throws \ReflectionException
     */
    public function toArray(): array
    {
        $result = [];

        foreach ((new ReflectionClass($this))->getProperties() as $item) {
            $k = $item->getName();
            $method = 'get'.Str::studly($k);

            $result[Str::snake($k)] = method_exists($this, $method) ? $this->{$method}() : $this->{$k};
        }

        return $result;
    }
}
