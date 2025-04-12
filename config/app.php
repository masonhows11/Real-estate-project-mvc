<?php
// rewrite config

return [

    'APP_TITLE' => 'mvc project',

    'BASE_URL' => 'http://localhost:8000',

    define("BASE_DIR", realpath(__DIR__ . "/../")),


    // providers
    // register providers
    'providers' => [
        \App\Providers\SessionProvider::class,
        \App\Providers\AppServiceProvider::class,
    ],



];

// 'BASE_DIR' => dirname(__DIR__),
// const BASE_URL = 'http://phpmvc.test';

// get current route name
// $raw_uri = explode('?', $_SERVER['REQUEST_URI'][0]);

//$temporary_url = str_replace(BASE_URL, '', explode('?', $_SERVER['REQUEST_URI'])[0]);
//
//$temporary_url === "/" ? $temporary_url = "" : $temporary_url = substr($temporary_url, 1);
//
//define("CURRENT_ROUTE", $temporary_url);
//
//
//global $routes;
//
//$routes = [
//    'get' => [],
//    'post' => [],
//    'put' => [],
//    'delete' => [],
//];
