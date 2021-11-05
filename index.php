
<?php

session_start();
define('ERROR_MESSAGE', "Credenciales Incorrectas");
$error = false;

if (isset($_SESSION['username'])) {
    if (filter_input(INPUT_POST, 'botonenviologout')) {
        session_unset();
        session_destroy();
        setcookie(session_name(), '', 0, '/');
        include 'formlogin.php';
    } else {
        include 'private.php';
    }
} else {
    if (empty($_POST)) {
        include 'formlogin.php';
    } elseif (filter_input(INPUT_POST, 'botonenviologin')) {
        $nombre = trim(filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING));
        $contrasenia = trim(filter_input(INPUT_POST, 'contrasenia', FILTER_SANITIZE_STRING));
        if ($nombre === 'ivan' && $contrasenia === 'ivan') {
            $_SESSION['username'] = $nombre;
            include 'private.php';
        } else {
            $error = true;
            include 'formlogin.php';
        }
    }
}