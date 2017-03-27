<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="CSS/index.css" media="screen">
    <link rel="shortcut icon" href="Afbeeldingen/logo.png" type="image/x-icon">
    <title>CyberFarm TM</title>
</head>

<body>
    <div class = "Gegevens">

        <form action = "cyber_farm.php" method = "post">
            <h1> Cyberfarm </h1>

            <p>Vul hieronder de gegevens in</p>

            <p>School:</p>

            <input type="text" name="School" value="">

            <p>Naam:</p>

            <select name="author">
                <option value="Jeroen">Jeroen</option>
                <option value="Tim">Tim</option>
                <option value="Rasheed">Rasheed</option>
                <option value="Michael">Michael</option>
            </select>

            <p>Pin code (vier cijfers): </p>

            <input type="number" name="pin" value=""> <br> <br>

            <input type="submit" class = "submit" value="Start de Cyberfarm" onclick="start()">
        </form>

    </div>

<?php

function start(){
    header("Location: http://localhost/cyberfarm/cyber_farm.php");
    die();
}
?>
</body>

<footer>
    <p>
        Cyberfarm is een onderdeel van Groente GO. Wanneer u de Cyberfarm gaat u akkoord met de servicevoorwaarden van GroeteGO.<br>
        www.groentego.nl<br>
        Groente Go© 2017
    </p>
</footer>
</html>