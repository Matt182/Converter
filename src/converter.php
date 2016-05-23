<?php
namespace Converter;

/**
 * Does converting job
 *
 * @param string $in  input file name
 * @param string $out output file name
 *
 * @return void
 */
function converter($in, $out)
{
    preg_match('/\.\w+$/i', $in, $matches);
    $extension = $matches[0];
    $parsed = formatToArray(file_get_contents($in), $extension);
    preg_match('/\.\w+$/i', $out, $matches);
    $extension = $matches[0];
    file_put_contents($out, arrayToFormat($parsed, $extension));
}

/**
 * Convert string of $extension format to array
 *
 * @param string $content   string of $extension
 * @param string $extension extension of input
 *
 * @return array
 */
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
            exit(1);
        break;
    }
}

/**
 * Сonvert array to string of $extension format
 *
 * @param array  $array     input array
 * @param string $extension extension to convert
 *
 * @return string
 */
function arrayToFormat($array, $extension)
{
    switch ($extension) {
        case '.json':
            return json\encode($array);
        break;
        case '.yml':
            return yml\encode($array);
        break;
        default:
            echo "unacceptable output file format: $extension";
            exit(1);
        break;
    }
}
