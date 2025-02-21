<?php

$file = fopen("example.txt", "w"); // "w" mode opens the file for writing

if ($file) {
    // Write data to the file
    $text = "This is a new line of text.!\n";
    fwrite($file, $text);

    // Close the file
    fclose($file);
    echo "Data successfully written to the file.";
} else {
    echo "Error opening the file.";
}

?>
