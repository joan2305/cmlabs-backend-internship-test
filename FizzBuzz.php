<?php

// Pada code pertama ini, implementasi problem FizzBuzz dapat diselesaikan dengan menggunakan modulo
echo "CODE PERTAMA";
for($i=1; $i<101; $i++){
    if($i%3 == 0){
        echo $i . " - " . "FizzBuzz\n";
    }
    else if($i%5 == 0){
        echo $i . " - " ."Buzz\n";
    }
    //Jika angka dapat dibagi 3 dan 5, maka KPKnya adalah 15 sehingga angka yang habis dibagi 15 pasti habis dibagi 3 dan 5
    else if($i%15 == 0){
        echo $i . " - " ."FizzBuzz\n";
    }
    else {
        echo $i . "\n";
    }
}

echo "CODE KEDUA";
// Modulo adalah operasi yang mahal dibandingkan operasi aritmatik lainnya seperti tambah dan kurang 
// %15 juga dapat diinpretasikan sebagai %3 dan %5
// Sehingga time complexitynya lebih rumit dibandingkan apabila hanya menggunakan operasi pertambahan
// Code di bawah ini adalah contoh untuk implementasi lainnya untuk problem FizzBuzz

$fizzbuzz = "";
$ctr3 = 0; // counter for 3
$ctr5 = 0; // counter for 5
for($i = 1; $i<101; $i++){
    $ctr3++;
    $ctr5++;
    // Jika counter untuk 3 sudah mencapai 3, maka artinya current angka adalah kelipatan 3
    if($ctr3 == 3){
        $fizzbuzz = $fizzbuzz . "Fizz";
        $ctr3 = 0;
    }
    if($ctr5 == 5){
        $fizzbuzz = $fizzbuzz . "Buzz";
        $ctr5 = 0;
    }
    if(strlen($fizzbuzz) == 0){
        echo $i . "\n";
    }
    else {
        echo $i . " - " . $fizzbuzz . "\n";
    }
    $fizzbuzz = "";
}
