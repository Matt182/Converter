<?php
namespace Converter\tests;

//require_once '/vendor/autoload.php';
/**
 *
 */
class EncodeTest extends \PHPUnit_Framework_TestCase
{
    public function testJsonEncode()
    {
        $array = array('foo' => 'bar',
                        'bar' => array('foo' => 'bar', 'bar' => 'baz'),);
        $json = \Converter\json\encode($array);
        $this->assertEquals($json, '{"foo":"bar","bar":{"foo":"bar","bar":"baz"}}');
    }

    public function testYamlEncode()
    {
        $array = array('foo' => 'bar',
                        'bar' => array('foo' => 'bar', 'bar' => 'baz'),);
        $yaml = \Converter\yml\encode($array);
        $this->assertEquals($yaml, '{ foo: bar, bar: { foo: bar, bar: baz } }');
    }
}
