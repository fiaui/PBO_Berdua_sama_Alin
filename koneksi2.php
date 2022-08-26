<?php
    class koneksi{
        function getKoneksi(){
            return new PDO("mysql:host=localhost;dbname=sekolah3", 'root', '');
        }
    }