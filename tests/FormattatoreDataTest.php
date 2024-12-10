<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Giuseppe\PhpunitSampleLezione30\FormattatoreData;

class FormattatoreDataTest extends TestCase
{
	public function test_invalid_format()
	{
		$this->expectException(InvalidArgumentException::class);

		$formattatore = new FormattatoreData();

		$formattatore->ottieniDataCorrente(new DateTimeImmutable(),"MAREMMA");
	}

	/**
	 * @dataProvider myDataProvider
	 */
	public function test_format_is_should_be_resolved(string $expected, string $format)
	{
		$formattatore = new FormattatoreData();

		$dateString = $formattatore->ottieniDataCorrente(new DateTimeImmutable("2020-01-01"), $format);

		$this->assertEquals($expected, $dateString);
	}

	public static function myDataProvider()
	{
		$data =  [
			["2020-01-01", "Y-m-d"],
			["2020/01/01", "Y/m/d"],
			["20.01.01", "y.m.d" ],
			["01-01-20", "d-m-y"],
			["01/01/20", "ddmmyyyy"]
		];

		return $data;
	}
}