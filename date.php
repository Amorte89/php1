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
$i = 0;
$array_menu = [];

$array_menu[$i]['url']='#';
$array_menu[$i++]['name']='Home';

$array_menu[$i]['url']='#';
$array_menu[$i++]['name']='section 1';

$array_menu[$i]['url']='#';
$array_menu[$i++]['name']='section 2';

echo "<ul><br>";
for ($i=0;$i<count($array_menu);$i++)
{
    echo ($_SERVER["REQUEST_URI"] == $array_menu[$i]['url']) ?: '<li>';
    echo "<a href=\"".$array_menu[$i]['url']."\">".$array_menu[$i]['name']."</a></li>\n";
}
echo "</ul>";
    ?>
<footer>
    <?php
    echo  date("Y")."<br>";

    echo date("G:i s", time());
    ?>
</footer>
</h1>
</body>
</html>