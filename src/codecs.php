<?php
namespace Converter\codecs;

/**
 * Return array of acceptable encoders
 *
 * @param     void
 * @return    array
 */
function getEncoders()
{
    return [
        'json' => '\Converter\json\encode',
        'yml' => '\Converter\yml\encode'
    ];
}

/**
 * Return array of acceptable decoders
 *
 * @param     void
 * @return    array
 */
function getDecoders()
{
    return [
        'json' => '\Converter\json\decode',
        'yml' => '\Converter\yml\decode'
    ];
}
