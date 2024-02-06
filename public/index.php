<?php
// Entry point for the Softway Medical application.

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../app/config.php';

use App\Controller\HealthIndexController;

$healthIndex = isset($_POST['healthIndex']) ? (int)$_POST['healthIndex'] : null;
$controller = new HealthIndexController();
$controller->index();
