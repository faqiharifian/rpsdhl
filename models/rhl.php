<?php

function get_rhl(){
    require_once "db_connection.php";
    $conn = mysqli_connect($hostname,  $username, $password, $dbname);

    if (!$conn)
        die("Connection failed: " . mysqli_connect_error());

    $query = mysqli_query($conn, "SELECT * FROM rhl INNER JOIN cities ON rhl.id_city = cities.id_city;");

    if(!$query)
        die("Query failed: " . mysqli_error($conn));


    return mysqli_fetch_all($query, MYSQLI_ASSOC);
}

function store_rhl(){
    if (session_status() == PHP_SESSION_NONE)
        session_start();
    if((empty($_POST['city']))||(empty($_POST['year']))||(empty($_POST['large']))){
        $_SESSION['error_store_rhl'] = "Harap lengkapi isian formulir.";
        return false;
    }else{
        require_once "db_connection.php";
        $conn = mysqli_connect($hostname,  $username, $password, $dbname);

        if (!$conn)
            die("Connection failed: " . mysqli_connect_error());
        $city = $_POST['city'];
        $large = $_POST['large'];
        $year = $_POST['year'];
        $query = mysqli_query($conn, "INSERT INTO rhl (id_city,year,large) VALUES($city, $year, $large);");
        if(!$query)
            die("Query failed: " . mysqli_error($conn));

        $_SESSION['success_store_rhl'] = "Berhasil menambah data.";
        return true;
    }
}

function update_rhl(){
    if (session_status() == PHP_SESSION_NONE)
        session_start();
    if((empty($_POST['id_rhl']))||(empty($_POST['city']))||(empty($_POST['year']))||(empty($_POST['large']))){
        $_SESSION['error_update_rhl'] = "Harap lengkapi isian formulir.";
        if(!empty($_POST['id_rhl']))
            $_SESSION['error_update_rhl_id'] = $_POST['id_rhl'];
        return false;
    }else{
        require_once "db_connection.php";
        $conn = mysqli_connect($hostname,  $username, $password, $dbname);

        if (!$conn)
            die("Connection failed: " . mysqli_connect_error());
        $id_rhl = $_POST['id_rhl'];
        $city = mysqli_real_escape_string($conn, $_POST['city']);
        $large = $_POST['large'];
        $year = $_POST['year'];
        $query = mysqli_query($conn, "UPDATE rhl SET id_city = $city, year = $year, large = $large WHERE id_rhl = $id_rhl;");
        if(!$query)
            die("Query failed: " . mysqli_error($conn));

        $_SESSION['success_update_rhl'] = "Berhasil memperbarui data.";
        return true;
    }
}

function delete_rhl(){
    if (session_status() == PHP_SESSION_NONE)
        session_start();
    if(empty($_POST['id_rhl'])){
        $_SESSION['error_delete_rhl'] = "Gagal menghapus data.";
        return false;
    }else{
        require_once "db_connection.php";
        $conn = mysqli_connect($hostname,  $username, $password, $dbname);

        if (!$conn)
            die("Connection failed: " . mysqli_connect_error());
        $id = $_POST['id_rhl'];
        $query = mysqli_query($conn, "DELETE FROM rhl WHERE id_rhl='$id'");
        if(!$query)
            die("Query failed: " . mysqli_error($conn));

        $_SESSION['success_delete_rhl'] = "Berhasil menghapus data.";
        return true;
    }
}