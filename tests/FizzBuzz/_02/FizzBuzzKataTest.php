<?php
namespace Test\FizzBuzz\_02;
use PHPUnit\Framework\TestCase;
use App\FizzBuzz\_02\FizzBuzzKata;

class FizzBuzzKataTest extends TestCase{
    public function testFizzBuzz(): void{
        // given
        $expected = [];
        $fizzBuzz = new FizzBuzzKata();
        $fizzBuzz->fizzBuzz();
        //when
        $actual = $fizzBuzz->getValue();
        //then
        $this->assertSame($expected, $actual);
    }
}