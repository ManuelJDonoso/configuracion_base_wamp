<?php
require_once __DIR__ . '/controllers/FileController.php';

$controller = new FileController(__DIR__);
$controller->list();