<?php

    class Copyright {
        
        private string $currentDate;
        private string $copyrightInfo;
        
        public function __construct() {
            $this->currentDate = date('Y/m/d');
            $this->copyrightInfo = '';
        }
        
        public function setCopyrightInfo() {
            $piecesOfDate = explode('/', $this->currentDate);
            $this->copyrightInfo = 'Copyright '. $piecesOfDate[0] . ' © MYCOMPANY s.r.l.';
        }
        
        public function getCopyrightInfo(): string {
            return $this->copyrightInfo;
        }
        
    }