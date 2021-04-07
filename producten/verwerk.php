<?php
        session_start();
        $connect = mysqli_connect("localhost", "root", "", "speedrun");
            foreach($_SESSION["shopping_cart"] as $keys => $values)
            {
                $connect = mysqli_connect("localhost", "root", "", "speedrun");

                $item_name = $values["item_name"];
                $item_quantity = $values["item_quantity"];
                $item_price = $values["item_price"];
                $gebruikersnaam = $_SESSION['gbrn'];

                $sql = "INSERT INTO tbl_save (gebruikersnaam, item_name, item_quantity, item_price) 
                        VALUES('$gebruikersnaam', '$item_name', '$item_quantity', '$item_price')";

                if (mysqli_query($connect, $sql)) {
                    echo "test";
                }
            }

            header('location:../producten/index.php');
    
?>