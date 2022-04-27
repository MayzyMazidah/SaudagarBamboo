<?php

if(isset($_POST[ 'hantar'])){
    require_once 'database.connect.php';

   $nama=$_POST['nama'];
   $alamat=$_POST['alamat'];
   $nombortelefon=$_POST['nombortelefon'];
   $jenistempahan=$_POST['jenistempahan'];

    $query= "INSERT INTO saudagarbamboo_jadual (nama, alamat, nombortelefon, jenistempahan) VALUES ('$nama', '$alamat', '$nombortelefon', '$jenistempahan')";

    if (mysqli_query($connection, $query)){
        echo "Rekod disimpan" ;
     }else{
        echo "Rekod TIDAK disimpan";
        }
    }
     else{
        echo "Tidak berjaya";
     }