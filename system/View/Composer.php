<?php

namespace System\View;

/**
 * @method static getParams()
 * @method static setViews(array $viewNameArray)
 */
class Composer
{

    private static $instance;
    private array $variablesData = [];
    private array $viewArray = [];

    private function __construct()
    {

    }

    private function registerView($name, $callback): void
    {
        if (in_array(str_replace('.', '/', '$name'), $this->viewArray) || $name == '*') {

            // $callback() get variables we want pass to view/view's in composer by $callback()
            // then put them to $viewVars
            $viewVars = $callback();

            foreach ($viewVars as $key => $value) {

                $this->variablesData[$key] = $value;
                //// store below data as key->value into $vars
                //// pass these variables to view/views
                //      "sumArea"       => $sumArea,
                //      "usersCount"    => $usersCount,
                //      "adsCount"      => count($ads),
                //      "postsCount"    => $postsCount
            }
            if (isset($this->viewArray[$name])) {   // for prevent set view name in composer view method
                unset($this->viewArray[$name]);
            }
        }
    }


    private function setViewArray($viewArray): void
    {
        $this->viewArray = $viewArray;

    }

    private function getViewParams(): array
    {
        return $this->variablesData;
    }

    public static function __callStatic($name, $arguments)
    {
        $instance = self::getInstance();

        return match ($name) {
            "view" => call_user_func_array(array($instance, "registerView"), $arguments),
            "setViews" => call_user_func_array(array($instance, "setViewArray"), $arguments),
            "getParams" => call_user_func_array(array($instance, "getViewParams"), $arguments),
        };
    }

    // singleton method
    private static function getInstance(): Composer
    {
        if(empty(self::$instance))
            self::$instance = new self;
        return self::$instance;

        //        if (empty(self::$instance)) {
        //            self::$instance = new self;
        //            return self::$instance;
        //        }else
        //            return  self::$instance;

    }

}