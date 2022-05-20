<?php
 $a = 5;
 $b =6;
 if($a == 0){
     if($b == 0){
        echo ' phuong trinh co vo so nghiem';
     }else{
        echo 'phuong trinh vo nghiem'
     
     }
 }else{
     $x =- $b / $a;
     echo "pt co nghiem: $x";
 }
?>