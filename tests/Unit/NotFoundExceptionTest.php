<?php

declare(strict_types = 1);

use PHPUnit\Framework\TestCase;
use DI\Exception\NotFoundException;

/**
 * Class NotFoundExceptionTest
 * @covers \DI\Exception\NotFoundException
 */
class NotFoundExceptionTest extends TestCase
{
    public function testMessage()
    {
        $exception = new NotFoundException('ID');
        $this->assertEquals('Not found `ID` key!', $exception->getMessage());
    }
}
