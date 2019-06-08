<?php

declare(strict_types = 1);

use DI\Container;
use PHPUnit\Framework\TestCase;
use DI\Exception\NotFoundException;

/**
 * Class ContainerTest
 * @covers \DI\Container
 */
class ContainerTest extends TestCase
{
    public function testGetDependency()
    {
        $this->expectException(NotFoundException::class);
        $this->expectExceptionMessage('Not found `InvalidId` key!');

        $container = new Container([]);
        $container->get('InvalidId');
    }
}
