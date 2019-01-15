<?php
print_r($_GET);
$antwoord = "<p>Beste {$_GET['naam']}, </p>
             <p>Je hebt je opgegeven voor: 
             <strong>{$_GET['vak']}</strong><br></p> 
             <p>Opmerking:<br>
             <em>{$_GET['opmerking']}</em></p>";
$antwoord .= "<p>Bedankt voor je inschrijving!</p>";
echo $antwoord;


?>

