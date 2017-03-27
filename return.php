<?php
$school_naam = $_POST['School'];
$author = $_POST['author'];


if ($school_naam === ""){
    $school_naam = 'School naam onbekend';
}
?>

<html>

<head>

    <link rel="stylesheet" type="text/css" href="CSS/Return.css" media="screen">
    <link rel="shortcut icon"  href="Afbeeldingen/logo.png" type="image/x-icon">

</head>

<body>

<div id = "message">

    <div id="logo">
        <img src="Afbeeldingen/logo.png" height="33%" width="15%">
    </div>

    <div id = "tekst">

        <h1> Bedankt, <?php echo $school_naam; ?>  </h1><br>

        <p>
            Bedankt voor het proberen van Groente GO, wij hopen dat je het een leuke ervaring vond.<br>
            Dit was een demo van het onderdeel: Cyber Farm van het totale project Groente GO.<br>
            Zou je graag de enquete willen invullen wat je van de gehele ervaring vond.<br>
            Je kan hieronder een nieuwe Cyberfarm starten. <br>

            Team Groente GO <br>
        </p>

    </div>

        <div id = "Return">

            <form action = "index.php">
                <input type="submit" class = "submit" value="Start een nieuwe Cyberfarm">
            </form>

            <form action = "return_admin.php">
                <input type="submit" class = "submit" value="Medewerker Panel">
            </form>

        </div>
    </div>

</body>