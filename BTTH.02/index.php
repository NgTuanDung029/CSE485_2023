<?php 
    require_once 'config/database.php';

    $sql = 'SELECT * FROM User_';
    $users = pdo($conn, $sql);
    foreach ($users as $user) {
        echo $user['username'] . '<br>';
    }
