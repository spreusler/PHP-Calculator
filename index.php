<!DOCTYPE html>
<html>
<body>

<?php
include 'header.php';
?>

<h1>1. Eingabe Taschenrechner</h1>

<form action="action.php" method="post">
    <p>Benutzername: <input type="text" name="name"/></p>
    <p>Alter: <input type="text" name="age"/></p>
    <p>Passwort: <input type="password" name="password"/></p>
    <p>eMail-Adresse: <input type="text" name="email"/></p>
    <p>Postleitzahl: <input type="text" name="plz"/></p>
    <p>Operand 1: <input type="number" name="operand1"/></p>
    <p>Operand 2: <input type="number" name="operand2"/></p>
    <p>Operator: <input type="text" name="operator"/></p>
    <p><input type="submit"/></p>
</form>

<?php
include 'footer.php';
?>

</body>
</html>