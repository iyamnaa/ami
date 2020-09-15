<?php
  // $batas = 100;
  // $current = 0;
  // $number = 1;
  // $odds = [];

  // while ($current < $batas) {
  //   if($number % 2 != 0){
  //     // $odds[$current] = $number; 
  //     $current++;
  //     echo $number.' ';
  //   }
  //   $number++;
  // }

  // echo "<br><br><br>";  

    // $batas = 100;
    // $number = 2;
    // $current = 0;
    // $primes = [];
    // $pengulangan = 0;

    // while ($current < $batas) {
    //   if($number % 2 != 0 || $number == 2){
    //     for ($i=2; $i <= $number; $i++) { 
    //       if($i == $number){
    //         $primes[$current] = $number;
    //         echo $number.' ';
    //         $current++;
    //         $pengulangan++;
    //       }
    //       if($number % $i == 0){
    //         $pengulangan++;
    //         break;
    //       }
    //     }
    //   }
    //   $number++;
    // }

    // echo $pengulangan;

    $limit = 5;
    $total = 1;
    $number = 1;

    while ($number <= $limit) {
      echo $number;
      $total *= $number;
      if ($number == $limit){
        echo ' = ';
      }else {
        echo ' x ';
      }
      $number++;
    }

    echo $total;

?>