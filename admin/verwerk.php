
<?php
$name = $_POST["name"];
$price = $_POST["price"];
$object = $_POST["object"];
$lastid = $_POST["id"];
$image = $_FILES['file']['name'];


$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "speedrun";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO tbl_product (id, name, image, price, object)
VALUES ('$lastid', '$name', '$image', '$price', '$object')";

if (mysqli_query($conn, $sql)) {
    echo "Artikel is toegevoegd!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

if(isset($_POST['submit']))
{
  $path = "../producten/images";
  $path = $path . basename( $_FILES['file']['name']);

  if(move_uploaded_file($_FILES['file']['name'], $path)) {
    echo "Het bestand".  basename( $_FILES['file']['name']). 
    "Is geupload.";
  } else{
      echo " <br/> Bestand uploaden mislukt, probeer het opnieuw.";
  }
}
?>



