<?php
namespace Converter\tests;

class FullTest extends \PHPUnit_Framework_TestCase
{
    private $prepJson = __DIR__ . '/prepared.json';
    private $prepYaml = __DIR__ . '/prepared.yml';

    private $testJson = __DIR__ . '/tested.json';
    private $testYaml = __DIR__ . '/tested.yml';


    public function testJsonToYaml()
    {
        \Converter\converter($this->prepJson, $this->testYaml);
        $this->assertEquals(file_get_contents($this->prepYaml), file_get_contents($this->testYaml));
        unlink($this->testYaml);
    }

    public function testYamlToJson()
    {
        \Converter\converter($this->prepYaml, $this->testJson);
        $this->assertEquals(file_get_contents($this->prepJson), file_get_contents($this->testJson));
        unlink($this->testJson);
    }
}
