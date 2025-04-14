<?php

namespace System\View\Traits;

use Exception;

trait ViewLoader
{

    // put all view names into
    // $viewNameArray
    // that use in one view
    private array $viewNameArray = [];


    /**
     * @throws Exception
     */
    private function viewLoader($path): string
    {
        $dir = trim($path," .");
        // replace / with .
        $dir = str_replace(".","/",$dir);
        // to check files/directories is exits
        if(file_exists( dirname(__DIR__, 3) ."/resources/view/$dir.php" ))
        {

            // below code get html tags & put them into $viewContents
            $this->registerView($dir);
            return htmlentities(file_get_contents( dirname(__DIR__, 3) ."/resources/view/$dir.php" ));
            
        }else {

            throw new Exception('view not found! 404');
        }
    }


    private function registerView($view): void
    {
        $this->viewNameArray[] = $view;
    }


}