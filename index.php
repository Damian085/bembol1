<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Pattern</title>
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">
    <h1>Bembol restauration</h1>   
        
    </div>
    <div class="container">
    
    <br><br>

    <form action="zaloguj.php" method="post">
        <br>
        <div class="main1">
            <div class="main">
            <div class="login">
        <input type="text" name="login" placeholder="Login">
        <br><br>
            <input type="password" name="haslo" placeholder="Hasło">
        <br><br>                      
        <div class="checklogin">
            <input type="submit" value="Zaloguj się"><br> <br>
        </div>

    </div>
                <div class="register"><button><a href="rejestracja.php">Zarejestruj się!</a></button><br></div>
                
            </div>
        </div>
    </form>
        <?php
            if(isset($_SESSION['blad']))    echo $_SESSION['blad'];
        ?>
        
    
    </div>
    <div class="footer">
    <p>Copyright © 2021 Bembol.eu</p>
    </div>    
    
    
</body>
</html>

