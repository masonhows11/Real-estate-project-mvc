<?php

namespace System\Router;

use ReflectionMethod;
use System\Config\Config;

class Routing
{

    private $current_route;
    private $method_type;
    private $routes;
    private $values = [];

    public function __construct()
    {
        //
        $this->current_route = explode('/', Config::get('app.CURRENT_ROUTE'));
        //
        $this->method_type = $this->methodField();
        // get global routes value in config/app file
        // and put into this $routes variable
        global $routes;
        $this->routes = $routes;
        // var_dump($this->routes);
    }

    private function methodField()
    {
        $method = strtolower($_SERVER['REQUEST_METHOD']);

        if ($method == 'post') {

            if (isset($_POST['_method'])) {

                if ($_POST['_method'] == 'put') {

                    $method = 'put';

                } elseif ($_POST['_method'] == 'delete') {

                    $method = 'delete';
                }

            }

        }
        return $method;
    }


    public function match()
    {

        // read all get method , for example
        // means route start with get method type
        // & we get all routes start with Route::get()

        $reservedRoutes = $this->routes[$this->methodField()];

        foreach ($reservedRoutes as $reservedRoute) {

            if ($this->compare($reservedRoute['url']) == true) {

                // get controller & method name from route reserved
                return ["class" => $reservedRoute["class"], "method" => $reservedRoute["method"]];

            } else {

                $this->values = [];
            }
        }
        return [];

    }


    public function compare($reservedRouteUrl)
    {
        // check / after domain name
        if (trim($reservedRouteUrl, '/') === '') {

            return trim($this->current_route[0], '/') === '' ? true : false;

        }

        // compare to route with by array & size array items
        $reservedRouteUrlArray = explode('/', $reservedRouteUrl);
        if (sizeof($this->current_route) != sizeof($reservedRouteUrlArray)) {

            return false;

        }


        // compare current route & reservedRoute every item must be equal
        foreach ($this->current_route as $key => $currentRouteElement) {

            $reservedRouteUrlElement = $reservedRouteUrlArray[$key];

            // to findOut is there any variable in current route ? like {id} / {name}
            // for check first & last character in each item is "{}"
            // -1 in second substr in last character
            if (substr($reservedRouteUrlElement, 0, 1) == "{" && substr($reservedRouteUrlElement, 0, -1) == "}") {
                // push value in route variable in values array
                array_push($this->values, $currentRouteElement);

            } elseif ($reservedRouteUrlElement != $currentRouteElement) {
                return false;
            }

            return true;

        }


    }

    public function error404()
    {
        // __DIR__ -> return current directory path
        http_response_code(404);
        include __DIR__ . DIRECTORY_SEPARATOR . 'View' . '/404.php';
        exit();

    }

    public function run()
    {


        $match = $this->match();

        if (empty($match)) {

            $this->error404();
        }



        // call controller class if exists
        $controllerPath = str_replace('\\', '/', $match["class"]);
        // var_dump($controllerPath);
        $path = BASE_DIR."/app/Http/Controllers/".$controllerPath.".php";
        // var_dump($path);
        // if don't exists
        if (!file_exists($path)) {
            $this->error404();
        }

        // create instance from founded class controller
        // then get method & execute method
        $class = "\App\Http\Controllers\\".$match["class"];
        $obj = new $class();
        if (method_exists($obj, $match['method'])) {

            // this for make content on instagram
            $reflection = new ReflectionMethod($class, $match["method"]);
            $parameterCount = $reflection->getNumberOfParameters();
            ////
            if ($parameterCount <= count($this->values)) {
                call_user_func_array(array($obj, $match["method"]), $this->values);
            } else {
                $this->error404();
            }
            ////

        } else {

            $this->error404();

        };

    }

}