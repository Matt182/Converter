<?php
namespace Converter\tests;

class FullTest extends \PHPUnit_Framework_TestCase
{
    public function testJsonToYaml()
    {
        \Converter\converter(__DIR__ . 'tests\prepared.json', __DIR__ . 'tests\tested.yml');
        $this->assertEquals(file_get_contents(__DIR__ . 'tests\prepared.yml'),
                            file_get_contents(__DIR__ . 'tests\tested.yml'));
        unlink(__DIR__ . 'tests\tested.yml');
    }

    public function testYamlToJson()
    {
        \Converter\converter(__DIR__ . 'tests\prepared.yml', __DIR__ . 'tests\tested.json');
        $this->assertEquals(file_get_contents(__DIR__ . 'tests\prepared.json'),
                            file_get_contents(__DIR__ . 'tests\tested.json'));
        unlink(__DIR__ . 'tests\tested.json');
    }
}
