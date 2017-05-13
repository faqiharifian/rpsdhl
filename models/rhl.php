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