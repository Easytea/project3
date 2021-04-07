<?php
    session_start();
    error_reporting(0);
?>

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
            <li><a href="producten/indexschoenen.php">Schoenen ></a></li>
            <li><a href="producten/indexshirts.php">Shirts ></a></li>
            <li><a href="producten/indexbroeken.php">Broeken ></a></li>
            <li><a href="producten/index.php">Alle Producten ></a></li>
            <li><a href="klantenservice">Klantenservice ></a></li>
            <li><a href="overons">Over Ons ></a></li>
        </ul>

        <div onclick="location.href= 'index.php'" id="logo"></div>

        <div class="search">
            <form action="search.php" method="post">
            <input type="text" placeholder="Search..." name="zoekopdracht">
                <input type="submit" placeholder="Zoek">
            </form>
        </div>

        <div onclick="location.href= 'winkelwagen/index.php'" id="winkelwagen">
        </div>

        <div onclick="location.href= 'account/index.php'" id="account">
        </div>

    </div>
<!--------------------------Menu-Balk-------------------------------->
<div class="addContainer">
    <h2>Hallo 
        <?php
            if($_SESSION['login'] == 'true'){
                echo " " . $_SESSION['gbrn'] . "!";
            }

            else{
                echo " Gebruiker!";
            }
        ?>
    </h2>
    <div id="addAfbeelding">
    </div>
    <div id="parallelogram">
    </div>
    <div onclick="location.href= 'producten/index.php'" id="yellowBtn">
        <h1>Bekijk producten!</h1>
    </div>
</div>

<div id="reclameContainer">
    <div onclick="location.href= 'producten/indexshirts.php'" class="reclame"><p>Shirts</p></div>
    <div onclick="location.href= 'producten/indexbroeken.php'" class="reclame"><p>Broeken</p></div>
    <div onclick="location.href= 'producten/indexschoenen.php'" class="reclame"><p>Schoenen</p></div>
</div>

<div id="footer">
    <div onclick="location.href= 'klantenservice/index.php'" class="footerBtn"><h3>Klanten<br/>Service</h3></div>
    <div onclick="location.href= 'overons/index.php'" class="footerBtn"><h3>Over Ons</h3></div>
    <div onclick="location.href= 'https://www.instagram.com/'" class="footerBtn"><h3>SocialMedia</h3></div>
</div>

</body>
</html>