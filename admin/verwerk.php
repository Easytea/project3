
<?php
$name = $_POST["name"];
$price = $_POST["price"];
$object = $_POST["object"];
$image = $_POST["image"];
$lastid = $_POST["id"];


$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "speedrun";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO tbl_product (id, name, image, price, object)
VALUES ('$lastid', '$name', '$image', '$price', '$object')";

if (mysqli_query($conn, $sql)) {
    echo "Artikel is toegveoegd!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

echo "<meta http-equiv=\"refresh\" content=\"1; url=../admin/index.php\" />";
?>
