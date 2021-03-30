
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
        <li><a href="indexschoenen.php">Schoenen ></a></li>
        <li><a href="indexshirts.php">Shirts ></a></li>
        <li><a href="indexbroeken.php">Broeken ></a></li>
        <li><a href="index.php">Alles ></a></li>
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
<?php
session_start();
$connect = mysqli_connect("localhost", "root", "123", "speedrun");

if(isset($_POST["add_to_cart"]))
{
    if(isset($_SESSION["shopping_cart"]))
    {
        $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
        if(!in_array($_GET["id"], $item_array_id))
        {
            $count = count($_SESSION["shopping_cart"]);
            $item_array = array(
                'item_id'			=>	$_GET["id"],
                'item_name'			=>	$_POST["hidden_name"],
                'item_price'		=>	$_POST["hidden_price"],
                'item_quantity'		=>	$_POST["quantity"]
            );
            $_SESSION["shopping_cart"][$count] = $item_array;
        }
        else
        {
            echo '<script>alert("Item is al toegevoegd")</script>';
        }
    }
    else
    {
        $item_array = array(
            'item_id'			=>	$_GET["id"],
            'item_name'			=>	$_POST["hidden_name"],
            'item_price'		=>	$_POST["hidden_price"],
            'item_quantity'		=>	$_POST["quantity"]
        );
        $_SESSION["shopping_cart"][0] = $item_array;
    }
}

if(isset($_GET["action"]))
{
    if($_GET["action"] == "delete")
    {
        foreach($_SESSION["shopping_cart"] as $keys => $values)
        {
            if($values["item_id"] == $_GET["id"])
            {
                unset($_SESSION["shopping_cart"][$keys]);
                echo '<script>alert("Item Verwijderd")</script>';
                echo '<script>window.location="indexbroeken.php"</script>';
            }
        }
    }
}

?>
<body>
<br />
<div class="container">
    <?php
    $query = "SELECT * FROM tbl_product WHERE object = 'broek' ORDER BY id ASC";
    $result = mysqli_query($connect, $query);
    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_array($result))
        {
            ?>
            <div class="col-md-4">
                <form method="post" action="indexbroeken.php?action=add&id=<?php echo $row["id"]; ?>">
                    <div class="product">
                        <img src="images/<?php echo $row["image"]; ?>"/><br />

                        <h4 class="text-info"><?php echo $row["name"]; ?></h4>

                        <h4 class="text-danger">€ <?php echo $row["price"]; ?></h4>

                        <input type="text" name="quantity" value="1"/>

                        <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

                        <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

                        <input type="submit" name="add_to_cart"  class="btnToevoegen" value="Toevoegen" />
                    </div>
                </form>
            </div>
            <?php
        }
    }
    ?>
    <div style="clear:both"></div>
    <br />
    <div class="productTable">
        <h3>Uw Bestelling:</h3>
        <table>
            <tr>
                <th width="30%">Product Naam</th>
                <th width="10%">Aantal</th>
                <th width="20%">Prijs</th>
                <th width="15%">Totaal</th>
                <th width="5%"></th>
            </tr>
            <?php
            if(!empty($_SESSION["shopping_cart"]))
            {
                $total = 0;
                foreach($_SESSION["shopping_cart"] as $keys => $values)
                {
                    ?>
                    <tr>
                        <td><?php echo $values["item_name"]; ?></td>
                        <td><?php echo $values["item_quantity"]; ?></td>
                        <td>€ <?php echo $values["item_price"]; ?></td>
                        <td>€ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
                        <td><a href="indexbroeken.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Verwijder</span></a></td>
                    </tr>
                    <?php
                    $total = $total + ($values["item_quantity"] * $values["item_price"]);
                }
                ?>
                <tr>
                    <td colspan="3" align="right"><b>Totaal</b></td>
                    <td align="right">€ <?php echo number_format($total, 2); ?></td>
                    <td></td>
                </tr>
                <?php
            }
            ?>

        </table>
</div>
</div>
<br />
</body>
</html>

