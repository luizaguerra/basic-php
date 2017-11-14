<?php
//echo $_POST['name'];
echo $_GET['name'];

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Working with form</title>
        
    </head>
    <body>
        <form action="index.php" method="get">
            <label for="">Name: </label>
            <input type="text" name="name" value="<?=$_GET['name']?>">
            
            <label for="">Email: </label>
            <input type="text" name="email" value="<?=$_GET['email']?>">
            
            <label for="">Message: </label>
            <textarea name="message"><?=$_GET['message']?></textarea>

            <input type="submit" value="Submit">
        </form>
    </body>
</html>

