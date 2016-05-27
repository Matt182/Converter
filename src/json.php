<?php
namespace Converter\json;

/**
 * Convert array to json string
 *
 * @param array $array array
 *
 * @return void
 */
function encode($array)
{
    $res = json_encode($array, JSON_PRETTY_PRINT);
    return $res;
}

/**
 * Convert json string to array
 *
 * @param string $json json string
 *
 * @return void
 */
function decode($json)
{
    $res = json_decode($json, true);
    return $res;
}
