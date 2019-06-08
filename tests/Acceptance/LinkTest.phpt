--TEST--
echo - basic test for echo language construct
--FILE--
<?php

use DI\Container;

require 'vendor/autoload.php';

$container = new Container([
    'a' => 'a',
    'b' => 'b',
    'i' => new \DI\Loader\Alias('a')
]);

echo $container->get('i');

?>
--EXPECT--
a