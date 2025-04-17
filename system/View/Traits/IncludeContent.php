<?php

namespace System\View\Traits;

use Exception;

trait IncludeContent
{


    /**
     * @throws Exception
     */
    private function checkIncludesContent(): void
    {
        // $includesNamesArray -> there may be multiple @include in view
        // then find all &  put them into $includesNamesArray
        // this while(1) for while we have nested includes

        // $includesNamesArray = $this->findIncludesNames();
        // print_r($includesNamesArray);
        // exit();

        while (1) {

            $includesNamesArray = $this->findIncludesNames();

            if (!empty($includesNamesArray)) {
                foreach ($includesNamesArray as $includeName) {
                    $this->initialIncludes($includeName);
                }
            } else {
                break;
            }
        }
    }


    // find @includes in child view
    private function findIncludesNames(): false|array
    {
        $includesNamesArray = [];
        $includeArray = [];
        // to use extends method or not
        // find @include in child view
        // $this->content is content of child view
        // preg_match("/@include+\('([^)]+)'\)/", $this->content, $includesNamesArray);

        preg_match_all("/@include\(([^)]+)\)/", $this->content, $includesNamesArray);

        foreach ($includesNamesArray[1] as $include) {
            $include = html_entity_decode($include);
            $includeArray[] = trim($include, "'\"");
        }

        var_dump($includeArray);
        //exit();
        // return isset($includesNamesArray[1]) ? $includesNamesArray[1] : false;
        // return $includeArray[1] ?? false;
        return $includeArray ?? false;
    }


    /**
     * @throws Exception
     * fill @include in child view
     */
    private function initialIncludes($includeName): void
    {

        // @include('views.404')
        // $this->content is content of child view
        // add view define in @include with viewLoader() method

        // test this
        $this->content = str_replace("@include('$includeName')", $this->viewLoader($includeName), $this->content);
    }
}
