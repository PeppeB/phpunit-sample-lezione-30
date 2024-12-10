<?php

    namespace Giuseppe\PhpunitSampleLezione30;

    use Copyright;

    require_once "src/Copyright.php";

    $copyright = new Copyright();
    $copyright->setCopyrightInfo();
    echo $copyright->getCopyrightInfo();