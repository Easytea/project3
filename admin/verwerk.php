
<?php

if(isset($_POST['submit']))
{
 $file = $_FILES['file'];
 print_r ($file);
 $fileNaam = $_FILES['file']['name'];
 $fileTmpNaam = $_FILES['file']['tmp_naam'];
 $fileSize = $_FILES['file']['size'];
 $fileError = $_FILES['file']['error'];
 $fileType = $_FILES['file']['type'];

 $fileExt = explode('.', $fileNaam);
 $fileActueleExt = strtolower(end($fileExt));

 $toegestaan = array('jpg', 'jpeg', 'png');

    if(in_array($fileActueleExt, $toegestaan)){
        if($fileError === 0){
            if($fileSize < 500000){
                $fileNieuweNaam = uniqid('', true).".". $fileActueleExt;

                $fileBestemming ='C:\wamp64\www\project3\producten\images' .$fileNieuweNaam;
                move_uploaded_file($fileTmpNaam, $fileBestemming);

                header("Location: ../admin/index.php");
        
            }
            else{
                echo "<b>Error:<b/> Uw bestand is te groot.";
            }
        }

        else{
            echo "<b>Error:<b/> $fileError";
        }
    }

    else{
        echo "<b>Error:<b/> Dit bestand type is niet toegestaan.";
    }
}

$name = $_POST["name"];
$price = $_POST["price"];
$object = $_POST["object"];
$lastid = $_POST["id"];
$image = $fileNieuweNaam;


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

?>



