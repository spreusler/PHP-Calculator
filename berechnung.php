<?php
function zusammenrechnen($operand1, $operand2)
{
    $operator = $_POST['operator'];
    $addition = $operand1 + $operand2;
    $subtraktion = $operand1 - $operand2;
    $multiplikation = $operand1 * $operand2;
    $division = $operand1 / $operand2;
    $wurzel = sqrt($operand1);
    $quadrat = pow($_POST['operand1'], 2);
    switch ($operator) {
        case "+":
            return $addition;
            break;
        case "-":
            return $subtraktion;
            break;
        case "*":
            return $multiplikation;
            break;
        case "/":
            return $division;
            break;
        case "W":
            return $wurzel;
            break;
        case "Q":
            return $quadrat;
            break;
    }
}

?>
