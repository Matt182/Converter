<?php
namespace Converter\tests;

class EncodeTest extends \PHPUnit_Framework_TestCase
{
    private $array = array('foo' => 'bar',
                    'bar' => array('foo' => 'bar', 'bar' => 'baz'),);
    public function testJsonEncode()
    {
        $json = \Converter\json\encode($this->array);
        $this->assertEquals($json, file_get_contents('tests/arrToJsonTest.json'));
    }

    public function testYamlEncode()
    {
        $yaml = \Converter\yml\encode($this->array);
        $this->assertEquals($yaml, file_get_contents('tests/arrToYamlTest.yml'));
    }
}
