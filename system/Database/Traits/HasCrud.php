<?php

namespace System\Database\Traits;

use System\Database\DBConnection\DBConnection;

trait HasCrud
{
    protected function createMethod($values): \System\Database\ORM\Model
    {
        $values = $this->arrayToCastEncodeValue($values);
        $this->arrayToAttributes($values,$this);
         return $this->save();
    }

    protected function updateMethod($values): \System\Database\ORM\Model
    {
        $values = $this->arrayToCastEncodeValue($values);
        $this->arrayToAttributes($values,$this);
        return $this->save();
    }

    // space in query string is very, very important
    //to config fillable[] property
    protected function fill(): string
    {
        // check attribute is in cast or not
        $fillArray = array();
        foreach ($this->fillable as $attribute) {
            if (isset($this->$attribute)) {
                $fillArray[] = $this->getAttributeName($attribute) . " = ?";
                // array_push($fillArray,$this->getAttributeName($attribute) . " = ?");
                //$this->inCastAttributes($attribute) == true
                $this->inCastAttributes($attribute) ?
                    $this->addValue($attribute, $this->castEncodeValue($attribute, $this->$attribute)) :
                    $this->addValue($attribute, $this->$attribute);
            }
        }
        return implode(', ', $fillArray);
    }


    protected function saveMethod(): \System\Database\ORM\Model
    {
        $fillString = $this->fill();
        // how find out we use this method
        // for save new model or update current model
        if (!isset($this->{$this->primaryKey})) {
            $this->setSql("INSERT INTO" . $this->getTableName() . " SET $fillString, " . $this->getAttributeName($this->createdAt) . "=Now()");

        } else {

            $this->setSql("UPDATE INTO" . $this->getTableName() . " SET $fillString, " . $this->getAttributeName($this->updatedAt) . "=Now()");
            $this->setWhere("AND", $this->getAttributeName($this->primaryKey) . " = ?");
            $this->addValue($this->primaryKey, $this->{$this->primaryKey});
            //  $this->primaryKey,$this->{$this->primaryKey}
            //  user->id = 2
            //  $this->primaryKey : user->id
            //  $this->{$this->primaryKey} 2
        }
        $this->executeQuery();
        $this->resetQuery();


        if (!isset($this->{$this->primaryKey})) {

            $object = $this->findMethod(DBConnection::newInsertId());
            // get default properties define in class & store in $defaultVars
            $defaultVars = get_class_vars(get_called_class());
            // get all properties define in obj of model/class & store in $allVars
            $allVars = get_object_vars($object);

            // compare to array and return different items
            $differentVars = array_diff(array_keys($allVars), array_keys($defaultVars));
            foreach ($differentVars as $attribute) {

                $this->inCastAttributes($attribute) ?
                    $this->registerAttribute($this, $attribute, $this->castEncodeValue($attribute, $object->$attribute)) :
                    $this->registerAttribute($this, $attribute, $object->$attribute);
            }

        }

        $this->resetQuery();
        $this->setAllowedMethods(['update', 'delete', 'find']);

        return $this;

    }

    protected function allMethod(): array
    {

        $this->setSql("SELECT * FROM " . $this->getTableName());
        $statement = $this->executeQuery();
        $data = $statement->fetchAll();
        if ($data) {
            $this->arrayToObjects($data);
            return $this->collection;
        }
        return [];

    }

    protected function findMethod($id)
    {
        $this->setSql("SELECT * FROM " . $this->getTableName());
        $this->setWhere("AND", $this->getAttributeName($this->primaryKey) . " = ? ");
        $this->addValue($this->primaryKey, $id);
        $statement = $this->executeQuery();
        $data = $statement->fetch();
        $this->setAllowedMethods(['update', 'delete', 'find']);
        if ($data) {
            return $this->arrayToAttributes($data);
        }
        return null;
    }


    protected function deleteMethod($id = null)
    {

        $object = $this; // refer to current model -> user / category / product
        $this->resetQuery();
        if ($id) {
            $object = $this->findMethod($id);
            $this->resetQuery();
        }

        $object->setSql("DELETE FROM " . $object->getTableName());
        $object->setWhere("AND", $this->getAttributeName($this->primaryKey) . " = ? ");
        $object->addValue($object->primaryKey, $object->{$object->primaryKey});

        return $object->executeQuery();

    }


    protected function whereMethod($attr, $firstValue, $secondValue = null): static
    {
        if ($secondValue === null) {
            $condition = $this->getAttributeName($attr) . ' = ?';
            // `users.id` = ?
            $this->addValue($attr, $firstValue);

        } else {

            $condition = $this->getAttributeName($attr) . ' ' . $firstValue . ' ?';
            // `user.id` <> ?
            $this->addValue($attr, $secondValue);
        }

        $operator = 'AND';
        $this->setWhere($operator, $condition);
        // this methods like laravel us method chaining
        $this->setAllowedMethods(['get', 'where', 'whereOr',
            'whereIn', 'whereNull', 'whereNotNull', 'limit',
            'orderBy', 'get', 'paginate', 'find']);

        // find out what is $this on return
        return $this;
    }

