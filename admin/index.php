<html>
    <head>
        <title>Admin</title>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
<?php

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
$stmt = $pdo->query('SELECT * FROM `tbl_product`;');

if(isset($_GET['aktie'])) {

    if ($_GET['aktie'] == "verwijder") {
        echo '<script>alert("Artikel is verwijderd.")</script>';
        $query = 'DELETE FROM tbl_product WHERE id = ' . $_GET['id'];
        $stmt = $pdo->query($query);
        echo "<meta http-equiv=\"refresh\" content=\"1; url=../admin/index.php\" />";
    }
}
if($pdo)
{
    $tabelData =
        '<h1>Product Overzicht</h1>
        <tr>
            <td><b>ID<b/></td>
            <td><b>Naam<b/></td>
            <td><b>Prijs (€)<b/></td>
            <td><b>Object<b/></td>
            <td><b>Foto<b/></td>
            <td colspan="3"><b>Opties<b/></td>
        </tr>';


    foreach ($stmt as $rij)
    {
        $tabelData .= '<tr>';
            $tabelData .= '<td>';
                 $tabelData .= $rij['id'];
            $tabelData .= '</td>';
            $tabelData .= '<td>';
                $tabelData .= $rij['name'];
            $tabelData .= '</td>';
            $tabelData .= '<td>';
                $tabelData .= $rij['price'];
            $tabelData .= '</td>';
            $tabelData .= '<td>';
                $tabelData .= $rij['object'];
            $tabelData .= '</td>';
            $tabelData .= '<td>';
                $tabelData .= $rij['image'];
            $tabelData .= '</td>';
            $tabelData .= '<td class="verwijder">';
                $tabelData .= '<a href="index.php?aktie=verwijder&id='.$rij['id'].'">verwijder</a>';
            $tabelData .= '</td>';
        $tabelData .= '</tr>';
    }
}

echo '<table>';
echo $tabelData;
echo '<tr>
        <td colspan="8" style="text-align: center" class="toevoegen"><a href="toevoegen.php">Toevoegen</a></td>
      </tr>
</table>';
?>

<a href="../" id="linkIndex">Bekijk de website</a>

<?php

$host = '127.0.0.1';
$db   = 'userregistration';
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
$stmt = $pdo->query('SELECT * FROM `registratie`;');

if(isset($_GET['aktie'])) {

    if ($_GET['aktie'] == "verwijder") {
        echo '<script>alert("Artikel is verwijderd.")</script>';
        $query = 'DELETE FROM registratie WHERE id = ' . $_GET['gebruikersnaam'];
        $stmt = $pdo->query($query);
        echo "<meta http-equiv=\"refresh\" content=\"1; url=../admin/index.php\" />";
    }
}
if($pdo)
{
    $tabelData =
        '<h1>Account Overzicht</h1>
        <tr>
            <td><b>Gebruikersnaam<b/></td>
            <td><b>Wachtwoord<b/></td>
            <td><b>Email<b/></td>
            <td><b>Opties<b/></td>
        </tr>';


    foreach ($stmt as $rij)
    {
        $tabelData .= '<tr>';
            $tabelData .= '<td>';
                 $tabelData .= $rij['gebruikersnaam'];
            $tabelData .= '</td>';
            $tabelData .= '<td>';
                $tabelData .= $rij['wachtwoord'];
            $tabelData .= '</td>';
            $tabelData .= '<td>';
                $tabelData .= $rij['email'];
            $tabelData .= '</td>';
            $tabelData .= '<td class="verwijder">';
                $tabelData .= '<a href="index.php?aktie=verwijder&id='.$rij['gebruikersnaam'].'">verwijder</a>';
            $tabelData .= '</td>';
        $tabelData .= '</tr>';
    }
}

echo '<table>';
echo $tabelData;
echo '</table>';

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
$stmt = $pdo->query('SELECT * FROM `tbl_dagbericht`;');

foreach ($stmt as $rij)
{
    $newid= $rij['id'] + 1;
}
?>

<h1>Dag bericht</h1>
<form action='index.php' method='POST'>
    <input type='text' placeholder='Bericht' name='bericht'>
    <input type='date' name='datum'>
    <input type='submit' name='submit'>
</form>
</body>
</html>

<?php
    $datum = $_POST["datum"];
    $bericht = $_POST["bericht"];

    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "speedrun";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
if(isset($_POST['submit'])){
    $sql = "INSERT INTO tbl_dagbericht (id, bericht, datum)
    VALUES ('$newid', '$bericht', '$datum')";

    if (mysqli_query($conn, $sql)) {
        echo '<script>alert("Bericht is toegevoegd!")</script>';
    } else {
        echo '<script>alert("ERROR: niet alle velden zijn ingevuld.")</script>';
    }
}
    mysqli_close($conn);

?>