<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
	
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Pattern</title>
    <link rel="stylesheet" href="danke.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">
    <h1>Bembol restauration</h1>   
        <?php
            echo "<h2>Witaj ".$_SESSION['user'].'! [ <a href="logout.php" class="wyloguj">Wyloguj się </a>]</h2> ';
        ?>
    </div>
    <div class="container">
    <div class="danke">
        <h1>Dziękujemy za złożenie zamówienia</h1>
        <br><br>
        <button><a href="restauracja.php">Powrót do strony głównej<a></button> 
    </div>
    
    </div>
    <div class="footer">
    <p>Copyright © 2021 Bembol.eu</p>
    </div>    
    
    
</body>
</html>
