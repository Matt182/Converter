<?php
namespace Converter\yml;

use Symfony\Component\Yaml\Parser;
use Symfony\Component\Yaml\Dumper;

/**
 * Convert array to yaml string
 *
 * @param array $array array
 *
 * @return void
 */
function encode($array)
{
    $dumper = new Dumper();
    return $dumper->dump($array, 3);
}

/**
 * Convert yaml string to array
 *
 * @param string $yml yaml string
 *
 * @return void
 */
function decode($yml)
{
    $parser = new Parser();
    return $parser->parse($yml);
}
