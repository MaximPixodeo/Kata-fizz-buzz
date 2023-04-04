<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\FizzBuzz;


class FizzBuzzTest extends TestCase
{

    public function testParameterShouldBeBetween1And1000()
    {
        $fizzBuzz = new fizzBuzz;

        $this->assertEquals(true, $fizzBuzz->calculate(75));
    }

    public function testIfNumberIsDividibleBy3ShouldReturnFizz()
    {
        $fizzBuzz = new fizzBuzz;

        $this->assertEquals("Fizz", $fizzBuzz->calculate(3));
        $this->assertEquals("Fizz", $fizzBuzz->calculate(6));
        $this->assertEquals("Fizz", $fizzBuzz->calculate(9));
    }

    public function testIfNumberIsDividibleBy5ShouldReturnBuzz()
    {
        $fizzBuzz = new fizzBuzz;

        $this->assertEquals("Buzz", $fizzBuzz->calculate(5));
        $this->assertEquals("Buzz", $fizzBuzz->calculate(10));
    }

    public function testIfNumberIsDividibleBy5AndBy3ShouldReturnFizzBuzz()
    {
        $fizzBuzz = new fizzBuzz;

        $this->assertEquals("FizzBuzz", $fizzBuzz->calculate(15));
    }

    public function testIfNumberIsNotDividibleBy3AndBy5ShouldReturnNumber()
    {
        $fizzBuzz = new fizzBuzz;

        $this->assertEquals(1, $fizzBuzz->calculate(1));
    }

    public function testIfNumberIsDividibleBy7ShouldReturnWhizz()
    {
        $fizzBuzz = new fizzBuzz;

        $this->assertEquals("Whizz", $fizzBuzz->calculate(7));
        $this->assertEquals("Whizz", $fizzBuzz->calculate(14));
    }

    public function testIfNumberIsDividibleBy7And3ShouldReturnFizzWhizz()
    {
        $fizzBuzz = new fizzBuzz;

        $this->assertEquals("FizzWhizz", $fizzBuzz->calculate(21));
    }

    public function testIfNumberIsDividibleBy5And3ShouldReturnBuzzWhizz()
    {
        $fizzBuzz = new fizzBuzz;

        $this->assertEquals("BuzzWhizz", $fizzBuzz->calculate(35));
    }

    public function testIfNumberIsDividibleBy7And5And3ShouldReturnFizzBuzzWhizz()
    {
        $fizzBuzz = new fizzBuzz;

        $this->assertEquals("FizzBuzzWhizz", $fizzBuzz->calculate(105));
    }

}
