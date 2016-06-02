<?php
namespace Converter\yml;

use Symfony\Component\Yaml\Parser;
use Symfony\Component\Yaml\Dumper;

/**
 * Convert array to yaml string
 *
 * @param array $array array
 *
 * @return string
 */
function encode($array)
{
    $dumper = new Dumper();
    $res = $dumper->dump($array, 3);
    return $res;
}

/**
 * Convert yaml string to array
 *
 * @param string $yml yaml string
 *
 * @return array
 */
function decode($yml)
{
    $parser = new Parser();
    $res = $parser->parse($yml);
    return $res;
}
