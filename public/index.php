<?php
require_once '../app/core/connectDB.php';
require_once '../app/core/controller.php';
require_once '../app/middleware.php';
require_once '../app/core/app.php';

if (!isset($_GET['url'])) {
    $path = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH);
    $_GET['url'] = trim($path, '/');
    $_GET['url'] = '';
}

$middleware = new middleware();
$middleware->checklogin();

$app = new App();
?>