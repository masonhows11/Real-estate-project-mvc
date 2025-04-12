<?php

namespace System\Database\Traits;

trait HasAttributes
{
    private function registerAttribute($object, string $attribute, $value): void
    {

        // like cast in laravel cast to get or cast to write
        // $object->$attribute example $user->name or $product->price
        // $this->inCastAttributes($attribute) == true

        $this->inCastAttributes($attribute) ?

            $object->$attribute = $this->castDecodeValue($attribute, $value) :

            $object->$attribute = $value;

    }


    // final result is object
    protected function arrayToAttributes(array $array, $object = null)
    {

        // creat first array from object in final result query as collection
        // like 0 = [
        //  name => ali001,
        //  f_name => ali,
        //  l_name => hasany,
        //  phone => 5551212,
        //  ]

        if (!$object)
        {
            $className = get_called_class();
            $object = new $className;
        }
        foreach ($array as $attribute => $value) {
                // $user->name = ali
                // attribute : $user->name
                // $value : ali
                // check if attribute is hidden not show in array
            if ($this->inHiddenAttributes($attribute))
                continue;
            $this->registerAttribute($object,$attribute,$value);
        }
        return $object;
    }


    // convert array to object
    protected function arrayToObjects(array $array): void
    {

        // creat nested array level
        // and final collection
        $collection = [];

        foreach ($array as $value){
            $object = $this->arrayToAttributes($value);
            $collection[] = $object;
            // array_push($collection,$object);
        }
        $this->collection = $collection;
    }


    // hidden attribute/column
    private function inHiddenAttributes($attribute): bool
    {
        return in_array($attribute,$this->hidden);
    }

    // attribute/column need cast means convert
    private function inCastAttributes($attribute): bool
    {
        return in_array($attribute,array_keys($this->casts));
    }

    private function castDecodeValue($attributeKey,$value)
    {
        // unserialize -> for read the data

        if($this->casts[$attributeKey] == 'array' || $this->casts[$attributeKey] == 'object' )
        {
            return unserialize($value);
        }

        return  $value;
    }

    private function castEncodeValue($attributeKey,$value)
    {
        // serialize -> for store the data

        if($this->casts[$attributeKey] == 'array' || $this->casts[$attributeKey] == 'object' )
        {
            return serialize($value);
        }

        return  $value;
    }


    protected function arrayToCastEncodeValue($values): array
    {
        $newArray = [];
        foreach ($values as $attribute => $value)
        {
            $this->inCastAttributes($attribute) ?
                $newArray[$attribute] = $this->castEncodeValue($attribute,$value) :
                $newArray[$attribute] = $value;
        }

        return $newArray;
    }
}