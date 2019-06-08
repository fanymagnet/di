--TEST--
echo - basic test for echo language construct
--FILE--
<?php

use DI\Container;

require 'vendor/autoload.php';

$container = new Container([
    'database' => 'db',
    'username' => 'root',
    'password' => 'password',
    'host' => '127.0.0.1',
    'driver' => 'mysql',
    'options' => [],
    'dsn' => function (Container $container) {
        return "{$container->get('driver')}:dbname={$container->get('database')};host={$container->get('host')}";
    },
    \DI\tests\DB::class => function (Container $container) {
        return new \DI\tests\DB(
            $container->get('dsn'),
            $container->get('username'),
            $container->get('password'),
            $container->get('options'),
        );
    }
]);

/* @var $db \DI\tests\DB */
$db = $container->get(\DI\tests\DB::class);
echo "{$db->dsn} {$db->username} {$db->password}";
?>
--EXPECT--
mysql:dbname=db;host=127.0.0.1 root password