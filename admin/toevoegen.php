<html>
<head>
    <title>Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
error_reporting(0);
$host = '127.0.0.1';
$db   = 'speedrun';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
$stmt = $pdo->query('SELECT * FROM tbl_product');
foreach ($stmt as $rij)
{
    $newid= $rij['id'] + 1;
}
?>

<form action='toevoegen.php' method='POST' enctype="multipart/form-data">
    <input type='text' placeholder='ID' name='id' value="
    <?php
    echo $newid;
    ?>
    ">
    <input type='text' placeholder='Naam Product' name='name'>
    <input type='text' placeholder='Prijs Product' name='price'>
    <select name='object'>
        <option value='schoen'>Schoen</option>
        <option value='shirt'>Shirt</option>
        <option value='broek'>Broek</option>
        <input type="file" name="file">
        <input type="submit" name="submit" value="Upload">
        <p><strong>Notitie:</strong> U kunt alleen .jpg, .jpeg, .gif, .png bestanden uploaden.</p>
    </select>
</form>
</body>
</html>

<?php

if(isset($_POST['submit']))
{
 $file = $_FILES['file'];
 $fileNaam = $_FILES['file']['name'];
 $fileTmpNaam = $_FILES['file']['tmp_name'];
 $fileSize = $_FILES['file']['size'];
 $fileError = $_FILES['file']['error'];
 $fileType = $_FILES['file']['type'];

 $fileExt = explode('.', $fileNaam);
 $fileActueleExt = strtolower(end($fileExt));

 $toegestaan = array('jpg', 'jpeg', 'png');

    if(in_array($fileActueleExt, $toegestaan)){
        if($fileError === 0){
            if($fileSize < 10000000){
                $fileNieuweNaam = uniqid('', true).".".$fileActueleExt;

                $fileBestemming ='../producten/images/' .$fileNieuweNaam;

                move_uploaded_file($fileTmpNaam, $fileBestemming);
                echo "<meta http-equiv=\"refresh\" content=\"1; url=../admin/index.php\" />";
        
            }
            else{
                echo "<b>Error:<b/> Uw bestand is te groot. <br/>";
            }
        }

        else{
            echo "<b>Error:<b/> $fileError <br/>";
        }
    }

    else{
        echo "<b>Error:<b/> Dit bestand type is niet toegestaan. <br/>";
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
        echo "Error: niet alle velden zijn ingevult. <br/>";
    }

    mysqli_close($conn);
}



?>
