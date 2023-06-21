<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "db_pendaftaran2";


//$host = "localhost";
//$user = "id20865514_ali98";
//$password = "Angker-123";
//$db = "id20865514_db_pendaftaran";

$conn = mysqli_connect($host, $user, $password, $db);
if (!$conn) {
    die("Koneksi gagal:" . mysqli_connect_error());
}
