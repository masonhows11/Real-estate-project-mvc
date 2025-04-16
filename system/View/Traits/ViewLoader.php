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
        $dir = trim($path, " .");
        // replace / with .
        $dir = str_replace(".","/",$dir);
        echo $dir;
        echo '<br/>';
        // to check files/directories is exits
        if(file_exists( dirname(__DIR__, 3) ."/resources/view/$dir.blade.php" ))
        {
            // in $dir last file like (create.php) is view must be rendered or display

            // register view means save views name or path of views like admin.category.create
            // into $viewNameArray array
            $this->registerView($dir);

            // htmlentities Convert all applicable characters to HTML entities
            // below code get html tags & put them into $viewContents
            return htmlentities(file_get_contents( dirname(__DIR__, 3) ."/resources/view/$dir.blade.php" ));
            
        } else {

            throw new Exception('view not found! 404');
        }
    }


    private function registerView($view): void
    {
        $this->viewNameArray[] = $view;
    }


}