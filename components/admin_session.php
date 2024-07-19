<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION["isLoggedIn"]) || !($_SESSION["isLoggedIn"] === true) || !isset($_SESSION["type"]) && ($_SESSION["type"] === "Admin")) {
    header('Location:index.php#login');
}
