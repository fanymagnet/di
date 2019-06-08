--TEST--
echo - basic test for echo language construct
--FILE--
<?php

use DI\Container;

require 'vendor/autoload.php';

$container = new Container([
   'username' => 'root',
   'password' => 'password',
]);

echo $container->get('username');

?>
--EXPECT--
root