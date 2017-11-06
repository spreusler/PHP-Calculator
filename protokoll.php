<?php
@ob_start();
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>
<body>

<?php
include 'header.php';
?>

<h1>3. Protokoll</h1>

<?php
$benutzername = htmlspecialchars($_POST['benutzername']);

echo '<h2>3.1 Ausgabe der Datei</h2>';
$protokoll = file_get_contents('output.txt');
echo $protokoll;

echo '<h2>3.2 Prüfung auf Benutzername</h2>';
$position = strpos($protokoll, $benutzername);
if ($position == null) {
    echo "Benutzer " . $benutzername . " nicht vorhanden.";
} else {
    echo "Benutzer " . $benutzername . " vorhanden.";
}
?>

<?php
include 'footer.php';
?>

</body>
</html>
