<?php

$jsonContent = json_decode(file_get_contents('chains.json'), true);

// Print array to a PHP file
$phpContent = "<?php\n\nreturn " . var_export($jsonContent, true) . ";\n";

echo $phpContent;
