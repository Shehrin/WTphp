<?php

 $length=5;
 $width=5;
 
 if($length==$width)
 {
	 echo "The shape is a square.";
 }
 else
 {
	 $area=$length*$width;
	 $peri=$length+$width;
	 echo "Area =" .$area."<br>";
	 echo "Perimetre =" .$peri."<br>";
	 
 }



?>