<?php 
    require_once '../config/database.php';
    session_start();
    if (isset($_SESSION['username']) && isset($_SESSION['role']) && $_SESSION['role'] === 'teacher') {
        $username = $_SESSION['username'];
        $role = $_SESSION['role'];
    } else {
        header("Location: ../../index.php");
        exit;
    }
