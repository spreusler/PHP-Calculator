<!DOCTYPE html>
<html>
<body>

<?php
include 'header.php';
?>

<h1>2. Ergebnis</h1>

<?php

// Variablendeklaration
$op1 = $_POST['operand1'];
$op2 = $_POST['operand2'];
$_SESSION["name"] = htmlspecialchars($_POST['name']);
$_SESSION["age"] = htmlspecialchars($_POST['age']);
$_SESSION["password"] = htmlspecialchars($_POST['password']);
$_SESSION["email"] = htmlspecialchars($_POST['email']);
$_SESSION["email"] = filter_var($_SESSION["email"], FILTER_SANITIZE_EMAIL);
$_SESSION["plz"] = htmlspecialchars($_POST['plz']);

// Überprüfung auf korrekte Eingabe der PLZ
function checkPlz($plz)
{
    if ($plz < 1) {
        throw new Exception("Fehler - Wert muss 1 or mehr betragen!");
    }
    return true;
}

try {
    checkPlz($_SESSION["plz"]);
} catch (Exception $e) {
    echo 'Message: ' . $e->getMessage();
    echo '<br>';
    echo '<br>';
}

// Einbettung der Berechnung und Ausgabe

require 'berechnung.php';
require 'benutzerdaten.php';

echo "Das Ergebnis lautet: ";
echo zusammenrechnen($op1, $op2);
echo '<br>';
echo '<br>';

// Hinzufügen des Benutzers in Datei
$zeile = "\r\nBenutzer: " . $_SESSION["name"] . " Ergebnis: " . zusammenrechnen($op1, $op2);
file_put_contents("output.txt", $zeile, FILE_APPEND);
echo "output.txt erfolgreich aktualisiert";
?>

<h2>2.1 Protokoll ausgeben und nach Benutzer suchen</h2>
<form action="protokoll.php" method="post">
    <p>Benutzername: <input type="text" name="benutzername"/></p>
    <p><input type="submit"/></p>
</form>

<?php
include 'footer.php';
?>

</body>
</html>