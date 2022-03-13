<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>current time of server</title>        
    </head>
    <style> p{ 
        color: black; 
        font-size: 90px; 
        position: absolute; 
        top: 50%; 
        left: 50%; 
        transform: translate(-50%, -50%); 
    }

body { 
background-color: white;
} 
</style> 
<h1 style="text-align: center;color: blue;">Current Time of Server</h1> <hr> 
<p> 
<?php 
date_default_timezone_set('Asia/Kolkata'); 
echo date("h:i:s A"); 
?>
</p>
</head>
</html> 
