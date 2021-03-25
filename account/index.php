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

</body>
</html>