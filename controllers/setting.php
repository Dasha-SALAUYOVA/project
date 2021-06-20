<?php session_start();

if (isset($_SESSION['isConnected'])) {
    echo 'controllers/logout.php';
}else{
    echo 'controllers/login.php';
}