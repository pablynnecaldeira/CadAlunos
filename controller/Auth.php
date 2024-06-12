<?php

class Auth {
    public static function isLoggedIn() {
        return isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;
    }

    public static function requireLogin() {
        if (!self::isLoggedIn()) {
            header("Location: ../index.php");
            exit();
        }
    }
}

