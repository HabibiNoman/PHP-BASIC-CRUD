<?php
  
  $a=20;
  $b=60;
  $c=40;


  if ($a>=$b && $a>=$c) {
  	echo "Big Number A=".$a;
  }  elseif ($b>=$c && $b>=$a) {
  	echo "Big Number B=".$b;
  }	else {
  	echo "Big Number C=".$c;
  }
?>
