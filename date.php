<?php
$title = "My site";
$h1 = "WELCOME!";
$a = 1;
$b = 2;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><? echo $title; ?></title>
</head>
<body>
<h1 style="text-align: center">
    <? echo $h1;
    ?>
<footer>
    <?php
    echo  date("Y");
    ?>
</footer>
</h1>
</body>
</html>