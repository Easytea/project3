<?php

session_start();
header('refresh: 2; URL=http://localhost/project3/account/index.php');//2 sec delay


$con = mysqli_connect('localhost', 'root', '123');

mysqli_select_db($con, 'userregistration');

$name = $_POST['gebruikersnaam'];
$ww = $_POST['wachtwoord'];
$email = $_POST['email'];

$s = " select * from registratie where gebruikersnaam = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Gebruikersnaam is al in gebruik";
} else {
    $reg= "insert into registratie(gebruikersnaam,	wachtwoord, email) values ('$name', '$ww', '$email') ";
    mysqli_query($con, $reg);
    echo "Registratie Succesvol";
}

?>