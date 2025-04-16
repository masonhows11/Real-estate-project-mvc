<?php


namespace System\View\Traits;


use Exception;

trait ExtendContent
{


    private string $extendsContent;


    /**
     * @throws Exception
     * check in view is there @extends || not
     */
    private function checkExtendsContent(): void
    {
        $layoutsFilePath = $this->findExtends();
        if ($layoutsFilePath) {

            $this->extendsContent = $this->viewLoader($layoutsFilePath);

            $yieldsNamesArray = $this->findYieldsNames();

            if ($yieldsNamesArray) {
                foreach ($yieldsNamesArray as $yieldName) {
                    // run yields or set value for section in child view
                    $this->initialYields($yieldName);
                }
            }

            $this->content = $this->extendsContent;
        }
    }


    private function findExtends(): false|string
    {
        $filePathArray = [];
        $pattern3 = '/@extends\(([^)]+)\)/';
        preg_match($pattern3, $this->content, $filePathArray);

        $clean = html_entity_decode($filePathArray[1]);
        $extends = trim($clean, "'\"");


        return $extends ?? false;
    }

    private function findYieldsNames()
    {
        $yieldsNamesArray = [];
        $yieldArray = [];
        // check exists @yields('') string in view extendsContent/master view
        // There may be multiple yields on the view & we should use  preg_match_all()
        // to use extends method or not
        // preg_match_all("/@yield+\('([^)]+)'\)/", $this->extendsContent, $yieldsNamesArray, PREG_UNMATCHED_AS_NULL);

        preg_match_all("/@yield\(([^)]+)\)/", $this->extendsContent, $yieldsNamesArray, PREG_UNMATCHED_AS_NULL);

        // print_r($yieldsNamesArray);
        // return isset($yieldsNamesArray[1]) ? $yieldsNamesArray[1] : false;


        foreach ($yieldsNamesArray[1] as $yield) {
            $yield = html_entity_decode($yield);
            $yieldArray[] = trim($yield, "'\"");
        }
        
        return isset($yieldArray) ? $yieldArray : false;
    }


    private function initialYields($yieldsName): array|string
    {
        // $this->content is child view contents
        $string = $this->content;
        $startWord = "@section('" . $yieldsName . "')";
        $endWord = "@endsection";


        //// check/find open @section
        // find yield value in child view
        // if yield parent is define in extends/master view
        // example @yield('content') -> @section('content')
        $startPos = strpos($string, $startWord);
        if ($startPos === false) {
            // remove @yield from extends/master view
            return $this->extendsContent = str_replace("@yield('$yieldsName')", "", $this->extendsContent);
        }


        //// check/find close @endsection
        // if close section not found remove yield parent is define in extends/master view
        $startPos += strlen($startWord); // @section('content')
        $endPos = strpos($string, $endWord, $startWord);  // @endsection('content')
        if ($endPos === false) {
            // remove @yield from extends/master view
            return $this->extendsContent = str_replace("@yield('$yieldsName')", "", $this->extendsContent);
        }

        // fill between section/yield
        $length = $endPos - $startPos;
        $sectionContent = substr($string, $startPos, $length);
        // put content between section & endsection in child view
        return $this->extendsContent = str_replace("@yield('$yieldsName')", $sectionContent, $this->extendsContent);

    }

}