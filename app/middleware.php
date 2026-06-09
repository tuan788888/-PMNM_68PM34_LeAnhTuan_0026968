<?php
    class middleware {
        function checklogin() {
            $publicPages = [
                '/auth/login'
            ];
            if(!isset($_SESSION['username']) && !in_array($_SERVER['REQUEST_URI'], $publicPages)) {
                header('Location: /auth/login');
                exit();
            }
class middleware
{
    public function checklogin()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $url = trim($_GET['url'] ?? '', '/');
        $publicPages = [
            'auth/login',
        ];

        if (!isset($_SESSION['username']) && !in_array($url, $publicPages)) {
            header('Location: ?url=auth/login');
            exit();
        }
    }
?>
}