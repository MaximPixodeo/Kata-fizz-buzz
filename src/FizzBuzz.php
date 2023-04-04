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
        
        return $this->isFizzOrBuzzOrWhizz($number);
    }

    // J'ai refacto le if en cascade par un switch case appelant des method private intermediaire(plus consci ?)
    // Je pourrais meme créer une method intermédiare pour chaque condition pour etre encore plus carré
    // J'ai laissé tel quel pour bien mettre en avant l'ajout de la nouvelle method isWhizz
    private function isFizzOrBuzzOrWhizz($number)
    {
        switch ($number) {
            case ($this->isFizzAndIsBuzz($number) AND $this->isWhizz($number)):
                return "FizzBuzzWhizz";
            case ($this->isFizzAndIsBuzz($number)):
                return "FizzBuzz";
            case ($this->isFizz($number) AND $this->isWhizz($number)):
                return "FizzWhizz";
            case ($this->isBuzz($number) AND $this->isWhizz($number)):
                return "BuzzWhizz";
            case ($this->isFizz($number)):
                return "Fizz";
            case ($this->isBuzz($number)):
                return "Buzz";
            case ($this->isWhizz($number)):
                return "Whizz";
            default:
                return $number;
        }
    }

    private function isNumberNotBetween0And1000($number)
    {
        if ($number < 0 OR $number > 1000) {
            return true;
        }

        return false;
    }

    //Method intermédiaire pour éviter une syntaxe trop lourde dans le switch case
    private function isFizzAndIsBuzz($number) {
        if($this->isFizz($number) AND $this->isBuzz($number)){
            return true;
        }
        return false;
    }

    private function isFizz($number)
    {
        return $number % 3 == 0 ? true : false;
    }

    private function isBuzz($number)
    {
        return $number % 5 == 0 ? true : false;
    }

    //J'ai ajouté cette private method pour le nouveau cas isWhizz
    private function isWhizz($number)
    {
        return $number % 7 == 0 ? true : false;
    }
}