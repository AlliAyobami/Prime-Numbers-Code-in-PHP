<?php

class CheckNumber{

protected $numbers;

public function evenNumbers(){
    
    for ($numbers = 5; $numbers <= 100; $numbers++) {
        if ($numbers%2==0) {
           echo $numbers . "<br>";
        }
       
    }
}

public function primeNumbers(){
        echo   "3" ."<br>". "5" ."<br>";
    for ($numbers = 5; $numbers <= 100; $numbers++) {
        if ($numbers%2!==0 && $numbers%5!==0 && $numbers%3!==0){
            echo  $numbers . "<br>";
        }    
    }
}

}

$counter = new CheckNumber;
$counter->primeNumbers();