<?php
$id = $_GET['id'];

include "koneksi2.php";
        $koneksi = new koneksi();
        $db = $koneksi->getKoneksi();
$query = $db->query("DELETE FROM siswa WHERE id='$id'");

if($query){
    header("location:index.php");
}