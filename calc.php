<form action="" method="post">
    <br>
    Calculator
    <br>
    <br>
    <input type="number" name="a">
    <select name="operations">
        <option disabled>Select</option>
        <option value="+"> + </option>
        <option value="-"> - </option>
        <option value="*"> * </option>
        <option value="/"> / </option>
    </select>
    <input type="number" name="b">
    <br>
    <br>
    <input type = "submit" name = "Calc" value = "Calculate">
</form>

<?php
if (isset($_POST['Calc'])) {
    switch ($_POST['operations']) {
        case '+':
            $resul = $_POST['a'] + $_POST['b'];
            break;
        case '-':
            $resul = $_POST['a'] - $_POST['b'];
            break;
        case '*':
            $resul = $_POST['a'] * $_POST['b'];
            break;
        case '/':
            if ($_POST['b'] == 0) $resul = "Division by zero!";
            else
            $resul = $_POST['a'] / $_POST['b'];
            break;
    }
    echo "Result: <strong>$resul</strong>";}
