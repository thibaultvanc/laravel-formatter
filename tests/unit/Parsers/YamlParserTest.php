<?php namespace Thibaultvanc\Formatter\Test\Parsers;

use Thibaultvanc\Formatter\Parsers\Parser;
use Thibaultvanc\Formatter\Parsers\XmlParser;
use Thibaultvanc\Formatter\Parsers\YamlParser;
use Thibaultvanc\Formatter\Test\TestCase;

class YamlParserTest extends TestCase
{

    public function testYamlParserIsInstanceOfParserInterface()
    {
        $parser = new YamlParser('');
        $this->assertTrue($parser instanceof Parser);
    }

    public function testtoArrayReturnsArrayRepresenationOfYamlObject()
    {
        $expected = ['foo' => 'bar'];
        $parser   = new XmlParser('<xml><foo>bar</foo></xml>');
        $x        = new YamlParser($parser->toYaml());
        $this->assertEquals($expected, $x->toArray());
    }

}
