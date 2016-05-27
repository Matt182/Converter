<?php
namespace Converter\tests;

class FullTest extends \PHPUnit_Framework_TestCase
{
    public function testJsonToYaml()
    {
        \Converter\converter('tests\prepared.json', 'tests\tested.yml');
        $this->assertEquals(file_get_contents('tests\prepared.yml'), file_get_contents('tests\tested.yml'));
        unlink('tests\tested.yml');
    }

    public function testYamlToJson()
    {
        \Converter\converter('tests\prepared.yml', 'tests\tested.json');
        $this->assertEquals(file_get_contents('tests\prepared.json'), file_get_contents('tests\tested.json'));
        unlink('tests\tested.json');
    }
}
