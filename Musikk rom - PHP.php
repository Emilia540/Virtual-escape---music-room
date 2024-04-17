<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Musikk rommet</title>
    <style>
        .right-align {
            text-align: right;
        }
    </style>
</head>
<body>

<?php
    $roomDescription = "Klarer du å gjette hvilken note som åpner døren?";
    
    echo "<!DOCTYPE html>";
    echo "<html>";
    echo "<head>";
    echo "<title>Virtuell Escape Room</title>";
    echo "<link rel='stylesheet' type='text/css' href='Musikk rom - css.css'>";
    echo "</head>";
    echo "<body>";
    echo "<img src='Gitar.png'>";
    echo "<p>" . $roomDescription . "</p>";
    echo "</body>";
    echo "</html>";
    ?>


</body>
</html>
<div class="container">
    <?php
        $roomDescription = "Klarer du å gjette hvilken note som åpner døren?";
       
        echo "<p class='right-align'>" . $roomDescription . "</p>";
    ?>
</div>

</body>
</html>