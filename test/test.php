<?php

// import dist
$chains = require __DIR__ . '/../dist/index.php';

if (
    $chains['chains']['mainnet']['id'] != 1 ||
    $chains['byId'][1]['id'] != 1
) {
    echo 'Error: mainnet id is not 1';
    exit(1);
}

echo 'Success';
