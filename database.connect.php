<?php

$servername = "localhost"; 
$dBusername = "root"; 
$dBpassword = ""; 
$db_name = "saudagarbamboodatabase"; 

$connection = mysqli_connect($servername, $dBusername, $dBpassword, $db_name);

     if(!$connection) {
         die ("Gagal berhubung: " . mysqli_connect_error());
     }
echo "Berjaya berhubung <br> ";