<?php


namespace System\View\Traits;


use Exception;

trait ExtendContent
{


    private string $extendsContent;


    /**
     * @throws Exception
     * check in view is @extend or not
     */
    private function checkExtendsContent(): void
    {
        $layoutsFilePath = $this->findExtends();
        if($layoutsFilePath){

            $this->extendsContent = $this->viewLoader($layoutsFilePath);
            $yieldsNamesArray = $this->findYieldsNames();

            if($yieldsNamesArray){
                foreach ($yieldsNamesArray as $yieldName)
                {
                    // run yields or set value or html content
                    $this->initialYields($yieldName);
                }
            }

            $this->content = $this->extendsContent;
        }
    }


    private function findExtends(): null|false
    {
        $filePathArray = [];

        // check exists @extends('') string in view contents/child view
        // to use extends method or not
        //  put all matches into  $filePathArray
        preg_match("/s*@extends+\('([^)]+)'\)/",$this->content,$filePathArray);

        //  return isset($filePathArray[1]) ? $filePathArray[1] : false;
        return $filePathArray[1] ?? false;
    }

    private function findYieldsNames(): null|false
    {
        $yieldsNamesArray = [];

        // check exists @yields('') string in view extendsContent/master view
        // There may be multiple yields on the view & we should use  preg_match_all()
        // to use extends method or not
        preg_match_all("/@yield+\('([^)]+)'\)/",$this->extendsContent,$yieldsNamesArray,PREG_UNMATCHED_AS_NULL);

        // return isset($yieldsNamesArray[1]) ? $yieldsNamesArray[1] : false;
        return $yieldsNamesArray[1] ?? false;
    }


    private function initialYields($yieldsName): array|string
    {
        // $this->content is child view contents
        $string = $this->content;
        $startWord = "@section('".$yieldsName."')";
        $endWord = "@endsection";


        //// check open @section
        // find yield value in child view
        // if yield parent is define in extends/master view
        // example @yield('content') -> @section('content')
        $startPos = strpos($string,$startWord);
        if($startPos === false){
            // remove @yield from extends/master view
            return $this->extendsContent = str_replace("@yield('$yieldsName')","",$this->extendsContent);
        }


        //// check close @endsection
        // if close section not found remove yield parent is define in extends/master view
        $startPos += strlen($startWord); // @section('content')
        $endPos = strpos($string,$endWord,$startWord);  // @endsection('content')
        if($endPos === false){
            // remove @yield from extends/master view
            return $this->extendsContent = str_replace("@yield('$yieldsName')","",$this->extendsContent);
        }

        $length = $endPos - $startPos;
        $sectionContent = substr($string,$startPos,$length);
        // put content between section & endsection in child view
        return $this->extendsContent = str_replace("@yield('$yieldsName')",$sectionContent,$this->extendsContent);

    }

}