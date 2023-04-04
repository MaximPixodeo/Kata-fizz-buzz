<?php

namespace App;

class FizzBuzz 
{
    public function calculate(int $number)
    {
        //EARLY RETURN
        if($this->isNumberNotBetween0And1000($number)) {
            return false;
        }
        
        return $this->isFizzOrBuzz($number);
    }

    private function isFizzOrBuzz($number)
    {
        if ($this->isFizz($number) AND $this->isBuzz($number)) {
            return "FizzBuzz";
        }

        if ($this->isFizz($number)) {
            return "Fizz";
        }

        if ($this->isBuzz($number)) {
            return "Buzz";
        }

        return $number;
    }

    private function isNumberNotBetween0And1000($number)
    {
        if ($number < 0 OR $number > 1000) {
            return true;
        }

        return false;
    }

    private function isFizz($number)
    {
        //ternaire
        return $number % 3 == 0 ? true : false;

        //procédural
        if($number % 3 == 0){
            return true;
        }
        return false;
    }

    private function isBuzz($number)
    {
        //ternaire
        return $number % 5 == 0 ? true : false;

        //procédural
        if($number % 5 == 0){
            return true;
        }
        return false;
    }
}