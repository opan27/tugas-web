<?php

$server =  "localhost";
$user = "root";
$password = 'Mf@dmin2025';
$database = "db_pendaftaran";

$db = mysqli_connect($server, $user,$password,$database);

if(!$db) {
    die ("gagal terhubung dengan databases" .mysqli_connect_error());
}