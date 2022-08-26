<?php
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];

include "koneksi2.php";
        $koneksi = new koneksi();
        $db = $koneksi->getKoneksi();
$query = $db->query("INSERT INTO siswa VALUES('', '$nama', '$kelas')");

if($query){
    header("location:index.php");
}