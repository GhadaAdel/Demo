<?php

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function urlIs($page)
{
    return $_SERVER['REQUEST_URI'] === $page;
}

function authorize($condition, $statusCode = Response::FORBIDDEN)
{
    if (! $condition){
        abort($statusCode);
    }
}

?>