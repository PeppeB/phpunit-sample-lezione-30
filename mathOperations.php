<?php

    namespace Giuseppe\PhpunitSampleLezione30;

    // use Giuseppe\PhpunitSampleLezione30\MathContract;
    
    // use Giuseppe\PhpunitSampleLezione30\Math;
    
    require_once 'src/MathContract.php';
    require_once 'src/Math.php';
    

    $objMath = new Math();
    $objMath -> setNumber(20);
    echo '20 is an even number: ';
    var_dump($objMath -> isEvenNumber($objMath -> getNumber()));
    $objMath -> setNumber(15);
    echo '15 is an even number: ';
    var_dump($objMath -> isEvenNumber($objMath -> getNumber()));
    echo PHP_EOL . PHP_EOL;

   
    $objMath -> setNumberList([2, 4, 5, -3]);
    $numberList = $objMath -> getNumberList();
    echo "List of numbers:" . PHP_EOL;
    var_dump($numberList);
    echo 'List of squared numbers from the list above:' . PHP_EOL;
    var_dump($objMath -> getSquareList($numberList));
    echo PHP_EOL . PHP_EOL;

    $objMath -> setNumberList([-2.5, 0, 6, -10, 4.5]);
    $numberList = $objMath -> getNumberList();
    echo "List of numbers:" . PHP_EOL;
    var_dump($numberList);
    echo 'List of squared numbers from the list above:' . PHP_EOL;
    // var_dump($objMath -> getSquareList2(function($number) {
    //     return $number * $number;
    // }, ...$numberList));
    var_dump($objMath -> getSquareList2(fn($number) => $number * $number, ...$numberList));
    

