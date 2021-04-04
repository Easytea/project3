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

</body>
</html>