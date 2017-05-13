<?php

function login($email, $user_password){
    require "db_connection.php";
    $conn = mysqli_connect($hostname,  $username, $password, $dbname);

    if (!$conn)
        die("Connection failed: " . mysqli_connect_error());

    $query = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email';");

    if(!$query)
        die("Query failed: " . mysqli_error($conn));

    if (session_status() == PHP_SESSION_NONE)
        session_start();
    $user = mysqli_fetch_assoc($query);
    if($user != null){
        if(password_verify($user_password, $user['password'])){
            $_SESSION['is_logged_id'] = true;
            $_SESSION['id_user'] = $user['id_user'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['rule'] = $user['rule'];
            return true;
        }
    }

    $_SESSION['error_login'] = "Email atau password tidak sesuai.";
    return false;
}

function getUserLogin(){
    if(isLoggedIn()) {
        if (session_status() == PHP_SESSION_NONE)
            session_start();
        $user = array();
        $user['id_user'] = $_SESSION['id_user'];
        $user['email'] = $_SESSION['email'];
        $user['rule'] = $_SESSION['rule'];
        return $user;
    }
    return null;
}

function isLoggedIn(){
    if (session_status() == PHP_SESSION_NONE)
        session_start();
    if(isset($_SESSION['is_logged_id']))
        return $_SESSION['is_logged_id'];
    return false;
}

function logout(){
    if (session_status() == PHP_SESSION_NONE)
        session_start();
    unset($_SESSION['is_logged_id']);
    unset($_SESSION['id_user']);
    unset($_SESSION['email']);
    unset($_SESSION['rule']);
}