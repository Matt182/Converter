<?php
namespace Converter\file;

/**
 * Get extesnion of file
 *
 * @param string $file
 *
 * @return string
 */
function getExtension($file)
{
    return pathinfo($file, PATHINFO_EXTENSION);
}

/**
 * Writes data to file.
 *
 * @param string $data
 * @param string $file
 *
 * @return void
 */
function write($data, $file)
{
    file_put_contents($file, $data);
}

/**
 * Reads data from file
 *
 * @param string $file
 *
 * @return void
 */
function read($file)
{
    return file_get_contents($file);
}
