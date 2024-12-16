<?php

namespace Giuseppe\PhpunitSampleLezione30;

use DateTimeImmutable;
use InvalidArgumentException;

class BirthdayCountdown {

    private DateTimeImmutable $currentDate;
    private DateTimeImmutable $birthDate;

    public function __construct(string $birthDate)
    {
        if(!$this->isCorrectDateFormat($birthDate))
            throw new InvalidArgumentException("$birthDate Invalid date format. Accepted format: Y/m/d.");
        $this->currentDate = new DateTimeImmutable();
        $this->birthDate = new DateTimeImmutable($birthDate);
    }

    public function setBirthDate(string $birthDate) {
        
        if(!$this->isCorrectDateFormat($birthDate)) {
            throw new InvalidArgumentException("$birthDate Invalid date format. Accepted format: Y/m/d.");
        }
        
        $this->birthDate = new DateTimeImmutable($birthDate);

    }

    public function getBirthDate(): DateTimeImmutable {
        return $this->birthDate;
    }

    public function isCorrectDateFormat(string $date): bool {
        
        // define a pattern to set the correct date format
        // $datePattern = '/^\d{4}\/\d{2}\/\d{2}$/';
        $datePattern = '/^([0-9]{4})\/(0[1-9]|1[0-2])\/(0[1-9]|1[0-9]|2[0-9]|3[01])$/';
        
        // if the date format does not match the date pattern,
        // return true otherwise false
        $isValidDate = preg_match($datePattern, $date);

        return (bool) $isValidDate;

    }

    public function getBirthdayCountdown() {

        $interval = $this->currentDate->diff($this->getBirthday());
        //return "$interval->y years $interval->m months $interval->d days, i.e. $interval->days days";
        return "$interval->days days";

    }

    public function getBirthday(): DateTimeImmutable {

        // get the year from the current date
        $currentYear = $this->currentDate->format('Y');

        // get the month and day (as a string) from the birth date
        $birthDateMonthDay = $this->birthDate->format('m/d');
        
        // get the date (as a DateTimeImmutable object) of the current year birthday 
        $birthday = new DateTimeImmutable("$currentYear/$birthDateMonthDay");

        // if current year's birthday is before the current date,
        // modify it with the next year's birthday.
        if($this->currentDate > $birthday) {
            $birthday = $birthday->modify("+1 year");
        }

        return $birthday;

    }
    
}