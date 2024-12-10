<?php

    namespace Giuseppe\PhpunitSampleLezione30;
    
    require_once('src/AddressList.php');

    use stdClass;

    $addresses = array(
        'via tal dei tali 1, 20100 Milano (MI) Italia',
        ['via tal dei tali 2', 'Genova', 'GE', '10000', 'Italia'],
        2,
        null,
        new stdClass(),
        ['Mario', 'Rossi']
    );

    echo 'Address list:'.PHP_EOL;
    $addressList = new AddressList($addresses);
    var_dump($addressList->getAddresses());
    echo PHP_EOL;

    echo 'List of correct addresses:'.PHP_EOL;
    $addressList->setCorrectAddresses();
    var_dump($addressList->getCorrectAddresses());