<?php session_start();

    $login = 'dasha';
	$password = 'xxxx';

	

if ($_POST['name'] == $login && $_POST['pass'] == $password) {
    $_SESSION['name'] = $_POST['name']; 
    $_SESSION['isConnected'] = true;
    header('Location: /');
    exit();
} else {
    header('Location: /connect.php');
    exit();
}

