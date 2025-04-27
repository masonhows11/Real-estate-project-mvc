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