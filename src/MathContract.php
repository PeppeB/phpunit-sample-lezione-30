<?php

    namespace Giuseppe\PhpunitSampleLezione30;

    interface MathContract {

        function isEvenNumber(int $number): bool;

        function getSquareList(array $numbers): array;

    }