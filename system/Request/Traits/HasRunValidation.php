<?php

namespace System\Request\Traits;

trait HasRunValidation
{


    protected function errorRedirect()
    {

        if (!$this->errorExist) {

            return $this->request;
        }

        return back();

    }

    private function checkFirstError($name): bool
    {

        if (!errorExists($name) && !in_array($name, $this->errorVariableName)) {
            return true;
        }
        return false;
    }

    private function checkFieldExists($name): bool
    {
        return (isset($this->request[$name]) && !empty($this->request[$name])) ? true : false;
    }


    private function checkFileExists($name): bool
    {
        if (isset($this->files[$name]['name']))
        {
            if (!empty($this->files[$name]['name'])) {

                return true;
            }
        }
        return  false;
    }


    private function setError($name,$errorMessage): void
    {
        array_push($this->errorVariableName,$name);
        error($name,$errorMessage);
        $this->errorExist = true;
    }

}