<form action="" method="post">
    <br>
    Calculator
    <br>
    <br>
    <input type="number" name="a">
    <input type="number" name="b">
    <input type="submit" name="plus" value="+">
    <input type="submit" name="minus" value="-">
    <input type="submit" name="mult" value="*">
    <input type="submit" name="divi" value="/">

    <br>
    <br>
</form>

<?php //Пытался сделать как-то умнее, но если вывести echo внизу, то $result будет неопреледена в момент входа на страницу
if (isset($_POST['plus'])) {$resul = $_POST['a'] + $_POST['b']; echo "<br>Result: <strong>$resul</strong>";}
if (isset($_POST['minus'])) {$resul = $_POST['a'] - $_POST['b']; echo "<br>Result: <strong>$resul</strong>";}
if (isset($_POST['mult'])) {$resul = $_POST['a'] * $_POST['b']; echo "<br>Result: <strong>$resul</strong>";}
if (isset($_POST['divi']))
    if ($_POST['b'] == 0) echo "Division by zero!";
    else
    {$resul = $_POST['a'] / $_POST['b']; echo "<br>Result: <strong>$resul</strong>";}

?>
