<?php

namespace System\Router;

use Exception;
use JetBrains\PhpStorm\NoReturn;
use ReflectionException;
use ReflectionMethod;
use System\Config\Config;

class Routing
{

    private array $current_route;
    private string $method_field;
    private $routes;
    private array $values = [];

    /**
     * @throws Exception
     */
    public function __construct()
    {



        $this->current_route = explode('/', Config::get('app.CURRENT_ROUTE'));
        $this->method_field = $this->methodField();
        // get global routes value in config/app file
        // and put into this $routes variable
        global $routes;
        $this->routes = $routes;

    }

    /**
     * @throws ReflectionException
     * @throws Exception
     */
    public function run(): void
    {


        $match = $this->match();

        if (empty($match)) {


            $this->error404();
        }

        // dd($match);
        // call controller class if exists
        $controllerPath = str_replace('\\', '/', $match["class"]);
        // var_dump($controllerPath);
        $path = Config::get('app.BASE_DIR') . "/app/Http/Controllers/" . $controllerPath . ".php";
        // if don't exists
        if (!file_exists($path))
        {

            $this->error404();
        }

        // create instance from founded class controller
        // then get method & execute method
        $class = "\App\Http\Controllers\\" . $match["class"];
        $obj = new $class();
        if (method_exists($obj, $match['method'])) {

            $reflection = new ReflectionMethod($class, $match["method"]);

            $parameterCount = $reflection->getNumberOfParameters();

            if ($parameterCount <= count($this->values)) {
                call_user_func_array(array($obj, $match["method"]), $this->values);
            } else {

                dd('this 3');
                $this->error404();
            }

        } else {



            $this->error404();

        };

    }

    public function match(): array
    {
        // read all get method , for example
        // means route start with get method type
        // & we get all routes start with Route::get()
        // $this->routes is array that contain routes
        // with http verb like get post


        $reservedRoutes = $this->routes[$this->method_field];



        foreach ($reservedRoutes as $reservedRoute) {

            if ($this->compare($reservedRoute['url'])) {

                // get controller & method name from route reserved
                return ["class" => $reservedRoute["class"], "method" => $reservedRoute["method"]];

            } else {

                $this->values = [];
            }
        }
        return [];

    }

    public function compare($reservedRouteUrl): ?bool
    {

        //// part 1
        // check / after domain name between current url & reserved url
        if (trim($reservedRouteUrl, '/') === '') {
            return trim($this->current_route[0], '/') === '';
        }


        //// part 2
        // compare to route with by array & size array items
        $reservedRouteUrlArray = explode('/', $reservedRouteUrl);
        if (sizeof($this->current_route) != sizeof($reservedRouteUrlArray)) {
            return false;
        }



        //part3
        foreach ($this->current_route as $key => $currentRouteElement) {
            $reservedRouteUrlElement = $reservedRouteUrlArray[$key];
            if(str_starts_with($reservedRouteUrlElement, "{") && str_ends_with($reservedRouteUrlElement, "}"))
            {
                $this->values[] = $currentRouteElement;
            }
            elseif($reservedRouteUrlElement != $currentRouteElement)
            {
                return false;
            }
        }
        return true;

    }

    private function methodField(): string
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
        // dd($method);
        return $method;
    }


    #[NoReturn] public function error404(): void
    {
        // __DIR__ -> return current directory path
        http_response_code(404);
        include __DIR__ . DIRECTORY_SEPARATOR . 'View' . '/404.php';
        exit();

    }




}