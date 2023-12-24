<?php
$host = "localhost";
$port = "5432";
$dbname = "UASLAB";
$user = "postgres";

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user");
if (!$conn) {
    die("Koneksi gagal: " . pg_last_error());
}
?>