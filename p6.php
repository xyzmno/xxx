<?php 
print "<hl style=text-align: center;color: blue;'>Page View Count</h1> <hr>"; 
$name ="counter.txt"; 
$file = fopen($name,"r"); 
$hits = fscanf($file,"%d"); 
fclose($file); 
$hits[0]++; 
$file = fopen($name, "w"); 
fprintf($file,"%d",$hits[0]); 
fclose($file); 
print "<h3>Total number of views: ".$hits[0]."</h3>"; 
?>
