<?php
/**
 * Convert between json, yml files
 *
 */
namespace Converter;

//require_once 'vendor/autoload.php';

function converter($in, $out)
{
    preg_match('/\.\w+$/i', $in, $matches);
    $extension = $matches[0];
    $parsed = formatToArray(file_get_contents($in), $extension);

    preg_match('/\.\w+$/i', $out, $matches);
    $extension = $matches[0];
    file_put_contents($out, arrayToFormat($parsed, $extension));
}

function formatToArray($content, $extension)
{
    switch ($extension) {
        case '.json':
            return json\decode($content);
            break;
        case '.yml':
            return yml\decode($content);
            break;
        default:
            echo "unacceptable input file format: $extension";
            exit();
            break;
    }
}

function arrayToFormat($array, $extension)
{
    switch ($extension) {
        case '.json':
            print_r($array);
            return json\encode($array);
            break;
        case '.yml':
            return yml\encode($array);
            break;
        default:
            echo "unacceptable output file format: $extension";
            exit();
            break;
    }
}
//converter($argv[1], $argv[2]);
