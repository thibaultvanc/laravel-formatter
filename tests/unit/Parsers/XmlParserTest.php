<?php namespace Thibaultvanc\Formatter\Test\Parsers;

use Thibaultvanc\Formatter\Parsers\Parser;
use Thibaultvanc\Formatter\Parsers\XmlParser;
use Thibaultvanc\Formatter\Test\TestCase;

class XmlParserTest extends TestCase
{

    public function testXmlParserIsInstanceOfParserInterface()
    {
        $parser = new XmlParser('');
        $this->assertTrue($parser instanceof Parser);
    }

    public function testtoArrayReturnsArrayRepresenationOfXmlObject()
    {
        $expected = ['foo' => 'bar'];
        $parser   = new XmlParser('<xml><foo>bar</foo></xml>');
        $this->assertEquals($expected, $parser->toArray());
    }

    public function testtoJsonReturnsJsonRepresentationOfXmlObject()
    {
        $expected = '{"foo":"bar"}';
        $parser   = new XmlParser('<xml><foo>bar</foo></xml>');
        $this->assertEquals($expected, $parser->toJson());
    }
}
