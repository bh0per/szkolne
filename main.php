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

       // echo $pyt_id["pyt_id$i"]; // wszystkie pytania
    }
    // Remove the following line, as it is printing the first question inside the loop
    // echo $pyt_id["pyt_id1"];
}

$var1_id = array();

for ($i = 1; $i <= 10; $i++) {
    $sql = "SELECT var1 FROM pyt_otp WHERE id = $i";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $var1_id["var1_id$i"] = $row['var1'];

       // echo $var1_id["var1_id$i"]; // wszystkie var1
    }
    // Remove the following line, as it is printing var1_id6 inside the loop
    // echo $var1_id["var1_id6"];
}


$var2_id = array();

for ($i = 1; $i <= 10; $i++) {
    $sql = "SELECT var2 FROM pyt_otp WHERE id = $i";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $var2_id["var2_id$i"] = $row['var2'];

       // echo $var2_id["var2_id$i"]; // wszystkie var2
    }
}

$var3_id = array();

for ($i = 1; $i <= 10; $i++) {
    $sql = "SELECT var3 FROM pyt_otp WHERE id = $i";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $var3_id["var3_id$i"] = $row['var3'];

       // echo $var3_id["var3_id$i"]; // wszystkie var3
    }
}


$conn->close();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Egzamin ABC</title>
    <style>
                body {
            font-family: Arial, sans-serif;
        }

        #exam-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .question {
            margin-bottom: 15px;
        }
        
    </style>
</head>
<body>
    <div id="exam-container">
        <h1>Egzamin z Bezpieczeństwa Informatycznego</h1>
        <h2>zaznacz wszystko!!!</h2>
        <img src="https://media.tenor.com/yk8nhx3fZGYAAAAj/sebas-bleizeffer.gif" alt="Opis obrazka" width="150" height="100">

        <form id="exam-form" method="post" action="check_answers.php"> <!-- Dodano atrybuty method i action -->
            
            <div class="question">
                <p><?php echo $pyt_id["pyt_id1"]; ?></p>
                <input type="radio" name="q1" value="a"><?php echo $var1_id["var1_id1"]; ?><br>
                <input type="radio" name="q1" value="b"><?php echo $var2_id["var2_id1"]; ?><br>
                <input type="radio" name="q1" value="c"> <?php echo $var3_id["var3_id1"]; ?><br>
            </div>

            <div class="question">
                <p><?php echo $pyt_id["pyt_id2"]; ?></p>
                <input type="radio" name="q2" value="a"><br>
                <input type="radio" name="q2" value="b"><br>
                <input type="radio" name="q2" value="c"><br>
            </div>

            <div class="question">
                <p><?php echo $pyt_id["pyt_id3"]; ?></p>
                <input type="radio" name="q3" value="a"><br>
                <input type="radio" name="q3" value="b"><br>
                <input type="radio" name="q3" value="c"><br>
            </div>

            <div class="question">
                <p><?php echo $pyt_id["pyt_id1"]; ?></p>
                <input type="radio" name="q4" value="a"> a. Złośliwe oprogramowanie<br>
                <input type="radio" name="q4" value="b"> b. Krótki film animowany<br>
                <input type="radio" name="q4" value="c"> c. Szybki internetowy router<br>
            </div>

            <div class="question">
                <p><?php echo $pyt_id["pyt_id1"]; ?></p>
                <input type="radio" name="q5" value="a"> a. Przejęcie kontroli nad danym użytkownikiem lub systemem komputerowym<br>
                <input type="radio" name="q5" value="b"> b. Legalne łamanie zabezpieczeń systemu<br>
                <input type="radio" name="q5" value="c"> c. Kraken - gigantyczne morskie stworzenie<br>
            </div>

            <div class="question">
                <p><?php echo $pyt_id["pyt_id1"]; ?></p>
                <input type="radio" name="q6" value="a"> a. Przejście na emeryturę<br>
                <input type="radio" name="q6" value="b"> b. Przejęcie kontroli nad danym użytkownikiem lub systemem komputerowym<br>
                <input type="radio" name="q6" value="c"> c. Inwazja kosmitów<br>
            </div>

            <div class="question">
                <p><?php echo $pyt_id["pyt_id1"]; ?></p>
                <input type="radio" name="q7" value="a"> a. Przejęcie numeru telefonu ofiary w celu przejęcia konta<br>
                <input type="radio" name="q7" value="b"> b. Wymiana kart SIM między użytkownikami<br>
                <input type="radio" name="q7" value="c"> c. Symulowanie ślubu<br>
            </div>

            <div class="question">
                <p><?php echo $pyt_id["pyt_id1"]; ?></p>
                <input type="radio" name="q8" value="a"> a. Publiczne ujawnianie prywatnych informacji o danej osobie<br>
                <input type="radio" name="q8" value="b"> b. Nowoczesny sposób gotowania<br>
                <input type="radio" name="q8" value="c"> c. Technika rzeźbienia w drewnie<br>
            </div>

            <div class="question">
                <p><?php echo $pyt_id["pyt_id1"]; ?></p>
                <input type="radio" name="q9" value="a"> a. Wyzywanie ludzi w grach<br>
                <input type="radio" name="q9" value="b"> b. Nielegalne pozyskiwanie poufnych informacji<br>
                <input type="radio" name="q9" value="c"> c. Automatyczne strzelanie w grach<br>
            </div>

            <div class="question">
                <p><?php echo $pyt_id["pyt_id1"]; ?></p>
                <input type="radio" name="q10" value="a"> a. Robienie zakłóceń na kanałach radiowych<br>
                <input type="radio" name="q10" value="b"> b. Przechwytywanie nieautoryzowanego dostępu do sieci Wi-Fi<br>
                <input type="radio" name="q10" value="c"> c. Masowe wysyłanie zdjęć airdroppem<br>
            </div>

            <!-- Przycisk do wysłania formularza -->
            <input type="submit" value="Sprawdź odpowiedzi, powodzenia:3">
        </form>

        <!-- Miejsce na wyświetlenie wyniku -->
        <div id="result-container"></div>
    </div>
</body>
</html>
