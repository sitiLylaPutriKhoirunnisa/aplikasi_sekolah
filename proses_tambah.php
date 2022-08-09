<?php
$nama =$_GET['nama'];
$kelas =$_GET['id_kelas'];
$database = new PDO('mysql:host=localhost;dbname=smkmutu','root','');
$query = $database->query("insert into siswa values('2','$nama','$kelas')");