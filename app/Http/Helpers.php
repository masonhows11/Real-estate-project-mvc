<?php

function sidebarActive($url, $contain = true): string
{
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
    return errorExists($name) ? '<div><small class="text-danger">' . error($name) . '</small></div>' : '';
}

function oldOrValue($name, $value)
{
    return empty(old($name)) ? $value : old($name);
}

function echoHtml($data): string
{
    return html_entity_decode($data);
}

function paginate()
{

}