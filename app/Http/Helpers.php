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

function paginate($data, $per_page = 10, $page = 1, $options = [])
{

    $totalRows = count($data);
    $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $totalPages = ceil($totalRows) / $per_page;
    // current page shouldn't be greater than total page
    $currentPage = min($currentPage, $totalPages);

    $currentPage = max($currentPage, 1);
    // example
    // totalRows 6
    // current = 2
    // 2 - 1 * per_page 2 = 2
    // start from array index 2 to display record on next page in this example page 2
    //
    // [0->red,1->green,2->blue,3->white,4->purple,5->black]
    // get blue as first record for page 2 to display
    // example current = 3 & per_page = 2
    // 3 - 1 * 2 = 4
    // take record at index 4 -> purple in page 3 start from  record purple
    $currentRow = ($currentPage - 1) * $per_page;

    // add data from start(current row) until per_page
    // 4 5 ->  2 record
    $data = array_slice($data, $currentRow, $per_page);
    return $data;

}