<?php

session_start();


$con = mysqli_connect('localhost', 'root', '123');

mysqli_select_db($con, 'userregistration');

$name = $_POST['gebruikersnaam'];
$ww = $_POST['wachtwoord'];

$s = " select * from registratie where gebruikersnaam = '$name' && wachtwoord = '$ww' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['gbrn'] = $name;
    header('location:../index.html');
} else {
    header('location:index.php');

}

?>