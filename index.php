<?php
//setcookie("name", "Luiza");
echo "Hello ".$_COOKIE["name"];

setcookie("color", "blue", time()+3600);



?>
<html>
    <head>
        <title></title>
    </head>
    <body bgcolor="<?= $_COOKIE['color'] ?>">
        
    </body>
</html>