<?php

namespace System\View;

class Composer
{

    private static $instance;

    private array $vars = [];

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

                $this->vars[$key] = $value;
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

    private function getViewVars(): array
    {
        return $this->vars;
    }

    public static function __callStatic($name, $args)
    {
        $instance = self::getInstance();
        switch ($name) {

            case "view":
                return call_user_func_array(array($instance,"registerView"), $args);
                break;
            case "setViews":
                return call_user_func_array(array($instance,"setViewArray"), $args);
                break;
            case "getVars":
                return call_user_func_array(array($instance,"getViewVars"), $args);
                break;
        }
    }

    // singleton method
    private static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new self;
            return self::$instance;
        }
    }

}