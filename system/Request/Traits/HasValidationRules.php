<?php

namespace System\Request\Traits;


use System\Database\DBConnection\DBConnection;

trait HasValidationRules
{

    public function normalValidation($name, $rulesArray)
    {
        foreach ($rulesArray as $rule) {

            if ($rule == 'required') {

                $this->required($name);

            } elseif (strpos($rule, "max:") === 0) {

                $rule = str_replace('max:', "", $rule);
                $this->maxStr($name, $rule);

            } elseif (strpos($rule, "min:") === 0) {

                $rule = str_replace('min:', "", $rule);
                $this->minStr($name, $rule);

            } elseif (strpos($rule, "exists:") === 0) {

                $rule = str_replace('exists:', "", $rule);
                $rule = explode(',', $rule);
                $key = isset($rule[1]) == false ? null : $rule[1];
                $this->existsIn($name, $rule[0], $key);

            } elseif ($rule == 'email') {

                $this->email($name);

            } elseif ($rule == 'date') {

                $this->date($name);

            }


        }
    }


    public function numberValidation($name, $rulesArray): void
    {
        foreach ($rulesArray as $rule) {

            if ($rule == 'required') {

                $this->required($name);

            } elseif (strpos($rule, "max:") === 0) {

                $rule = str_replace('max:', "", $rule);
                $this->maxNumber($name, $rule);

            } elseif (strpos($rule, "min:") === 0) {

                $rule = str_replace('min:', "", $rule);
                $this->minNumber($name, $rule);

            } elseif (strpos($rule, "exists:") === 0) {

                $rule = str_replace('exists:', "", $rule);
                $rule = explode(',', $rule);
                $key = isset($rule[1]) == false ? null : $rule[1];
                $this->existsIn($name, $rule[0], $key);

            } elseif ($rule == 'number') {

                $this->number($name);

            }


        }
    }

    protected function required($name): void
    {
        // $name -> is name field come from post request
        // like name title age phone
        if ((!isset($this->request[$name]) or $this->request[$name] === '') && $this->checkFirstError($name)) {

            $this->setError($name, "$name is required");
        }
    }


    //// number/integer methods validation
    protected function maxNumber($name, $count): void
    {
        if ($this->checkFieldExists($name)) {

            if ($this->request[$name] >= $count && $this->checkFirstError($name)) {
                $this->setError($name, "max number equal or lower than $count");
            }
        }
    }

    protected function minNumber($name, $count): void
    {
        if ($this->checkFieldExists($name)) {

            if ($this->request[$name] <= $count && $this->checkFirstError($name)) {
                $this->setError($name, "min number equal or upper than $count");
            }
        }
    }

    protected function number($name): void
    {
        if ($this->checkFieldExists($name)) {
            if (!is_numeric($this->request[$name]) && $this->checkFirstError($name)) {
                $this->setError($name, "$name must be number format");
            }
        }
    }

    protected function date($name): void
    {
        if ($this->checkFieldExists($name)) {   // 1399-02-22 -> /^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/
            if (!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $this->request[$name])) {

                $this->setError($name, "$name not valid date format");
            };

        }
    }

    protected function email($name): void
    {
        if ($this->checkFieldExists($name)) {
            if (!filter_var($this->request[$name], FILTER_VALIDATE_EMAIL) && $this->checkFirstError($name)) {
                $this->setError($name, "$name not valid email format");
            }
        }
    }


    //// string methods validation
    protected function maxStr($name, $count): void
    {
        if ($this->checkFieldExists($name)) {

            if (strlen($this->request[$name]) >= $count && $this->checkFirstError($name)) {
                $this->setError($name, "max length equal or lower than $count characters");
            }
        }
    }

    protected function minStr($name, $count): void
    {
        if ($this->checkFieldExists($name)) {

            if (strlen($this->request[$name]) <= $count && $this->checkFirstError($name)) {
                $this->setError($name, "min length equal or upper than $count characters");
            }
        }
    }


    protected function existsIn($name, $table, $field_id = "id"): void
    {
        if ($this->checkFieldExists($name)) {
            if ($this->checkFirstError($name)) {

                $value = $this->$name;
                $sql = "SELECT COUNT(*) FROM $table WHERE $field_id = ? ";
                $statement = DBConnection::getDbConnectionInstance()->prepare($sql);
                $statement->execute([$value]);
                $result = $statement->fetchColumn();
                if($result == 0 or $result === false)
                {
                    $this->setError($name, "$name does not exists");
                }

            }
        }
    }
}