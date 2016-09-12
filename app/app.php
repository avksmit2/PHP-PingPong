<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/PingPong.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TiwgServiceProvider(), array('tiwg.path' => __DIR__.'/../views'));
?>
