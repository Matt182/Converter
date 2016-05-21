<?php
/**
 * Convert between json and yml files
 *
 */
namespace Converter;

require_once 'vendor/autoload.php';
use Symfony\Component\Yaml\Parser;
use Symfony\Component\Yaml\Dumper;

function converter($in, $out)
{
    $extension = explode('.', $in)[1];
    switch ($extension) {
    case 'json':
            $parsed = json\decode(file_get_contents($in));
            print_r($parsed);
        break;
    case 'yml':
            $parsed = yml\decode(file_get_contents($in));
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
    default:
        echo "unacceptable file format";
        exit();
        break;
    }
}
converter($argv[1], $argv[2]);
