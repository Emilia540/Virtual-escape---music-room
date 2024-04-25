<?php
session_start();
if (isset($_SESSION['username'])) {
    echo "<p class='loginStatus'>Logget inn som: " . $_SESSION['username'] . "</p>";
} else {
    echo "<p class='loginStatus'>Du er ikke logget inn.</p>";
}
?>


<!DOCTYPE html>
<html>
<head>
    <style>
        p.loginStatus {
    color: white;  /* Gjør teksten hvit */
    font-family: 'Courier New', Courier, monospace;  /* Endre skrifttypen */
    border: 2px solid white;  /* Legg til en hvit ramme rundt teksten */
    padding: 10px;  /* Legg til litt plass rundt teksten */
    background-color: rgba(0, 0, 0, 0.7);  /* Legg til en semi-transparent svart bakgrunn */
}

        body {
            background-image: url('index.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        .header {
            font-size: 80px;  /* Gjør teksten stor */
            text-align: center;  /* Sentrer teksten */
            margin-top: 50px;  /* Legg til 20px mellomrom fra toppen */
            color: white;
            border: black;
            font-family: courier;
        }

        .header1 {
            font-size: 30px;  /* Gjør teksten stor */
            text-align: center;  /* Sentrer teksten */
            margin-top: 50px;  /* Legg til 20px mellomrom fra toppen */
            color: white;
            border: black;
            font-family: courier;
        }

        .navbar {
            overflow: hidden;
            position: relative;
        }

        .navbar a {
            float: right;  /* Flytt lenkene til høyre */
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 30px;
            font-weight: bold;
            transition: 0.4s;

        }

        .navbar a:hover {
            background-color: #ddd;
            color: #5a5a5a;
        }

        .button {
            color: white;
            transition-duration: 0.4s;
            cursor: pointer;
            box-shadow: 10px 10px 5px grey;
            width: auto;
            height: auto;
            max-width: 300px;
            max-height: 200px;
            position: relative; /* Legg til denne linjen */
        }

        .button1 {
            background-color: rgb(101, 89, 89);
            color: black;
            border: 2px solid white;
        }

        .button1:hover {
            background-color: rgba(255, 0, 0, 0.3);
            color: white;
        }

        .button img {
            width: auto;
            height: auto;
            max-width: 300px;
            max-height: 200px;
        }

        .container {
            display: flex;  /* Bruk flexbox for å organisere knappene */
            justify-content: center;  /* Sentrer knappene horisontalt */
            gap: 40px;  /* Legg til litt mellomrom mellom knappene */
            position: absolute;  /* Bruk absolutt posisjonering */
            top: 70%;  /* Plasser containeren 70% ned fra toppen av siden */
            left: 50%;  /* Sentrer containeren horisontalt */
            transform: translate(-50%, -50%);  /* Juster for containerens egen størrelse */
            display: flex;  /* Bruk flexbox for å organisere knappene */
            justify-content: center;  /* Sentrer knappene horisontalt */
        }

        .button .text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: rgb(255, 255, 255);
            font-size: 20px;
            text-align: center;
            transition: 0.5s;
            font-weight: bold;
        }

        .button:hover .text {
            opacity: 0;
        }

    </style>
</head>
<body>


<div class="navbar">
  <a href="#Rommene">Rommene</a>
  <a href='contact.html'>Kontakt Oss</a>
  <?php
session_start();
if (isset($_SESSION['username'])) {
    echo "<p>Logget inn som: " . $_SESSION['username'] . "</p>";
} else {
    echo "<p>Du er ikke logget inn.</p>";
}
?>
</div>

    <h1 class="header">Virituale Escape Rom</h1>
    <h1 class="header1">Prøv deg i de 4 forskjellige rommene og løs gåtene for å få poeng!</h1>
    <div class="container">
        <button class="button button1">
        <a href='ok.php'>
            <img src="serverrommet.jpg" alt="Image 1">
            <span class="text">Snik deg inn i serverrommet <br>.. </span>
        </button>
        <button class="button button1">
        <a href='ok.php'>
            <img src="musikkrommet.jpg" alt="Image 2">
            <span class="text">Dra deg gjennom musikkrommet<br> ...</span>
        </button>
        <button class="button button1">
        <a href='ok.php'>
            <img src="fortiden.jpg" alt="Image 3">
            <span class="text">Tilbake i fortiden<br>.....</span>
        </button>
        <button class="button button1">
        <a href='ok.php'>
            <img src="dinosaurverden.jpg" alt="Image 4">
            <span class="text">Escape fra dinosaurrommet<br>....</span>
        </button>
    </div>
</body>
</html>
