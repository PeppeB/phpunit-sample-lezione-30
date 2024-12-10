<?php

    namespace Giuseppe\PhpunitSampleLezione30;

    class AddressList {

        // Properties
        private array $addresses;
        private array $correctAddresses;

        // Constructor
        public function __construct(array $addresses)
        {
            $this->addresses = $addresses;
            $this->correctAddresses = [];
        }

        // Getter of the property $this->addresses
        public function getAddresses(): array {
            return $this->addresses;
        }

        // Setter of the property $this->addresses
        public function setAddresses($addresses) {
            $this->addresses = $addresses;
        }
        
        // Getter of the property $this->correctAddresses
        // Get the list of correct addresses, i.e. the array $this->correctAddresses.
        public function getCorrectAddresses(): array {
            return $this->correctAddresses;
        }

        /*
        For each element of $this->addresses, if the element is a string or an array of strings,
        this method adds it to a list of correct addresses, i.e. the array $this->correctAddresses.
        */
        public function setCorrectAddresses() {
            foreach($this->addresses as $item) {
                if($this->isCorrectAddress($item)) {
                    array_push($this->correctAddresses, $item);
                }
            }
        }

        // This method check if its parameter is a string or an array of srings (containing at least 5 elements)
        private function isCorrectAddress(mixed $item): bool {
            if(empty($item) || !isset($item)) {
                return false;
            }  
                
            return (is_string($item) || (is_array($item) && count($item) > 4 && $this->isStringArray($item)));
        }
    
        private function isStringArray(array $arr): bool {
            $isArrayOfStrings = true;
            foreach($arr as $item) {
                if(!is_string($item)) {
                    $isArrayOfStrings = false;
                    break;
                }
            }

            return $isArrayOfStrings;
        }

    }