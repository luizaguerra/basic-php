<?php 
$title = "User: ";
$name = "Luiza";
$last_name = "Guerra";
$idade = 29;
$email = "teste@teste.com";
?>

<h1>
    <?php echo $title; ?>

</h1>
<ul>
    <li>Name: <?= $name." ".$last_name?></li>
    <li>Age: <?= $idade?></li>
    <li>Email: <?= $email?></li>
</ul>
