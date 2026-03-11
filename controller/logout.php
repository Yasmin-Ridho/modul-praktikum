<?php
session_start();

$_SESSION = [];
session_destroy();

if (isset($_COOKIE['username'])) {
    setcookie('username', '', time() - 3600, '/');
}

// Naik satu level ke root karena file ini ada di /controller/
header("Location: ../index.php");
exit;