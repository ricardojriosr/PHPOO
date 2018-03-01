<?php
/*
include "foo.php";
include "bar.php";
*/

spl_autoload_register(function($classname) {
    include $classname . ".php";
});

$foo = new Foo;
$bar = new Bar;

$foo->sayHello();
echo '<br>';
$bar->sayHello();
?>
