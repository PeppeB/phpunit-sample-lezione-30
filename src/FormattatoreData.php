<?php declare(strict_types=1);

namespace Giuseppe\PhpunitSampleLezione30;

use DateTimeImmutable;
use InvalidArgumentException;

class FormattatoreData
{
	public static function ottieniDataCorrente( DateTimeImmutable $date, string $format ): string {

		$allowedFormats = [
			"Y-m-d", "Y/m/d", "y.m.d", "d-m-y", "ddmmyyyy"
		];

		// $allowedFormats = [
		// 	"YYYY/mm/dd", "YY.mm.dd", "dd-mm-YY"
		// ];

		if (!in_array($format, $allowedFormats)) {
			throw new InvalidArgumentException("Formato $format non valido");
		}

		return $date->format( $format );
	}
}

