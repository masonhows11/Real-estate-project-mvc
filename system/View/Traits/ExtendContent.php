<?php


namespace System\View\Traits;


use Exception;

trait ExtendContent
{


    // content of extends_view/master_page
    private string $extendsContent;


    /**
     * @throws Exception
     * check in view is there @extends || not
     */
    private function checkExtendsContent(): void
    {
        $layoutsFilePath = $this->findExtends();
        if ($layoutsFilePath) {

            // get extends view/master view content
            $this->extendsContent = $this->viewLoader($layoutsFilePath);
            print_r($this->extendsContent);
            // find yields sections in extendsContent
            $yieldsNamesArray = $this->findYieldsNames();

            if ($yieldsNamesArray) {
                foreach ($yieldsNamesArray as $yieldName) {
                    // run yields & set value for section in child view
                    $this->initialYields($yieldName);
                }
            }
            // this line make final view
            $this->content = $this->extendsContent;


//            print_r($this->extendsContent);
//            print_r('---------------------------------');
//            print_r(PHP_EOL);
//            print_r($this->content);
        }
    }


    private function findExtends(): false|string
    {
        // @extends define in master page -> layouts/app.blade.php
        // first find @extends in our view
        // which view -> admin.index
        $filePathArray = [];
        $pattern3 = '/s*@extends\(([^)]+)\)/';
        preg_match($pattern3, $this->content, $filePathArray);
        var_dump($this->content);
        $clean = html_entity_decode($filePathArray[1]);
        $extends = trim($clean, "'\"");

        return $extends ?? false;
    }

    private function findYieldsNames(): false|array
    {
        $yieldsNamesArray = [];
        $yieldArray = [];

        // check exists @yields('') string in view extendsContent/master view/page
        // There may be multiple yields on the view & we should use  preg_match_all()
        // to use extends method or not
        // preg_match_all("/@yield+\('([^)]+)'\)/", $this->extendsContent, $yieldsNamesArray, PREG_UNMATCHED_AS_NULL);

        preg_match_all("/s*@yield\(([^)]+)\)/", $this->extendsContent, $yieldsNamesArray, PREG_UNMATCHED_AS_NULL);

        // print_r($yieldsNamesArray);
        // return isset($yieldsNamesArray[1]) ? $yieldsNamesArray[1] : false;

        foreach ($yieldsNamesArray[1] as $yield) {
            $yield = html_entity_decode($yield);
            $yieldArray[] = trim($yield, "'\"");
        }
        return $yieldArray ?? false;
    }


    private function initialYields($yieldsName): array|string
    {
        // $this->content is child view contents
        $string = $this->content;
        $startWord = "@section('" . $yieldsName . "')";
        $endWord = "@endsection";


        //// check/find open @section named like content or comments pr etc... in child view/page
        // find yield value in child view
        // if yield parent is define in extends/master view
        // example @yield('content') -> @section('content')
        $startPos = strpos($string, $startWord);

        // var_dump($this->content);
        if ($startPos === false) {
            // remove @yield from extends/master view
            // in $this->extendsContent @yield save as string & find easily
            return $this->extendsContent = str_replace("@yield('$yieldsName')", "", $this->extendsContent);
        }


        //// check/find close @endsection
        // if close section not found remove yield parent is define in extends/master view
        $startPos += strlen($startWord);  //@section('content')
        // $string is child content
        $endPos = strpos($string, $endWord, $startPos);  // @endsection('content')
        if ($endPos === false) {
            // remove @yield from extends/master view
            return $this->extendsContent = str_replace("@yield('$yieldsName')", "", $this->extendsContent);
        }

        //// final step
        // fill between section/yield
        $length = $endPos - $startPos;
        // $string is child content
        $sectionContent = substr($string, $startPos, $length);
        // put content between section & endsection in child view
        return $this->extendsContent = str_replace("@yield('$yieldsName')", $sectionContent, $this->extendsContent);

    }

}