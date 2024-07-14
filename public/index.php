<?php

// # Modify php settings, modifying memory_limit setting
// ini_set('memory_limit', '512M');
// echo ini_get('memory_limit');

$app = include __DIR__ . "/../src/App/bootstrap.php";

$app->run();


