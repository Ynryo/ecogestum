<?php
session_start();

if (isset($_SESSION['user_id']) && $_SERVER['REQUEST_URI'] !== '/') {
    header('Location: /');
    exit();
}