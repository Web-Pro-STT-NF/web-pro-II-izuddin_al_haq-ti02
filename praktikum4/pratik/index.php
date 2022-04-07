<?php
include_once "kucing.php";


//objek

//objek
$kucing1 = new kucing("oyen", 2, "coklat");
echo $kucing1->lari() . "<br>"; 
echo $kucing1->makan() . "<br>"; 
echo $kucing1->tidur() . "<br>"; 

$kucing2 = new kucing("blekit", 2, "oren belang");
echo $kucing2->lari() . "<br>"; 
echo $kucing2->makan() . "<br>"; 
echo $kucing2->tidur() . "<br>"; 