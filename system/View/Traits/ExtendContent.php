<?php


namespace System\View\Traits;


trait ExtendContent
{


    private string $extendsContent;


    /**
     * @throws \Exception
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
                    $this->initialYields($yieldName);
                }
            }

            $this->content = $this->extendsContent;
        }
    }


    private function findExtends(): null|false
    {
        $filePathArray = [];

        // to use extends method or not
        preg_match("/s*@extends+\('([^)]+)'\)/",$this->content,$filePathArray);

        //  return isset($filePathArray[1]) ? $filePathArray[1] : false;
        return $filePathArray[1] ?? false;
    }

    private function findYieldsNames(): null|false
    {
        $yieldsNamesArray = [];

        // to use extends method or not
        preg_match_all("/@yield+\('([^)]+)'\)/",$this->extendsContent,$yieldsNamesArray,PREG_UNMATCHED_AS_NULL);

        // return isset($yieldsNamesArray[1]) ? $yieldsNamesArray[1] : false;
        return $yieldsNamesArray[1] ?? false;
    }


    private function initialYields($yieldsName): array|string
    {
        $string = $this->content;
        $startWord = "@section('" . $yieldsName . "')";
        $endWord = "@endsection";


        // find yield value in child view
        // if yield parent is define in extends/master view
        // example @yield('content') -> @section('content')
        $startPos = strpos($string,$startWord);
        if($startPos === false){
            // remove @yield from extends/master view
            return $this->extendsContent = str_replace("@yield('$yieldsName')","",$this->extendsContent);
        }


        // if close section not found remove yield parent is define in extends/master view
        $startPos += strlen($startWord); // @section('content')
        $endPost = strpos($string,$endWord,$startWord);  // @endsection('content')
        if($endPost === false){
            // remove @yield from extends/master view
            return $this->extendsContent = str_replace("@yield('$yieldsName')","",$this->extendsContent);
        }

        $length = $endPost - $startPos;
        $sectionContent = substr($string,$startPos,$length);
        // put content between section & endsection in child view
        return $this->extendsContent = str_replace("@yield('$yieldsName')",$sectionContent,$this->extendsContent);

    }

}