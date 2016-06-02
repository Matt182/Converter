<?php
namespace Converter\codecs;

function getEncoders()
{
    return [
        'json' => '\Converter\json\encode',
        'yml' => '\Converter\yml\encode'
    ];
}

function getDecoders()
{
    return [
        'json' => '\Converter\json\decode',
        'yml' => '\Converter\yml\decode'
    ];
}
