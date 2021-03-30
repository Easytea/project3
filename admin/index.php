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
$pass = '123';
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
        echo "" . $_GET['id'] . " verwijderen <br />";
        $query = 'DELETE FROM tbl_product WHERE id = ' . $_GET['id'];
        $stmt = $pdo->query($query);
        echo "<meta http-equiv=\"refresh\" content=\"1; url=../admin/index.php\" />";
    }
}
if($pdo)
{
    $tabelData =
        '    <h1>Product Overzicht</h1>
        <tr>
            <td>ID</td>
            <td>Naam</td>
            <td>Prijs</td>
            <td>Object</td>
            <td>Foto</td>
            <td colspan="3">Opties</td>
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
            $tabelData .= '<td>';
                $tabelData .= '<a href="index.php?aktie=verwijder&id='.$rij['id'].'">verwijder</a>';
            $tabelData .= '</td>';
            $tabelData .= '<td>';
                $tabelData .= '<a href="index.php?aktie=wijzig&id='.$rij['id'].'">wijzig</a>';
            $tabelData .= '</td>';
        $tabelData .= '</tr>';
    }
}

echo '<table border="1">';
echo $tabelData;
echo '<tr>
        <td colspan="8" style="text-align: center"><a href="toevoegen.php">Toevoegen</a></td>
      </tr>
</table>';
?>
</body>
</html>