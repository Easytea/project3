<html>
<head>
    <title>Registreren</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

<div class="container">
    <div class="login-box">
    <div class="login">
        <h2>Registreren</h2>
        <form action="registrationsql.php" method="post">
            <div class="#">
                <label> Gebruikers naam </label>
                <input type="text" name="gebruikersnaam" class="#" required>
            </div>
            <div class="#">
                <label> Wachtwoord </label>
                <input type="password" name="wachtwoord" class="#" required>
            </div>
            <div class="#">
                <label> Email </label>
                <input type="text" name="email" class="#" required>
            </div>
            <button type="submit" class="#"> Registreren </button>
        </form>
        <label>Al een account?</label>
        <div onclick="location.href= 'login.php'" class="#">Login</div>
    </div>
    </div>

</div>
</body>
</html>