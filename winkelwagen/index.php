
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

<div class="productTable">
    <h3>Uw Bestelling:</h3>
    <table>
        <tr>
            <th width="40%">Product Naam</th>
            <th width="10%">Aantal</th>
            <th width="20%">Prijs</th>
            <th width="20%">Totaal</th>
        </tr>
        <?php
        session_start();
        $connect = mysqli_connect("localhost", "root", "", "speedrun");
        $query = "SELECT * FROM tbl_product ORDER BY id ASC";
        $result = mysqli_query($connect, $query);
        if(!empty($_SESSION["shopping_cart"]))
        {
            $total = 0;
            foreach($_SESSION["shopping_cart"] as $keys => $values)
            {
                ?>
                <tr id="productList">
                    <td><?php echo $values["item_name"]; ?></td>
                    <td><?php echo $values["item_quantity"]; ?></td>
                    <td>€ <?php echo $values["item_price"]; ?></td>
                    <td>€ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
                </tr>
                <?php
                $total = $total + ($values["item_quantity"] * $values["item_price"]);
            }
            ?>
            <tr id="productTotal">
                <td colspan="3" align="right"><b>Totaal</b></td>
                <td align="right">€ <?php echo number_format($total, 2); ?></td>
                <td></td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>
    <div class="btnBetalen" onclick="location.href= ''">
        <div class="btnBetalenIcon"></div>
        <div class="arrow-right" id="1"></div>
        <div class="arrow-right" id="2"></div>
        <div class="arrow-right" id="3"></div>
    </div>
<h1 class="vdrWinkelen"><a href="../producten/index.php">Verder Winkelen</a></h1>
</body>
</html>