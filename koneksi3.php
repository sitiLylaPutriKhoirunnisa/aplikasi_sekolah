<?php

$database = new PDO ("mysql:host=localhost;dbname=bkk","root","");


$query =$database->query("insert into perusahaan values (3,'putri','karawang')");

 
while ($data=$query->fetch()){
    echo $data['nama'];
}

