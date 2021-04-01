<html>
    <head>
        <title>SpeedRUN Payment</title>
        <style>
          body{
            font-family: arial;
          }

  .row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #89CFF1;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #E8F9FC;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #1B5886;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #FFBA19;
}

span.price {
  float: right;
  color: grey;
}

@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
    </head>
    <body>
            <div class="row">
        <div class="col-75">
            <div class="container">
            <form action="../winkelwagen/verwerk.php" method="post">
                <div class="row">
                <div class="col-50">
                    <h3>Factuur Adres</h3>
                    <label for="fname"><i class="fa fa-user"></i>Naam:</label>
                    <input type="text" id="fname" name="firstname" placeholder="HKP. Jansen-Klomp">
                    <label for="email"><i class="fa fa-envelope"></i> Email:</label>
                    <input type="text" id="email" name="email" placeholder="jansen@voorbeeld.com">
                    <label for="adr"><i class="fa fa-address-card-o"></i> Address:</label>
                    <input type="text" id="adr" name="address" placeholder="Molenstraat 11 Amsterdam">

                    <div class="row">
                    <div class="col-50">
                        <label for="state">Provincie:</label>
                        <input type="text" id="state" name="state" placeholder="Groningen">
                    </div>
                    <div class="col-50">
                        <label for="zip">Postcode:</label>
                        <input type="text" id="zip" name="zip" placeholder="1234AB">
                    </div>
                    </div>
                </div>

                <div class="col-50">
                    <h3>Betalen</h3>
                    <label for="cname">Naam op de betaalpas:</label>
                    <input type="text" id="cname" name="cardname" placeholder="HKP. Jansen-Klomp">
                    <label for="ccnum">Betaalpas nummer:</label>
                    <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                </div>

                </div>
                <label>
                <input type="checkbox" checked="checked" name="sameadr"> Bezorg adres het zelfde als het factuur adres:
                </label>
                <input type="submit" value="Betalen" class="btn">
            </form>
            </div>
        </div>

        <div class="col-25">
            <div class="container">
            <h4>Winkelwagen
                <span class="price" style="color:black">
                <i class="fa fa-shopping-cart"></i>
                </span>
            </h4>
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
        </div>
        </div>
    </body>
</html>