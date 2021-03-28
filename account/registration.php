<html>
<head>
    <meta charset="UTF-8">
    <title>Registreren</title>
    <link rel="stylesheet" href="stylesheet.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="container">
    <div class="title">Registreren</div>
    <form action="registrationsql.php" method="post">
        <div class="gegevens">
            <div class="invulvlak">
                <span class="informatie">Gebruikersnaam</span>
                <input type="text" placeholder="Vul hier een gebruikersnaam in" name="gebruikersnaam" required>
            </div>
            <div class="invulvlak">
                <span class="informatie">Wachtwoord</span>
                <input type="password" placeholder="Vul hier een wachtwoord in" name="wachtwoord" required>
            </div>
            <div class="invulvlak">
                <span class="informatie">Email Adres</span>
                <input type="text" placeholder="voorbeeld@outlook.com" name="email" required>
            </div>
        </div>
        <div class="button">
            <input type="submit" value="Registreren">
        </div>
    </form>
    <div class="l">
        <div class="aa">
            Al een account?
        </div>
        <div onclick="location.href= 'index.php'" class="loginlink">Login</div>
    </div>
</div>


</body>
</html>