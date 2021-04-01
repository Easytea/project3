<?php
    session_start();
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="stylesheet.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="container">
    <div class="title">Login</div>
        <form action="validatie.php" method="post">
            <div class="gegevens">
                <div class="invulvlak">
                    <span class="informatie">Gebruikersnaam</span>
                    <input type="text" name="gebruikersnaam" class="#" required>
                </div>
                <div class="invulvlak">
                    <span class="informatie">Wachtwoord</span>
                    <input type="password" name="wachtwoord" class="#" required>
                </div>
            </div>   
            <div class="button">
                <input type="submit" value="Login">
            </div>
        </form>
        <div class="l">
            <div class="aa">
                Nog geen account? 
            </div>
        <div onclick="location.href= 'registration.php'"class="loginlink">Registreren</div>
    </div>
</div>
</body>
</html>
<?php
?>