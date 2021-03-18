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

<div id="header">
    <h1>Klanten Service</h1>
</div>

<div class="serviceContainer">
    <div class="service" onclick="location.href= 'mailto:speedRUN@bestelling.com'">
        <div class="yellowBar">
            <h1>Mijn Bestelling</h1>
        </div>
        <p>
            Tel: 12345678
            <br/>
            Email: test.mail@gmail.com
        </p>
    </div>
    <div class="service" onclick="location.href= 'mailto:speedRUN@account.com'">
        <div class="yellowBar">
            <h1>Mijn Account</h1>
        </div>
        <p>
            Tel: 12345678
            <br/>
            Email: test.mail@gmail.com
        </p>
    </div>
    <div class="service" onclick="location.href= 'mailto:speedRUN@retouneren.com'">
        <div class="yellowBar">
            <h1>Retouneren</h1>
        </div>
        <p>
            Tel: 12345678
            <br/>
            Email: test.mail@gmail.com
        </p>
    </div>
    <div class="service" onclick="location.href= 'mailto:speedRUN@bezorging.com'">
        <div class="yellowBar">
            <h1>Bezorging</h1>
        </div>
        <p>
            Tel: 12345678
            <br/>
            Email: test.mail@gmail.com
        </p>
    </div>
    <div class="service" onclick="location.href= 'mailto:speedRUN@betaling.com'">
        <div class="yellowBar">
            <h1>Betaling</h1>
        </div>
        <p>
            Tel: 12345678
            <br/>
            Email: test.mail@gmail.com
        </p>
    </div>
    <div class="service"onclick="location.href= 'mailto:speedRUN@winkel.com'">
        <div class="yellowBar">
            <h1>Winkel Service</h1>
        </div>
        <p>
            Tel: 12345678
            <br/>
            Email: test.mail@gmail.com
        </p>
    </div>
    <div class="service" onclick="location.href= 'mailto:speedRUN@product.com'">
        <div class="yellowBar">
            <h1>Over Product</h1>
        </div>
        <p>
            Tel: 12345678
            <br/>
            Email: test.mail@gmail.com
        </p>
    </div>
    <div class="service" onclick="location.href= 'mailto:speedRUN@overig.com'">
        <div class="yellowBar">
            <h1>Overig</h1>
        </div>
        <p>
            Tel: 12345678
            <br/>
            Email: test.mail@gmail.com
        </p>
    </div>
</div>

</body>
</html>