<?php

namespace System\View;

// use App\Providers\AppServiceProvider;
use Exception;
use System\View\Traits\ViewLoader;
use System\View\Traits\ExtendContent;
use System\View\Traits\IncludeContent;
class ViewBuilder
{
    use ViewLoader,ExtendContent,IncludeContent;

    public $content;

    public array $vars = [];


    /**
     * @throws Exception
     */
    public function run($path): void
    {

        // get all html content from viewLoader trait
        $this->content = $this->viewLoader($path);
        // var_dump($this->content);
        $this->checkExtendsContent();

        $this->checkIncludesContent();

        // setViews is call static method
        Composer::setViews($this->viewNameArray);

        //        $appServiceProvider = new AppServiceProvider();
        //        $appServiceProvider->boot();

        $this->vars = Composer::getParams();
        
    }



}