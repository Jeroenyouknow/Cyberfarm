<?php
require_once("data.php");





//Get the data send from index.php
$log = '';
$schoolname = $_POST['School'];
$author = $_POST['author'];
$pin = $_POST['pin'];

//When no name is filled in => put name in DB as not given
if ($schoolname === ""){
    $log = $log . "\r\n Er is geen Schoolnaam gegeven door de gebruiker.";
}





//The pin must be higher than the number 1111 if not return to index.php trough error.php
if ($pin > 1111){

}
else {
    ErrorPin();
}


?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="CSS/cyber_farm.css" media="screen">
    <link rel="shortcut icon" href="Afbeeldingen/logo.png" type="image/x-icon">
    <script src="JS/main.js"></script>
</head>
<body>

<p> <?php  echo $schoolname; ?></p>

<div id = "Stop">
    <form action = "return.php" method = "post">
        <input type="hidden" name="log" value=" <?php echo "$log" ?> ">
        <input type="hidden" name="School" value=" <?php echo "$schoolname" ?> ">
        <input type="hidden" name="author" value=" <?php echo "$author" ?> ">
        <input type="hidden" name="pin" value=" <?php echo "$pin" ?> ">
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