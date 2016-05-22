<?php
namespace Converter\ini;

use Piwik\Ini\IniReader;
use Piwik\Ini\IniWriter;


function encode($array)
{
    $writer = new IniWriter();
    return $writer->writeToString($array);
}

function decode($ini)
{
    $reader = new IniReader();
    return $reader->readString($ini);
}
