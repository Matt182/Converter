<?php
namespace Converter\tests;

//require_once '/vendor/autoload.php';
/**
 *
 */
class DecodeTest extends \PHPUnit_Framework_TestCase
{
    private $array = array('foo' => 'bar',
                    'bar' => array('foo' => 'bar', 'bar' => 'baz'),);

    public function testJsonDecode()
    {
        $json = \Converter\json\decode(file_get_contents('tests/arrToJsonTest.json'));
        $this->assertEquals($json, $this->array);
    }

    public function testYamlDecode()
    {
        $yaml = \Converter\yml\decode(file_get_contents('tests/arrToYamlTest.yml'));
        $this->assertEquals($yaml, $this->array);
    }
}