    protected function whereOrMethod($attr, $firstValue, $secondValue = null): static
    {
        if ($secondValue === null) {
            $condition = $this->getAttributeName($attr) . ' = ?';
            // `users.id` = ?
            $this->addValue($attr, $firstValue);

        } else {

            $condition = $this->getAttributeName($attr) . ' ' . $firstValue . ' ?';
            // `user.id` <> ?
            $this->addValue($attr, $secondValue);
        }

        $operator = 'OR';
        $this->setWhere($operator, $condition);
        $this->setAllowedMethods(['get', 'where', 'whereOr',
            'whereIn', 'whereNull', 'whereNotNull',
            'limit', 'orderBy', 'get', 'paginate', 'find']);
        return $this;
    }

    protected function whereNullMethod($attr): static
    {
        $condition = $this->getAttributeName($attr) . ' IS NULL ';
        $operator = 'AND';
        $this->setWhere($operator, $condition);
        $this->setAllowedMethods(['get', 'where', 'whereOr', 'whereIn', 'whereNull', 'whereNotNull', 'limit', 'orderBy', 'get', 'paginate', 'find']);
        return $this;
    }

    protected function whereNotNullMethod($attr): static
    {
        $condition = $this->getAttributeName($attr) . ' IS NOT NULL ';
        $operator = 'AND';
        $this->setWhere($operator, $condition);
        $this->setAllowedMethods(['get', 'where', 'whereOr', 'whereIn', 'whereNull', 'whereNotNull', 'limit', 'orderBy', 'get', 'paginate', 'find']);

        // because method chaining we return result
        // this method for use for other method
        return $this;
    }


    protected function whereInMethod($attr, $values)
    {
        // country -> attr in usa,germany,france -> values
        if (is_array($values)) {
            $valuesArray = [];
            foreach ($valuesArray as $value) {
                $this->addValue($attr, $value);
                $valuesArray[] = '?';
                //  array_push($valuesArray,'?');
            }
            // all condition or all query is string
            // and , you should make and string "select * from users"
            $condition = $this->getAttributeName($attr) . ' IN (' . implode(' , ', $valuesArray) . ')';
            $operator = 'AND';
            $this->setWhere($operator, $condition);
            $this->setAllowedMethods(['get', 'where', 'whereOr',
                'whereIn', 'whereNull', 'whereNotNull',
                'limit', 'orderBy', 'get', 'paginate', 'find']);
            // because method chaining we return result
            // this method for use for other method
            return $this;
        }
    }

    protected function orderByMethod($attr, $expression): static
    {
        $this->setOrderBy($attr, $expression);
        $this->setAllowedMethods(['limit', 'orderBy', 'get', 'paginate']);
        // because method chaining we return result
        // this method for use for other method
        return $this;

    }

    protected function limitMethod($from, $number): static
    {
        $this->setLimit($from, $number);
        $this->setAllowedMethods(['limit', 'get', 'paginate']);
        // because method chaining we return result
        // this method for use for other method
        return $this;
    }

    protected function getMethod($array = []): array
    {
        // $array = []; determine specifics column
        if ($this->sql == '') {
            if (empty($array)) {
                $fields = $this->getTableName() . '.*';
            } else {
                foreach ($array as $key => $value) {
                    $array[$key] = $this->getAttributeName($value);
                    // users.email
                }
                $fields = implode(' , ',$array);
                // select email,first_name,age from users
            }
            $this->setSql("SELECT $fields FROM".$this->getTableName());
        }
        $statement = $this->executeQuery();
        $data = $statement->fetchAll();
        if ($data) {
            $this->arrayToObjects($data);
            return $this->collection;
        }
        return [];
    }


    protected function paginateMethod(int $perPage = null): array
    {
        $totalRows = $this->getCount();
        $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $totalPages = ceil($totalRows / $perPage);
        $currentPage = min($currentPage,$totalPages);
        $currentPage = max($currentPage,1);
        $currentRow = ($currentPage - 1) * $perPage;
        $this->limitMethod($currentRow,$perPage);

        if($this->sql == '')
        {
            $this->setSql("SELECT ".$this->getTableName().".* FROM ".$this->getTableName());
        }

        $statement = $this->executeQuery();
        $data = $statement->fetchAll();
        if ($data) {
            $this->arrayToObjects($data);
            return $this->collection;
        }
        return [];
    }



}
