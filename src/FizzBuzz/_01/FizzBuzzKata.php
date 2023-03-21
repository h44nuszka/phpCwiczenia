<?php

namespace App\FizzBuzz\_01;

class FizzBuzzKata
{
    public function fizzBuzz(): void
    {
        for ($i = 0; $i <100; ++$i){
            if ($this->isDivisableByThree($i +1) && $this->isDivisableByFive($i +1)){
                $this->result[$i] = 'FizzBuzz';
            }
            elseif ($this->isDivisableByThree($i +1)){
                $this->result[$i] = 'Fizz';
            }
            elseif ($this->isDivisableByFive($i +1)){
                $this->result[$i] = 'Buzz';
            }
            else{
                $this->result[$i] = (string) ($i+1);
            }
    }
    }

    public function getValue(int $number): string
    {
        if(!isset($result[$number -1])){
            throw new \OutOfRangeException('Invalid number');
        }
        return $this->result[$number -1];
    }

    private function isDivisableByThree(int $number): bool{
        return $number % 3 === 0;
    }
    private function isDivisableByFive(int $number): bool{
        return $number % 5 === 0;
    }
}