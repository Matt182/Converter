<?php
namespace Converter\json;

function encode($array)
{
    return json_encode($array);
}

function decode($json)
{
    return json_decode($json, true);
}
