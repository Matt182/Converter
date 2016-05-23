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
    try {
        $res = $dumper->dump($array, 3);
        return $res;
    } catch (DumpException $e) {
        printf("Unable to parse array into YAML string: %s", $e->getMessage());
        exit(1);
    }
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
    try {
        $res = $parser->parse($yml);
        return $res;
    } catch (ParseException $e) {
        printf("Unable to parse the YAML string: %s", $e->getMessage());
        exit(1);
    }
}
