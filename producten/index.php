<<<<<<< HEAD
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>SpeedRUN</title>
    <link rel="stylesheet" href="stylesheet.css">
    <script>
        function buttonclick()
        {
            var menuList = document.getElementById("menu");
            if (menuList.className == "menuOff")
            {

                menuList.className = "menuOn";
            } else
            {

                menuList.className = "menuOff";
            }
        }
    </script>
</head>
<body>
<div id="menucontainer">
    <button class="dropbtn" onclick="buttonclick();">
        <div class="stripe"></div>
        <div class="stripe"></div>
        <div class="stripe"></div>
    </button>
    <ul id="menu" class="menuOff">
        <li><a href="../producten/index.php">Schoenen ></a></li>
        <li><a href="../producten/index.php">Shirts ></a></li>
        <li><a href="../producten/index.php">Broeken ></a></li>
    </ul>

    <div onclick="location.href= '../index.html'" id="logo"></div>

    <div class="search">
        <input type="text" placeholder="Search...">
    </div>

    <div onclick="location.href= '../winkelwagen/index.php'" id="winkelwagen">
    </div>

    <div onclick="location.href= '../account/index.php'" id="account">
    </div>
</div>
<!--------------------------Menu-Balk-------------------------------->
<?php
$host = '127.0.0.1';
$db = 'speedrun';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE    => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES      => false,
];
try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

$stmt = $pdo->query("SELECT * FROM products");

while($row = $stmt->fetch())
{
    echo $row['id'] . "<br/>";
    echo $row['merk'] . "<br/>";
    echo $row['naam'] . "<br/>";
    echo "€";
    echo $row['prijs'] . "<br/>";
}
?>

</body>
=======
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>SpeedRUN</title>
    <link rel="stylesheet" href="stylesheet.css">
    <script>
        function buttonclick()
        {
            var menuList = document.getElementById("menu");
            if (menuList.className == "menuOff")
            {

                menuList.className = "menuOn";
            } else
            {

                menuList.className = "menuOff";
            }
        }
    </script>
</head>
<body>
<div id="menucontainer">
    <button class="dropbtn" onclick="buttonclick();">
        <div class="stripe"></div>
        <div class="stripe"></div>
        <div class="stripe"></div>
    </button>
    <ul id="menu" class="menuOff">
        <li><a href="../producten/index.php">Schoenen ></a></li>
        <li><a href="../producten/index.php">Shirts ></a></li>
        <li><a href="../producten/index.php">Broeken ></a></li>
    </ul>

    <div onclick="location.href= '../index.html'" id="logo"></div>

    <div class="search">
        <input type="text" placeholder="Search...">
    </div>

    <div onclick="location.href= '../winkelwagen/index.php'" id="winkelwagen">
    </div>

    <div onclick="location.href= '../account/index.php'" id="account">
    </div>
</div>
<!--------------------------Menu-Balk-------------------------------->

</body>
>>>>>>> 152ff56641a5d300da2570f5ef4ed9748d66f1f1
</html>