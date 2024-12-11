<?php

namespace Giuseppe\PhpunitSampleLezione30;

use DateTimeImmutable;

require_once 'src/FormattatoreData.php';

// Chiama staticamente il metodo della classe FormattatoreData e stampa i risultati

$dataCorrente = FormattatoreData::ottieniDataCorrente(new DateTimeImmutable(""), "Y-m-d");
echo "Data corrente (Y-m-d): " . $dataCorrente . PHP_EOL;

$dataCorrente = FormattatoreData::ottieniDataCorrente(new DateTimeImmutable(""), "y.m.d");
echo "Data corrente (y.m.d): " . $dataCorrente . PHP_EOL;

$dataCorrente = FormattatoreData::ottieniDataCorrente(new DateTimeImmutable(), "d-m-y");
echo "Data corrente (d-m-y): " . $dataCorrente . PHP_EOL;

$data = FormattatoreData::ottieniDataCorrente(new DateTimeImmutable("1974-12-06"), "d-m-y");
echo "Data nascita (d-m-y): " . $data;