<?php
    error_reporting(E_ALL); ini_set('display_errors', TRUE); ini_set('display_startup_errors', TRUE);
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
    <title>Restauracja</title>
    <link rel="stylesheet" href="restauracja.css">
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
    <div class="all"><div class="container">
    
    
    <h1>Rezerwacja stolika</h1>
    <?php
    
    require_once 'connect.php';
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $data = $_POST['data'];
    $godzina = $_POST['godzina'];
    $numer_stolika = $_POST['numer'];   
    
    
    
    if(isset($_POST['check']))
    {
        $polaczenie -> query("INSERT INTO zamowienia VALUES ({$imie}, {$nazwisko}, {$data}, {$godzina}, {$numer_stolika})");
        
    }
    ?>
    <form action="danke.php" method="post">
    <div class="dane">
        
        <input type="text" name="imie" placeholder="Imię">
        <br>
        <br>
        <input type="text" name="nazwisko" placeholder="Nazwisko">
        <br>
        <br>
        <input type="date" name="data" >
        <br>
        <br>
        <input type="time" name="godzina" >
        <br>
        <br>
        <input type="number" name="numer" placeholder="Numer stolika">
    </div>
    <br><br>
    <div class="potwierdzenie">
    <input type="submit" value="Wyślij rezerwację" name="check">
    </div>
    </form>
    
    </div>
    </div>
    <div class="footer">
    <p></p>
    </div>    
    Copyright © 2021 Bembol.eu
    
    
</body>
</html>