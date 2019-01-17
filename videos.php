<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Video's</title>
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
    <form action="oefendoc2.php" method="GET">
        <input type="text" name="zoeken" />
        <input type="submit" value="Search" />
    </form>
    <iframe name="film" width="560" height="315" src="https://www.youtube.com/embed/dnN_UQUwAvU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <div class="flex-horizontal">
        <?php
        include_once "php/config.php";
        $sql= 'select * from videos';
        $result = $connectie->query($sql);
        while ($row = $result->fetch_assoc()){
        ?>
        <div class="video">
            <?php
            echo "<h2>$row[titel]</h2> 
                       <p>$row[samenvatting]</p>
                       <a href=\"https://www.youtube.com/embed/$row[link]\" target=\"film\"><img src=\"Afbeeldingen/$row[poster]\" alt=\"$row[poster]\" style=\"border:0;\"></a>
                       ";}
            ?>
        </div>
    </div>
</main>
<?php
include("php/footer.php");
?>
</body>
</html>