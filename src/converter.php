<?php
namespace Converter;

use function Converter\file\write;
use function Converter\file\read;
use function Converter\file\getExtension;
use function Converter\codecs\getEncoders;
use function Converter\codecs\getDecoders;

/**
 * Does converting job
 *
 * @param string $in  input file name
 * @param string $out output file name
 *
 * @return void
 */
function converter($in, $out, $customDecoder = null, $customEncoder = null)
{
    $decoded = formatToArray(read($in), getExtension($in), $customDecoder);
    if (!$decoded) {
        return false;
    }
    $encoded = arrayToFormat($decoded, getExtension($out), $customEncoder);
    if (!$encoded) {
        return false;
    }
    write($encoded, $out);
    return true;
}

/**
 * Convert string of $extension format to array
 *
 * @param string $content   string of $extension format
 * @param string $extension extension of input
 *
 * @return array
 */
function formatToArray($content, $extension, $customDecoder)
{
    if ($customDecoder != null) {
        return $customDecoder($content);
    } else {
        $decoders = getDecoders();

        if (key_exists($extension, $decoders)) {
            return $decoders[$extension]($content);
        } else {
            echo "unacceptable input file format: $extension";
            return false;
        }
    }

    /*
    switch ($extension) {
        case 'json':
            return json\decode($content);
        break;
        case 'yml':
            return yml\decode($content);
        break;
        default:
            echo "unacceptable input file format: $extension";
            return false;
        break;
    }
    */
}

/**
 * Сonvert array to string of $extension format
 *
 * @param array  $array     input array
 * @param string $extension extension to convert
 *
 * @return string
 */
function arrayToFormat($array, $extension, $customEncoder)
{
    if ($customEncoder != null) {
        return $customEncoder($array);
    } else {
        $encoders = getEncoders();

        if (key_exists($extension, $encoders)) {
            return $encoders[$extension]($array);
        } else {
            echo "unacceptable output file format: $extension";
            return false;
        }
    }

    /*
    switch ($extension) {
        case 'json':
            return json\encode($array);
        break;
        case 'yml':
            return yml\encode($array);
        break;
        default:
            echo "unacceptable output file format: $extension";
            return false;
        break;
    }
    */
}
