<?php
function divide($dividend, $divisor) {
    if ($divisor == 0) {
        throw new Exception("Division by zero error.");
    }
    return $dividend / $divisor;
}

try {
    echo divide(10, 2) . "<br>";
    echo divide(10, 0) . "<br>";
} catch (Exception $e) {
    echo "Caught exception: " . $e->getMessage() . "<br>";
}

?>
