<?php

function get_obit(){
    require_once "db_connection.php";
    $conn = mysqli_connect($hostname,  $username, $password, $dbname);

    if (!$conn)
        die("Connection failed: " . mysqli_connect_error());

    $query = mysqli_query($conn, "SELECT * FROM obit;");

    if(!$query)
        die("Query failed: " . mysqli_error($conn));


    return mysqli_fetch_all($query, MYSQLI_ASSOC);
}

function store_obit(){
    if (session_status() == PHP_SESSION_NONE)
        session_start();
    if((empty($_POST['name']))||(empty($_POST['year']))||(empty($_POST['count']))){
        $_SESSION['error_store_obit'] = "Harap lengkapi isian formulir.";
        return false;
    }else{
        require_once "db_connection.php";
        $conn = mysqli_connect($hostname,  $username, $password, $dbname);

        if (!$conn)
            die("Connection failed: " . mysqli_connect_error());
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $count = $_POST['count'];
        $year = $_POST['year'];
        $query = mysqli_query($conn, "INSERT INTO obit (name,year,count) VALUES('$name', $year, $count);");
        if(!$query)
            die("Query failed: " . mysqli_error($conn));

        $_SESSION['success_store_obit'] = "Berhasil menambah data.";
        return true;
    }
}

function delete_obit(){
    if (session_status() == PHP_SESSION_NONE)
        session_start();
    if(empty($_POST['id_obit'])){
        $_SESSION['error_delete_obit'] = "Gagal menghapus data.";
        return false;
    }else{
        require_once "db_connection.php";
        $conn = mysqli_connect($hostname,  $username, $password, $dbname);

        if (!$conn)
            die("Connection failed: " . mysqli_connect_error());
        $id = $_POST['id_obit'];
        $query = mysqli_query($conn, "DELETE FROM obit WHERE id_obit='$id'");
        if(!$query)
            die("Query failed: " . mysqli_error($conn));

        $_SESSION['success_delete_obit'] = "Berhasil menghapus data.";
        return true;
    }
}