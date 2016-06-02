<?php
namespace Converter\tests;

class EncodeTest extends \PHPUnit_Framework_TestCase
{
    private $jsonFile = __DIR__ . '/fixtures/arrToJsonTest.json';
    private $yamlFile = __DIR__ . '/fixtures/arrToYamlTest.yml';

    private $array = array('foo' => 'bar',
                    'bar' => array('foo' => 'bar', 'bar' => 'baz'),);
    public function testJsonEncode()
    {
        $json = \Converter\json\encode($this->array);
        $this->assertEquals($json, file_get_contents($this->jsonFile));
    }

    public function testYamlEncode()
    {
        $yaml = \Converter\yml\encode($this->array);
        $this->assertEquals($yaml, file_get_contents($this->yamlFile));
    }
}
