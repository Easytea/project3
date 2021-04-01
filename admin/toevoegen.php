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
$stmt = $pdo->query('SELECT * FROM tbl_product');
foreach ($stmt as $rij)
{
    $newid= $rij['id'] + 1;
}
?>

<form action='verwerk.php' method='post' enctype="multipart/form-data">
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
    </select>
    <input name="file" type="file">
    <input type='submit' name='submit' value="Toevoegen">
</form>
</body>
</html>