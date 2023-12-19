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
                <input type="radio" name="q2" value="a"><?php echo $var1_id["var1_id2"]; ?><br>
                <input type="radio" name="q2" value="b"><?php echo $var2_id["var2_id2"]; ?><br>
                <input type="radio" name="q2" value="c"><?php echo $var3_id["var3_id2"]; ?><br>
            </div>

            <div class="question">
                <p><?php echo $pyt_id["pyt_id3"]; ?></p>
                <input type="radio" name="q3" value="a"><?php echo $var1_id["var1_id3"]; ?><br>
                <input type="radio" name="q3" value="b"><?php echo $var2_id["var2_id3"]; ?><br>
                <input type="radio" name="q3" value="c"><?php echo $var3_id["var3_id3"]; ?><br>
            </div>

            <div class="question">
                <p><?php echo $pyt_id["pyt_id4"]; ?></p>
                <input type="radio" name="q4" value="a"> <?php echo $var1_id["var1_id4"]; ?><br>
                <input type="radio" name="q4" value="b"> <?php echo $var2_id["var2_id4"]; ?><br>
                <input type="radio" name="q4" value="c"> <?php echo $var3_id["var3_id4"]; ?><br>
            </div>

            <div class="question">
                <p><?php echo $pyt_id["pyt_id5"]; ?></p>
                <input type="radio" name="q5" value="a"><?php echo $var1_id["var1_id5"]; ?> <br>
                <input type="radio" name="q5" value="b"><?php echo $var2_id["var2_id5"]; ?><br>
                <input type="radio" name="q5" value="c"><?php echo $var3_id["var3_id5"]; ?><br>
            </div>

            <div class="question">
                <p><?php echo $pyt_id["pyt_id6"]; ?></p>
                <input type="radio" name="q6" value="a"> <?php echo $var1_id["var1_id6"]; ?><br>
                <input type="radio" name="q6" value="b"> <?php echo $var2_id["var2_id6"]; ?><br>
                <input type="radio" name="q6" value="c"> <?php echo $var3_id["var3_id6"]; ?><br>
            </div>

            <div class="question">
                <p><?php echo $pyt_id["pyt_id7"]; ?></p>
                <input type="radio" name="q7" value="a"> <?php echo $var1_id["var1_id7"]; ?><br>
                <input type="radio" name="q7" value="b"> <?php echo $var2_id["var2_id7"]; ?><br>
                <input type="radio" name="q7" value="c"> <?php echo $var3_id["var3_id7"]; ?><br>
            </div>

            <div class="question">
                <p><?php echo $pyt_id["pyt_id8"]; ?></p>
                <input type="radio" name="q8" value="a"><?php echo $var1_id["var1_id8"]; ?><br>
                <input type="radio" name="q8" value="b"> <?php echo $var2_id["var2_id8"]; ?><br>
                <input type="radio" name="q8" value="c"><?php echo $var3_id["var3_id8"]; ?><br>
            </div>

            <div class="question">
                <p><?php echo $pyt_id["pyt_id9"]; ?></p>
                <input type="radio" name="q9" value="a"> <?php echo $var1_id["var1_id9"]; ?><br>
                <input type="radio" name="q9" value="b"><?php echo $var2_id["var2_id9"]; ?><br>
                <input type="radio" name="q9" value="c"> <?php echo $var3_id["var3_id9"]; ?><br>
            </div>

            <div class="question">
                <p><?php echo $pyt_id["pyt_id10"]; ?></p>
                <input type="radio" name="q10" value="a"> <?php echo $var1_id["var1_id10"]; ?><br>
                <input type="radio" name="q10" value="b"> <?php echo $var2_id["var2_id10"]; ?><br>
                <input type="radio" name="q10" value="c"> <?php echo $var3_id["var3_id10"]; ?><br>
            </div>

            <!-- Przycisk do wysłania formularza -->
            <input type="submit" value="Sprawdź odpowiedzi, powodzenia:3">
        </form>

        <!-- Miejsce na wyświetlenie wyniku -->
        <div id="result-container"></div>
    </div>
</body>
</html>
