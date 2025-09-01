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
        $dir = str_replace(".", "/", $dir);




        // dd(file_exists(dirname(__DIR__, 3) . "/resources/view/$dir.blade.php"));
        // to check files/directories is exits
        if (file_exists(dirname(__DIR__, 3) . "/resources/view/$dir.blade.php")) 
        {
            // in $dir last file like (create.php) is view must be rendered or display

            // register view means save views name or path of views like admin.category.create
            // into $viewNameArray array
            // example we include some view.php in one view.php
            // these  some  views  names/path saved in to viewNameArray[] array with  registerView($dir) method
            $this->registerView($dir);

            // html entities Convert all applicable characters to HTML entities
            // below code get html tags & put them into $viewContents
            return htmlentities(file_get_contents(dirname(__DIR__, 3) . "/resources/view/$dir.blade.php"),ENT_COMPAT,'UTF-8',true);
            
        } else {

            throw new Exception('view not found! 404');
        }
    }


    private function registerView($view): void
    {
        $this->viewNameArray[] = $view;
        // array_push($this->viewNameArray,$view);
    }


}