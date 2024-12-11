<?php

namespace Giuseppe\PhpunitSampleLezione30;

use DateTimeImmutable;

require_once 'src/FormattatoreData.php';


// Crea un'istanza della classe FormattatoreData
$formattatore = new FormattatoreData();

// Chiama il suo metodo e stampa i risultati

echo "Data corrente (Y-m-d): " . 
$formattatore->ottieniDataCorrente(new DateTimeImmutable(), "Y-m-d") . PHP_EOL;

echo "Data corrente (y.m.d): " . 
$formattatore->ottieniDataCorrente(new DateTimeImmutable(), "y.m.d") . PHP_EOL;

echo "Data corrente (d-m-y): " . 
$formattatore->ottieniDataCorrente(new DateTimeImmutable(), "d-m-y") . PHP_EOL;

echo "Formato 3 (Y/m/d): " . 
$formattatore->ottieniDataCorrente(new DateTimeImmutable(), "Y/m/d") . PHP_EOL;
