<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Podsumowanie rezerwacji</title>
</head>
<body>
    
</body>
</html>
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
    <link rel="stylesheet" href="checkrezerwacja.css">
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
        
    <?php
    
    require_once 'connect.php';
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $data = $_POST['data'];
    $godzina = $_POST['godzina'];
    $numer_stolika = $_POST['numer'];   
    
    
    
        if(isset($_POST['check']))
        {
            $polaczenie -> query("INSERT INTO zamowieniat VALUES ('" . $_POST['imie'] . "', '" . $_POST['nazwisko'] . "', '" . $_POST['data'] . "', '" . $_POST['godzina'] . "', '" . $_POST['numer'] . "')");
        }
        
              
echo<<<END
<br><br><h1>Potwierdzasz zamówienie?</h1><br><br><br>
 <div class="tabelka">
 <table border="1" cellpadding="10" cellspacing="0">
 <tr>
    <td>Imię</td> <td>$imie</td>
 </tr>
 <tr>
    <td>Nazwisko</td> <td>$nazwisko</td>
 </tr>
 <tr>
    <td>Data</td> <td>$data</td>
 </tr>
 <tr>
     <td>Godzina</td> <td>$godzina</td>
 </tr>
 <tr>
    <td>Numer stolika</td> <td>$numer_stolika</td>
 </tr>
 </table>
 </div>
 <br>
 
 
 
 <form action="checkrezerwacja.php" method="post">
      
      <input type="submit" value="potwierdz" name="check">
    </form>
 
 
END;
?>
    </div>
    <div class="footer">
    <p>Copyright © 2021 Bembol.eu</p>
    </div>    
    
    
</body>
</html>

