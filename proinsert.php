<?php
require 'koneksi.php';
 $nama = $_POST['nama'];
 $jurusan = $_POST['jurusan'];
$db = new database();

$query = $db->tambahData('mahasiswa',[$nama,$jurusan]);
 if($query){
    header("Location:index.php");
 }