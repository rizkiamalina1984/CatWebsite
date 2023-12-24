<?php
// connection.php
$host = "localhost";
$user = "postgres";
$password = "bichassbad";
$dbname = "Kitty_Kingdom";

$conn = pg_connect("host=$host dbname=$dbname user=$user password=$password");

if (!$conn) {
    die("Koneksi gagal: " . pg_last_error());
}
?>
