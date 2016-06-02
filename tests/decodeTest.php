<?php
namespace Converter\tests;

//require_once '/vendor/autoload.php';
/**
 *
 */
class DecodeTest extends \PHPUnit_Framework_TestCase
{
    private $jsonFile = __DIR__ . '/fixtures/arrToJsonTest.json';
    private $yamlFile = __DIR__ . '/fixtures/arrToYamlTest.yml';

    private $array = array('foo' => 'bar',
                    'bar' => array('foo' => 'bar', 'bar' => 'baz'),);

    public function testJsonDecode()
    {
        $json = \Converter\json\decode(file_get_contents($this->jsonFile));
        $this->assertEquals($json, $this->array);
    }

    public function testYamlDecode()
    {
        $yaml = \Converter\yml\decode(file_get_contents($this->yamlFile));
        $this->assertEquals($yaml, $this->array);
    }
}
