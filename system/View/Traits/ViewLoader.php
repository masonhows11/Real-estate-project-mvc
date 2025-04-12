<?php

namespace System\View\Traits;

use Exception;

trait ViewLoader
{
    private array $viewNameArray = [];


    /**
     * @throws Exception
     */
    private function viewLoader($path): string
    {
        $dir = trim($path," .");

        $dir = str_replace(".","/",$dir);

        // to check files/directories is exits
        if(file_exists( dirname(dirname(dirname(__DIR__)))."/resources/view/$dir.php" ))
        {

            // below code get html tags & put them into $viewContents
            $this->registerView($dir);
            return htmlentities(file_get_contents( dirname(dirname(dirname(__DIR__)))."/resources/view/$dir.php" ));
            
        }else {

            throw new Exception('view not found! 404');
        }
    }


    private function registerView($view): void
    {
        $this->viewNameArray[] = $view;
    }


}