<?php
function benutzerdaten()
{

    echo "Ihr Benutzername lautet: ";
    echo $_SESSION["name"];
    echo '<br>';
    echo '<br>';
    if (!filter_var($_SESSION["email"], FILTER_VALIDATE_EMAIL) === false) {
        echo($_SESSION["email"] . " is a valid email address.");
    } else {
        echo($_SESSION["email"] . " is not a valid email address.");
    }
    echo '<br>';
    echo '<br>';
    if (!filter_var($_SESSION["age"], FILTER_VALIDATE_INT) === false) {
        echo($_SESSION["age"] . " is a valid age.");
    } else {
        echo($_SESSION["age"] . " is not a valid age.");
    }
    echo '<br>';
    echo '<br>';
}

benutzerdaten();
?>
