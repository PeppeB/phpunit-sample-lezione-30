<?php

namespace Giuseppe\PhpunitSampleLezione30;

use DateTimeImmutable;

require_once 'src/BirthdayCountdown.php';



$birthdayCountdown = new BirthdayCountdown('1974/12/06');
echo 'Data compleanno:'.PHP_EOL;
echo $birthdayCountdown->getBirthday()->format('d/m/Y');
echo PHP_EOL.'Numero giorni dalla data corrente alla data del compleanno: '.PHP_EOL;
echo $birthdayCountdown->getBirthdayCountdown();
echo PHP_EOL.PHP_EOL;

$birthdayCountdown->setBirthDate('2014/12/20');
echo 'Data compleanno:'.PHP_EOL;
echo $birthdayCountdown->getBirthday()->format('d/m/Y');
echo PHP_EOL.'Numero giorni dalla data corrente alla data del compleanno: '.PHP_EOL;
echo $birthdayCountdown->getBirthdayCountdown();
echo PHP_EOL.PHP_EOL;

// In the following cases, an exception is thrown because the parameter passed to the constructor
// does not match the correct format defined by the application

// $birthdayCountdown->setBirthDate('1974/13/06');
// echo 'Data compleanno:'.PHP_EOL;
// echo $birthdayCountdown->getBirthday()->format('d/m/Y');
// echo PHP_EOL.'Numero giorni dalla data corrente alla data del compleanno: '.PHP_EOL;
// echo $birthdayCountdown->getBirthdayCountdown();
// echo PHP_EOL.PHP_EOL;

// $birthdayCountdown->setBirthDate('1974.12.06');
// echo 'Data compleanno:'.PHP_EOL;
// echo $birthdayCountdown->getBirthday()->format('d/m/Y');
// echo PHP_EOL.'Numero giorni dalla data corrente alla data del compleanno: '.PHP_EOL;
// echo $birthdayCountdown->getBirthdayCountdown();
// echo PHP_EOL.PHP_EOL;

// $birthdayCountdown->setBirthDate('14/12/20');
// echo 'Data compleanno:'.PHP_EOL;
// echo $birthdayCountdown->getBirthday()->format('d/m/Y');
// echo PHP_EOL.'Numero giorni dalla data corrente alla data del compleanno: '.PHP_EOL;
// echo $birthdayCountdown->getBirthdayCountdown();
// echo PHP_EOL.PHP_EOL;

// $birthdayCountdown->setBirthDate('201412/20');
// echo 'Data compleanno:'.PHP_EOL;
// echo $birthdayCountdown->getBirthday()->format('d/m/Y');
// echo PHP_EOL.'Numero giorni dalla data corrente alla data del compleanno: '.PHP_EOL;
// echo $birthdayCountdown->getBirthdayCountdown();
// echo PHP_EOL.PHP_EOL;

$birthdayCountdown->setBirthDate('20/12/2014');
echo 'Data compleanno:'.PHP_EOL;
echo $birthdayCountdown->getBirthday()->format('d/m/Y');
echo PHP_EOL.'Numero giorni dalla data corrente alla data del compleanno: '.PHP_EOL;
echo $birthdayCountdown->getBirthdayCountdown();
echo PHP_EOL.PHP_EOL;