
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
            <li><a href="../producten/indexschoenen.php">Schoenen ></a></li>
            <li><a href="../producten/indexshirts.php">Shirts ></a></li>
            <li><a href="../producten/indexbroeken.php">Broeken ></a></li>
            <li><a href="../producten/index.php">Alle Producten ></a></li>
            <li><a href="../klantenservice">Klantenservice ></a></li>
            <li><a href="../producten/index.php">Alle Producten ></a></li>
            <li><a href="../klantenservice">Klantenservice ></a></li>
            <li><a href="../overons">Over Ons ></a></li>
    </ul>

    <div onclick="location.href= '../index.php'" id="logo"></div>

    <div class="search">
        <form action="../search.php" method="post">
            <input type="text" placeholder="Search..." name="zoekopdracht">
            <input type="submit" placeholder="Zoek">
        </form>
    </div>

    <div onclick="location.href= '../winkelwagen/index.php'" id="winkelwagen">
    </div>

    <div onclick="location.href= '../account/index.php'" id="account">
    </div>
</div>
<!--------------------------Menu-Balk-------------------------------->
<div id="header">
    <h1>Over Ons</h1>
</div>

<div id="dagbericht">
    <h1>Dag Bericht</h1>
    <div id="dagberichtTekst">
        <p>
            <?php
                $host = '127.0.0.1';
                $db   = 'speedrun';
                $user = 'root';
                $pass = '';
                $charset = 'utf8mb4';

                $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
                $options = [
                    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES   => false,
                ];
                try {
                    $pdo = new PDO($dsn, $user, $pass, $options);
                } catch (\PDOException $e) {
                    throw new \PDOException($e->getMessage(), (int)$e->getCode());
                }
                $stmt = $pdo->query('SELECT * FROM `tbl_dagbericht`;');

                foreach ($stmt as $rij)
                {
                    $id= $rij['id'];
                }

                $stmt = $pdo->query("SELECT * FROM `tbl_dagbericht` WHERE `id` LIKE '$id';");

                echo $rij['datum'];
                echo "<br/>";
                echo $rij['bericht'];
            ?>
        </p>
    </div>
</div>

<div id="teamContainer">
    <div id="teamFoto"></div>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac mollis augue, ut placerat libero. Etiam pulvinar tellus sed aliquet tincidunt. Morbi vitae euismod diam, id imperdiet neque. Sed sit amet tincidunt nunc. Pellentesque hendrerit quam a dui interdum consectetur. Donec lobortis, felis sit amet consectetur vulputate, magna odio sollicitudin ante, eget dictum erat urna quis metus. Nullam commodo diam ut tortor elementum, vitae eleifend velit facilisis. Ut tincidunt quam tellus, a tempor neque varius eget. Pellentesque cursus tortor in lectus condimentum.
    </p>
</div>
</body>

</html>