//Utiliza o secret.php
<?php
session_start();

$login="admin";
$password="123456";

if($login == "admin" && $password == "123456"){
    $_SESSION['login'] = true;
    echo"Success";
}else{
    echo "Error";
}

?>
<a href="secret.php">Get in</a>