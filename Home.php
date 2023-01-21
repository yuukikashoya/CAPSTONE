<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
      include 'php/header.php';
     ?>
</head>
<body>
<form method = "POST">

<?php
    include_once 'php/experment.php';
    if($submitClicked)
    {
        include 'php/nav.php';
    }

    else
    {
        echo "Nope";
    }
?>

<input type = "submit" name = "submit">
</input>
</form>
</body>
</html>