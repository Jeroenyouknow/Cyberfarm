<?php
//Include the DB connection (includes the connection to the DB)
require_once("db_connection.php");
//Include the parameters for hash
require_once ('settings.php');
//Include the parameter for the log
require_once ('time.php');
//Include the functions for the Cyberfarm for the DB
require_once ('functions.php') ;

//Make an array for an message if the DB connection is gelukt.
$message = "";

//Get the values filled in the page before
$schoolname = $_POST['School'];
$status = 'actief';
$author = $_POST['Medewerker'];
$pin = $_POST['pin'];
$startdate = $log;


//Simple security to check if fields are not empty and code is at more then four numbers
if ($schoolname = ""){
    header('Refresh: 3; url=index.php');
    echo 'Oh nee, je hebt geen school naam ingevuld.';
}
else{
    if ($author = ""){
        header('Refresh: 3; url=index.php');
        echo 'Oh nee, je hebt geen naam ingevuld.';
    }
    else{
        if ($pin >= 0000){
            newCyberfarm($pin, $hash, $schoolname, $author, $startdate, $db);
        }
        else {
            header('Refresh: 3; url=index.php');
            echo "Je hebt geen goede pin code ingevuld";
        }
    }
}



?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="CSS/cyber_farm.css" media="screen">
    <link rel="shortcut icon" href="Afbeeldingen/logo.png" type="image/x-icon">
    <script src="JS/main.js"></script>
</head>
<body>


<div id = "Stop">
    <p> <?php  echo $schoolname; echo $author; echo $pin; ?></p>
    <form action = "return.php" method = "post">
        <input type="hidden" name="Medewerker" value=" <?php echo "$author" ?> ">
        <input type ="hidden" name="Log" value =" <?php echo '$log'  ?> ">
        <input type="submit" class = "submit" value="Stop de Cyberfarm">
    </form>
</div>



<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
    <img src="Afbeeldingen/zaad_1.jpg" draggable="true" ondragstart="drag(event)" id="drag1">
    <img src="Afbeeldingen/zaad_2.jpg" draggable="true" ondragstart="drag(event)" id="drag1">
    <img src="Afbeeldingen/zaad_3.jpg" draggable="true" ondragstart="drag(event)" id="drag1">
</div>

<div id = "Weer">
    <h1> Weer</h1>
    <?php
    if ($weather > 50){ ?>
        <img src="Afbeeldingen/zon.gif" alt="Zon" style="width:192px;height:192px;">
        <?php

    }
    else { ?>
        <img src="Afbeeldingen/rain.gif" alt="Regen" style="width:192px;height:192px;">
        <?php
    }
    ?>

</div>

<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>

</body>
</html>