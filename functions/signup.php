<?php
    session_start();

    if (isset($_GET['daftar'])){
        $username = $_GET['uname'];
        $password = $_GET['pass'];
        $name = $_GET['nama'];
        $email = $_GET['email'];    

        if ($username == 'test') {
            $_SESSION['daftar'] = 'invalid';
            header('Location: ../');
        } else {
            $_SESSION['daftar'] = 'valid';
            $_SESSION['login'] = 'valid';

            $user = array($username, $password, $name, $email);
            $_SESSION['user'] = $user;

            header('Location: ../profile.php');
        }
    }

?>