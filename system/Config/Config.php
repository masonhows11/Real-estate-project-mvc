<?php

namespace System\Config;

use Exception;

class Config
{


    private static $instance;

    private array $config_nested_array = [];
    private array $config_dot_array = [];



    /**
     * Class constructor.
     */
    private function __construct()
    {
        $this->initialConfigArrays();
    }


    private function initialConfigArrays(): void
    {

         // dirname -> Returns a parent directory's path
        $configPath = dirname(dirname(__DIR__)).'/config';
        // read all config php files from config dir as array
        foreach (glob($configPath.'*.php') as $filename)
        {
            // get file content and put into $config var
            $config = require $filename;
            $key = $filename;
            $key = str_replace($configPath,"",$key);
            $key = str_replace('.php',"",$key);

            $this->config_nested_array[$key] = $config;
        }

        $this->initialDefaultValues();
        $this->config_dot_array = $this->array_dot($this->config_nested_array);

    }

    private function array_dot($array, $return_array = array(), $return_key = ''): array
    {
        // make config item with dot like
        // app.app_title or mail.SMTP.host
        foreach ($array as $key => $value){

            if(is_array($value))
            {
                // if we have nested array
                // we call array_dot like recursive method
                $return_array = array_merge($return_array,$this->array_dot($value,$return_array,$return_key.$key.'.'));

            }else{

                // example  ['APP_TITLE'] => 'mvc project',
                $return_array[$return_key . $key] = $value;

            }
        }

        return  $return_array;
    }

    private function initialDefaultValues(): void
    {

        $temporary = str_replace($this->config_dot_array['app']['BASE_URL'],'',explode('?',$_SERVER['REQUEST_URI'][0]));
        $temporary === "/" ? $temporary = "" : $temporary = substr($temporary,1);
        // make current_route & add into app file in array
        $this->config_nested_array['app']['CURRENT_ROUTE'] = $temporary;
    }




    private static function getInstance(): Config
    {
            if(empty(self::$instance))
            {
                self::$instance = new self;
            }

            return self::$instance;
    }


    /**
     * @throws Exception
     */
    public static function get($key)
    {
        $instance = self::getInstance();
        if(isset($instance->config_dot_array[$key])){

            return $instance->config_dot_array[$key];

        }else{

            throw new Exception('"'. $key .'" not exist in config ');
        }
    }
    

}