<?php

$servername = "localhost";
$username = "root";
$dbPassword = ""; 
$database = "tests_prog";

$conn = new mysqli($servername, $username, $dbPassword, $database);

if ($conn->connect_error) {
    die("Błąd połączenia: " . $conn->connect_error);
}

$pyt_id = array();

for ($i = 1; $i <= 10; $i++) {
    $sql = "SELECT pytania FROM pyt_otp WHERE id = $i";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $pyt_id["pyt_id$i"] = $row['pytania'];

        echo $pyt_id["pyt_id$i"]; //wszystkie pytania

    }
    echo $pyt_id["pyt_id1"]; //
}

$conn->close();

?>
