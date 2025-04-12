<?php

namespace System\Request;


use System\Request\Traits\HasFileValidationRules;
use System\Request\Traits\HasRunValidation;
use System\Request\Traits\HasValidationRules;

class Request
{

    use HasValidationRules, HasRunValidation, HasFileValidationRules;


    protected bool $errorExist = false;

    protected array $request;

    protected array $files;

    protected array $errorVariableName = [];


    public function __construct()
    {
        if (isset($_POST)) {
            $this->postAttributes();
        }
        if (!empty($_FILES)) {
            $this->files = $_FILES;
        }

        $rules = $this->rules();
        empty($rules) ?: $this->run($rules);

        $this->errorRedirect();
    }

    protected function rules(): array
    {
        return [];
    }

    public function file($name)
    {
        return isset($this->files[$name]) ? $this->files[$name] : false;
    }

    protected function postAttributes(): void
    {
        // key -> value = first_name : hassan
        foreach ($_POST as $key => $value) {
            $this->$key = htmlentities($value);
            $this->request[$key] = htmlentities($value);
        }
    }

    public function all(): array
    {
        return $this->request;
    }


    protected function run($rules): void
    {
        foreach ($rules as $att => $values) {

            $rulesArray = explode('|', $values);
            if (in_array('file', $rulesArray))
            {
                unset($rulesArray[array_search('file',$rulesArray)]);
                $this->fileValidation($att, $rulesArray);

            } elseif (in_array('number', $rulesArray))
            {

                $this->numberValidation($att, $rulesArray);

            } else
            {
                $this->normalValidation($att, $rulesArray);
            }

        }
    }


}