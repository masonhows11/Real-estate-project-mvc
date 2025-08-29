<?php

namespace System\Router\Web;


class Route
{

    public static function get($url, $controller, $name = null): void
    {


        $handler = explode('@', $controller);
        $controller = $handler[0];
        $method = $handler[1];

        // below line put all get routes in routes['get'] array
        global $routes;
        if ($url == "/")
        {
            $routes['get'][] = array('url' =>"/", 'class' => $controller, 'method' => $method, 'name' => $name);
        } else {
            $routes['get'][] = array('url' => trim($url, "/ "), 'class' => $controller, 'method' => $method, 'name' => $name);
        }


        //$routes['get'][] = array('url' => trim($url, "/ "), 'class' => $controller, 'method' => $method, 'name' => $name);

    }

    public static function post($url, $controller, $name = null): void
    {


        $handler = explode('@', $controller);
        $controller = $handler[0];
        $method = $handler[1];

        // below line put all post routes in routes['get'] array
        global $routes;
        $routes['post'][] = array('url' => trim($url, "/ "), 'class' => $controller, 'method' => $method, 'name' => $name);

    }

    public static function put($url, $controller, $name = null): void
    {


        $handler = explode('@', $controller);
        $controller = $handler[0];
        $method = $handler[1];

        // below line put all put routes in routes['get'] array
        global $routes;
        $routes['put'][] = array('url' => trim($url, "/ "), 'class' => $controller, 'method' => $method, 'name' => $name);

    }


    public static function delete($url, $controller, $name = null): void
    {


        $handler = explode('@', $controller);
        $controller = $handler[0];
        $method = $handler[1];

        // below line put all delete routes in routes['get'] array
        // array_push($routes['get'], array('url' => trim($url, "/ "), 'class' => $controller, 'method' => $method, 'name' => $name));
        global $routes;
        $routes['delete'][] = array('url' => trim($url, "/ "), 'class' => $controller, 'method' => $method, 'name' => $name);

    }


}