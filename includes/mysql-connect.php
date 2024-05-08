<?php
$streznik = "localhost:3307";
$usn = "root";
$geslo = "";
$baza = "krompir";

try {
    $conn = new PDO("mysql:host=$streznik;dbname=$baza", $usn, $geslo);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Povezava uspešna!";
} catch(PDOException $e) {
    echo "Povezava neuspešna: ".$e->getMessage();
}

?>