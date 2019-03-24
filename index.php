<?php
error_reporting(E_ALL);
ini_set('display_errors', 1); // DEV ENV

require "rout/main.php";

$app = new Rout();

$app->get("/", function () use ($app) {
    $r = array('msg' => 'Hello');
    $app->render("home.php", $r);
});
