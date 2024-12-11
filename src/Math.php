<?php

    namespace Giuseppe\PhpunitSampleLezione30;
    
    class Math implements MathContract {
        
        private int $number;
        private array $numberList = [];

        // Setter per la proprietà $this->number
        public function setNumber(int $number) {
            $this -> number = $number;
        }

        // Getter per la proprietà $this->number
        public function getNumber(): int {
            return $this -> number;
        }

        // Setter per la proprietà $this->numberList
        public function setNumberList(array $numbers) {
            $this -> numberList = $numbers;
        }

        // Getter per la proprietà $this->numberList
        public function getNumberList(): array {
            return $this -> numberList;
        }

        // Metodo che, preso un intero in input, restituisce true se è pari e false se è
        // dispari.
        public function isEvenNumber(int $number) : bool {
            // if $number contains an even number, return true otherwise false
            return $number % 2 === 0;
        }

        /*
        Questo metodo riceve un array di numeri, e restituisce UN ALTRO ARRAY in cui 
        tutti i valori sono elevati al QUADRATO.
        La soluzione utilizza array_map.        
        */
        public function getSquareList(array $numbers): array {
            $squaredNumbers = array_map(function($number) {
                return $number * $number;
            }, $numbers);
    
            return $squaredNumbers;
        }

        /*
        Questo metodo riceve un array di numeri, e restituisce UN ALTRO ARRAY in cui 
        tutti i valori sono elevati al QUADRATO.
        La soluzione utilizza una FUNZIONE DI CALCOLO DA APPLICARE AI PARAMETRI (nell’array),
        che viene passata dal chiamante come callback.
        */
        public function getSquareList2(callable $callback): array {
            // Get the list of parameters excluding the first one (the callback)
            $params = array_slice(func_get_args(), 1, func_num_args());
            // Apply the callback function to each element in $params, storing each result
            // (the square of a parameter) into the $squaredNumbers array.
            $squaredNumbers = array_map($callback, $params);
            return $squaredNumbers;
        }

    }