<?php

namespace System\Database\Traits;
trait HasMethodCaller
{


    private array $allMethods =
        ['create', 'update', 'delete', 'all', 'find', 'save',
            'where', 'whereOr', 'whereIn', 'whereNull', 'whereNotNull',
            'limit', 'limit', 'orderBy', 'get', 'paginate'];


    // setAllowedMethods
    private array $AllowedMethods = ['create', 'update', 'delete', 'all', 'find', 'save',
        'where', 'whereOr', 'whereIn', 'whereNull', 'whereNotNull',
        'limit', 'limit', 'orderBy', 'get', 'paginate'];


    //// use magic method for call / execute doesn't exist method
    public function __call(string $method, array $arguments)
    {
        return $this->methodCaller($this, $method, $arguments);
    }

    public static function __callStatic(string $method, array $arguments)
    {
        // use like this user::find(1)
        $className = get_called_class();
        $instance = new $className;
        return $instance->methodCaller($instance, $method, $arguments);
    }

    protected function methodCaller($object, $method, $args)
    {
        $suffix = 'Method';
        $methodName = $method.$suffix;

        // return $methodName;
        if (in_array($method,$this->AllowedMethods)) {
            // return means : return the result of current method to next method
            return call_user_func_array(array($object, $methodName), $args);
        } else {
            return "$methodName does not exists";
        }

    }


    protected function setAllowedMethods($array): void
    {
        $this->AllowedMethods = $array;
    }


}