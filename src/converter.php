<?php
/**
 * Convert between json, ini, yml files
 *
 */
namespace Converter;

//require_once 'vendor/autoload.php';

function converter($in, $out)
{
    $extension = explode('.', $in)[1];
    switch ($extension) {
        case 'json':
            $parsed = json\decode(file_get_contents($in));
            break;
        case 'yml':
            $parsed = yml\decode(file_get_contents($in));
            break;
        case 'ini':
            $parsed = ini\decode(file_get_contents($in));
            break;
        default:
            echo "unacceptable file format";
            exit();
            break;
    }

    $extension = explode('.', $out)[1];
    switch ($extension) {
        case 'json':
            file_put_contents($out, json\encode($parsed));
            break;
        case 'yml':
            file_put_contents($out, yml\encode($parsed));
            break;
        case 'ini':
            file_put_contents($out, ini\encode($parsed));
            break;
        default:
            echo "unacceptable file format";
            exit();
            break;
    }
}
//converter($argv[1], $argv[2]);
