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
        <img src="http://localhost/project3/others/winkelwagen.jpg" alt="Avatar" class="avatar">
    </div>

    <div onclick="location.href= '../account/index.php'" id="account">
        <img src="http://localhost/project3/others/avatar.png" alt="Avatar" class="avatar">
    </div>
</div>
<!--------------------------Menu-Balk-------------------------------->

</body>
</html>