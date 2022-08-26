<?php
require "koneksi.php";
 $nama = $_POST['nama'];
 $jurusan = $_POST['jurusan'];
 $id = $_POST['id'];

 $database = new database();
 $query = $database->update("mahasiswa",['nama'=>$nama, 'jurusan' => $jurusan], ['id' => $id]);

 if($query){
    header("Location:index.php");
 }