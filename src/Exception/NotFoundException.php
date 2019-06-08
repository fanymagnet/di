<?php

namespace DI\Exception;

use RuntimeException;
use Psr\Container\NotFoundExceptionInterface;

class NotFoundException extends RuntimeException implements NotFoundExceptionInterface
{
    public function __construct($id)
    {
        parent::__construct("Not found `$id` key!");
    }
}
