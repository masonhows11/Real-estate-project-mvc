<?php

namespace System\Application;

use ReflectionException;

class Application{

    /**
     * @throws ReflectionException
     */
    public function __construct()
    {
        $this->loadProviders();
        $this->loadHelpers();
        $this->registerRoutes();
        $this->routing();
    }

    private function loadProviders(): void
    {
        $appConfigs = require dirname(__DIR__, 2) .'/config/app.php';
        $providers = $appConfigs['providers'];
        // call & run each provider -> make obj from provider item array
        // & call boot method
        foreach ($providers as $provider){

            $providerObj = new $provider();
            $providerObj->boot();
        }
    }

    private function loadHelpers(): void
    {
        // load default helpers with require_once
        require_once(dirname(__DIR__).'/Helpers/helper.php');
        // to add & load custom helper do this
        if(file_exists(dirname(__DIR__, 2) .'/app/Http/Helpers.php')){
            require_once(dirname(__DIR__, 2) .'/app/Http/Helpers.php');
        }
    }

    private function registerRoutes(): void
    {
        global $routes;
        $routes = [
            'get' => [],
            'post' => [],
            'put' => [],
            'delete' => [],
        ];
        require_once(dirname(__DIR__, 2) .'/routes/web.php');
        require_once(dirname(__DIR__, 2) .'/routes/api.php');
    }

    /**
     * @throws ReflectionException
     */
    private function routing(): void
    {
        // run routing sys
        $routing = new \System\Router\Routing();
        $routing->run();
    }

}