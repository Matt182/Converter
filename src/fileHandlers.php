<?php
namespace Converter\file;

function getExtension($file)
{
    return pathinfo($file, PATHINFO_EXTENSION);
}

function write($data, $file)
{
    file_put_contents($file, $data);
}

function read($file)
{
    return file_get_contents($file);
}
