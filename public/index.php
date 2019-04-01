<?php

require '../vendor/autoload.php';

$test = new \App\Wcs\Hello();
    echo $test->talk();


    echo '<br>';

$helloWorld = new \HelloWorld\SayHello();
    echo $helloWorld->world();
