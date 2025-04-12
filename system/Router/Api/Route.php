<?php

namespace System\Router\Api;


class Route
{

    public static function get($url, $executeMethod, $name = null)
    {


        $handler = explode('@', $executeMethod);
        $controller = $handler[0];
        $method = $handler[1];

        // below line put all get routes in routes['get'] array
        global $routes;
        array_push($routes['get'], array('url' => "/api/".trim($url, "/ "), 'class' => $controller, 'method' => $method, 'name' => $name));

    }

    public static function post($url,$executeMethod, $name = null)
    {


        $handler = explode('@', $executeMethod);
        $controller = $handler[0];
        $method = $handler[1];

        // below line put all post routes in routes['get'] array
        global $routes;
        array_push($routes['get'], array('url' => "/api/".trim($url, "/ "), 'class' => $controller, 'method' => $method, 'name' => $name));

    }

    public static function put($url, $executeMethod, $name = null)
    {



        $handler = explode('@', $executeMethod);
        $controller = $handler[0];
        $method = $handler[1];

        // below line put all put routes in routes['get'] array
        global $routes;
        array_push($routes['get'], array('url' => "/api/".trim($url, "/ "), 'class' => $controller, 'method' => $method, 'name' => $name));

    }


    public static function delete($url, $executeMethod, $name = null)
    {
        

        $handler = explode('@', $executeMethod);
        $controller = $handler[0];
        $method = $handler[1];

        // below line put all delete routes in routes['get'] array
        global $routes;
        array_push($routes['get'], array('url' => "/api/".trim($url, "/ "), 'class' => $controller, 'method' => $method, 'name' => $name));

    }


}