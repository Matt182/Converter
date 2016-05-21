<?php
/**
 * Convert between json, xml, yml files
 *
 */
namespace Converter;

require_once 'vendor/autoload.php';
use Symfony\Component\Yaml\Parser;
use Symfony\Component\Yaml\Dumper;
use LSS\XML2Array;
use LSS\Array2XML;

function converter($in, $out)
{
    $extension = explode('.', $in)[1];
    switch ($extension) {
    case 'xml':
            $parsed = XML2Array::createArray(file_get_contents($in));
        break;
    case 'json':
            $parsed = json_decode(file_get_contents($in), true);
        break;
    case 'yml':
            $yaml = new Parser();
            $parsed = $yaml->parse(file_get_contents($in));
        break;
    default:
        break;
    }

    $extension = explode('.', $out)[1];
    switch ($extension) {
    case 'xml':
            Array2XML::createXML('root', $parsed)->save($out);
        break;
    case 'json':
            file_put_contents($out, json_encode($parsed));
        break;
    case 'yml':
            $dumper = new Dumper();
            $yaml = $dumper->dump($parsed);
            file_put_contents($out, $yaml);
        break;
    default:
        break;
    }
}
converter($argv[1], $argv[2]);
