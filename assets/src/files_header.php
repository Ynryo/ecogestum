<?php
session_start();

if (!isset($_SESSION["user_id"]) && $_SERVER["REQUEST_URI"] !== '/' && $_SERVER["REQUEST_URI"] !== '/login/' && $_SERVER["REQUEST_URI"] !== '/register/' && $_SERVER["REQUEST_URI"] !== '/logout/') { //si pas de session et URL != /, redirect to /
    header('Location: /');
}