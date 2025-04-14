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
        // this while(1) for while we have nested includes
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
    private function findIncludesNames(): null|false
    {
        $includesNamesArray = [];
        // to use extends method or not
        // $this->content is content of child view
        preg_match("/@include+\('([^)]+)'\)/", $this->content, $includesNamesArray);
        // return isset($includesNamesArray[1]) ? $includesNamesArray[1] : false;
        return $includesNamesArray[1] ?? false;
    }


    /**
     * @throws Exception
     * fill @include in child view
     */
    private function initialIncludes($includeName): array|string
    {
        // @include('views.404')
        // $this->content is content of child view
        return $this->content = str_replace("@include('$includeName')", $this->viewLoader($includeName), $this->content);
    }
}