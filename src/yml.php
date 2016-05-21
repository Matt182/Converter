<?php
namespace Converter\yml;

use Symfony\Component\Yaml\Parser;
use Symfony\Component\Yaml\Dumper;

function encode($array)
{
    $dumper = new Dumper();
    return $dumper->dump($array);
}

function decode($yml)
{
    $parser = new Parser();
    return $parser->parse($yml);
}
