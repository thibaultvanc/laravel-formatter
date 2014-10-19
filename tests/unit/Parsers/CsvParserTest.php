<?php namespace SoapBox\Formatter\Test\Parsers;

use SoapBox\Formatter\Test\TestCase;
use SoapBox\Formatter\Parsers\ParserInterface;
use SoapBox\Formatter\Parsers\CsvParser;

class CsvParserTest extends TestCase {

	public function testCsvParserIsInstanceOfParserInterface() {
		$parser = new CsvParser('');
		$this->assertTrue($parser instanceof ParserInterface);
	}

}
