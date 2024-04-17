<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Musikk rommet</title>
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
            background-image: linear-gradient(200deg, #837d88, #7ff0d7);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            max-width: 80%;
            margin-left: auto;
            margin-right: 145px;
            margin-top: -350px; /* Justerer margintoppen for å flytte teksten oppover */
        }

        .container p {
            text-align: right;
        }

        img {
            width: 200px;
            height: 250px;
        }

        img {
            width: 50vw;
            height: 100vh;
            object-fit: cover;
        }

        img {
            position: absolute;
            left: 0;
        }
    </style>
</head>
<body>
<div class="container">
    <?php
        $roomDescription = "Klarer du å gjette hvilken note som åpner døren?";
        echo "<p>" . $roomDescription . "</p>";
    ?>
</div>

<img src="Gitar.png">
</body>
</html>

