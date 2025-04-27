<?php

function sidebarActive($url, $contain = true): string
{

    //    if ($contain) {
    //
    //        return (str_starts_with(currentUrl(), $url)) ? 'active' : '';
    //
    //    } else {
    //
    //  }

    return $url === currentUrl() ? 'active' : '';


}