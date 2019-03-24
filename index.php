<?php

// to run: php -S 127.0.0.1:8000 and access the endpoints

error_reporting(E_ALL);
ini_set('display_errors', 1); // DEV ENV

require "rout/main.php";

$app = new Rout();

$app->get("/", function () use ($app) {
    $r = array('msg' => 'Hello');
    $app->render("home.php", $r);
});

$app->get("/hello", function () use ($app) {
    $r = array('msg' => 'World');
    $app->render("home.php", $r);
});

$app->get("/hello/world", function () use ($app) {
    $r = array('msg' => 'Hello world');
    $app->render("home.php", $r);
});

$app->post("/post", function($r) use ($app) {
    $app->render("home.php", $r);
});
 