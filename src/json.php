<?php
namespace Converter\json;

function encode($array)
{
    return json_encode($array, JSON_UNESCAPED_SLASHES);
}

function decode($json)
{
    return json_decode($json, true);
}
