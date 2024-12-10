<?php

namespace Giuseppe\PhpunitSampleLezione30;

use DateTimeImmutable;

require_once 'src/FormattatoreData.php';


// Crea un'istanza della classe
// $formattatore = new FormattatoreData();

// Chiama i metodi e stampa i risultati
$dataCorrente = FormattatoreData::ottieniDataCorrente(new DateTimeImmutable(), "d-m-y");
echo $dataCorrente . PHP_EOL;
$data = FormattatoreData::ottieniDataCorrente(new DateTimeImmutable("1974-12-06"), "dd-m-y");
echo $data;
// echo "Data corrente (YYYY-MM-DD): " . $formattatore->ottieniDataCorrente() . "\n";
// echo "Formato 1 (YYYY/MM/DD): " . $formattatore->ottieniDataFormato1() . "\n";
// echo "Formato 2 (YY.MM.DD): " . $formattatore->ottieniDataFormato2() . "\n";
// echo "Formato 3 (DD-MM-YY): " . $formattatore->ottieniDataFormato3() . "\n";
