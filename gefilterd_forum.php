<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Forum</title>
    <link rel="stylesheet" href="CSS/styles.css"/>
    <meta name="description" content="Beroepsproduct website over voetbal">
    <meta name="keywords" content="Voetbal">
    <meta name="author" content="Brian van der Wiel & Merel van de Graaf">
</head>
<body>
<?php
include("php/header.php");
?>
<main>
    <form action="gefilterd_forum.php" method="GET">
        <label for="zoeken">Kopje: </label>
        <input type="text" name="kopje" id="kopje" >
        <input type="submit" name="verzenden" value="Verzenden">
    </form>
    <a id="berichtplaatsen" href="bericht_plaatsen.php">Maak een bericht aan</a>
    <?php
    include_once "php/config.php";
    $kopje = $_GET['kopje'];
    if($kopje==NULL){
        $sql = "SELECT * FROM posts";
    }
    else{
        $sql = "SELECT * FROM posts WHERE kopje = '". $kopje  ."'";

    }
    $result = $connectie->query($sql);

    while ($row = $result->fetch_assoc()){
    ?>
    <div class="forum">
        <?php
        echo "<h2>$row[kopje]</h2> 
                <p>$row[bezoeker]</p>
               <p>$row[tekst]</p>";}
        ?>
    </div>
</main>
<?php
include("php/footer.php");
?>
</body>
</html>