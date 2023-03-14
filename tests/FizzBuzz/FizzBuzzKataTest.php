<?php

namespace Test\FizzBuzz;
use App\FizzBuzz\FizzBuzzKata;
use PHPUnit\Framework\TestCase;

class FizzBuzzKataTest extends TestCase
{
    public function testFizzBuzzForOne():void
    {
        $fizzBuzzKata = new FizzBuzzKata();
        $fizzBuzzKata->fizzBuzz();
        $actual = $fizzBuzzKata->getValue(1);
        $this->assertSame(1, $actual);

        $actual = $fizzBuzzKata->getValue(3);
        $this->assertSame(3, $actual);

    }
}