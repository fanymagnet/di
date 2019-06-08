<?php

declare(strict_types = 1);

namespace DI;

use DI\Exception\NotFoundException;
use Psr\Container\ContainerInterface;

class Container implements ContainerInterface
{
    private $values;

    public function __construct(array $values)
    {
        $this->values = $values;
    }

    public function get($id)
    {
        if ($this->has($id) === false) {
            throw new NotFoundException($id);
        }

        if ($this->values[$id] instanceof \Closure) {
            return $this->values[$id] ($this);
        }

        return $this->values[$id];
    }

    public function has($id)
    {
        return array_key_exists($id, $this->values);
    }
}
