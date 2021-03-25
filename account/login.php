<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

<div class="container">
    <div class="login-box">
    <div class="login">
        <h2>Login</h2>
        <form action="validatie.php" method="post">
            <div class="#">
                <label> Gebruikers naam </label>
                <input type="text" name="gebruikersnaam" class="#" required>
            </div>
            <div class="#">
                <label> Wachtwoord </label>
                <input type="password" name="wachtwoord" class="#" required>
            </div>
                <button type="submit" class="#"> Login </button>
        </form>
        <label>Account aan maken?</label>
        <div onclick="location.href= '/registration.php'" class="#">Registreren</div>
    </div>
    </div>
</div>
</body>
</html>
