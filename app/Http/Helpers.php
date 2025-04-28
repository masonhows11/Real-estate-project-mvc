<?php

function sidebarActive($url, $contain = true): string
{
    //
    //    if ($contain) {
    //
    //        return (strpos(currentUrl(), $url) === 0 ) ? 'active' : '';
    //
    //    } else {
    //
    //        return $url === currentUrl() ? 'active' : '';
    //    }

    return $url === currentUrl() ? 'active' : '';

}

function sidebarHasSub($url): string
{
    return $url === currentUrl() ? 'open' : '';
}


function errorClass($name): string
{
    return errorExists($name) ? 'is-invalid' : '';
}

function errorText($name): string
{
    return errorExists($name) ? '<div><small class="text-danger">'. error($name) .'</small></div>' : '';
}
