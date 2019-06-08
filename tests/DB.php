<?php

namespace DI\tests;

class DB
{
    public $dsn;
    public $username;
    public $password;
    public $options;

    public function __construct(string $dns, string $username, string $password, array $options = [])
    {
        $this->dsn = $dns;
        $this->username = $username;
        $this->password = $password;
        $this->options = $options;
    }
}