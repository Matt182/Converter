<?php
namespace Converter\json;

function encode($array)
{
    $res = json_encode($array, JSON_PRETTY_PRINT);
    if (json_last_error() > 0) {
        echo "output json syntax error";
        exit();
    }
    return $res;
}

function decode($json)
{
    $res = json_decode($json, true);
    if (json_last_error() > 0) {
        echo "input json syntax error";
        exit();
    }
    return $res;
}
