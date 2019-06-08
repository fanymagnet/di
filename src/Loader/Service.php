<?php

namespace DI\Loader;

use DI\LoaderInterface;
use Psr\Container\ContainerInterface;
use Closure;

class Service implements LoaderInterface
{
    /**
     * @var Closure
     */
    public $closure;

    public function __construct(Closure $closure)
    {
        $this->closure = $closure;
    }

    public function __invoke(ContainerInterface $container)
    {
        return ($this->closure) ($container);
    }
}
