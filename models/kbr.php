<?php
function get_kbr(){
    require_once "db_connection.php";
    $conn = mysqli_connect($hostname,  $username, $password, $dbname);

    if (!$conn)
        die("Connection failed: " . mysqli_connect_error());

    $query = mysqli_query($conn, "SELECT cities.name,kbr.id_kbr, kbr.year,kbr.unit,kbr.large FROM kbr INNER JOIN cities ON kbr.id_city=cities.id_city ORDER BY id_kbr DESC;");

    if(!$query)
        die("Query failed: " . mysqli_error($conn));


    return mysqli_fetch_all($query, MYSQLI_ASSOC);
}

function store_kbr(){
    if (session_status() == PHP_SESSION_NONE)
        session_start();
    if((empty($_POST['city']))||(empty($_POST['unit']))||(empty($_POST['large']))||(empty($_POST['year']))){
        $_SESSION['error_store_kbr'] = "Harap lengkapi isian formulir.";
        return false;
    }else{
        require_once "db_connection.php";
        $conn = mysqli_connect($hostname,  $username, $password, $dbname);

        if (!$conn)
            die("Connection failed: " . mysqli_connect_error());
        $city = $_POST['city'];
        $unit = $_POST['unit'];
        $large = $_POST['large'];
        $year = $_POST['year'];
        $query = mysqli_query($conn, "INSERT INTO kbr (id_city,year,unit,large) VALUES($city,$year,$unit,$large);");
        if(!$query)
            die("Query failed: " . mysqli_error($conn));

        $_SESSION['success_store_kbr'] = "Berhasil menambah data.";
        return true;
    }
}

function update_kbr(){
    if (session_status() == PHP_SESSION_NONE)
        session_start();
    if((empty($_POST['id_kbr']))||(empty($_POST['city']))||(empty($_POST['year']))||(empty($_POST['unit'])) ||(empty($_POST['large']))){
        $_SESSION['error_update_kbr'] = "Harap lengkapi isian formulir.";
        if(!empty($_POST['id_kbr']))
            $_SESSION['error_update_kbr_id'] = $_POST['id_kbr'];
        return false;
    }else{
        require_once "db_connection.php";
        $conn = mysqli_connect($hostname,  $username, $password, $dbname);

        if (!$conn)
            die("Connection failed: " . mysqli_connect_error());
        $id_kbr = $_POST['id_kbr'];
        $city = $_POST['city'];
        $unit = $_POST['unit'];
        $large = $_POST['large'];
        $year = $_POST['year'];
        $query = mysqli_query($conn, "UPDATE kbr SET  year = $year,id_city = $city , unit = $unit, large = $large WHERE id_kbr=$id_kbr;");
        if(!$query)
            die("Query failed: " . mysqli_error($conn));

        $_SESSION['success_update_kbr'] = "Berhasil memperbarui data.";
        return true;
    }
}

function delete_kbr(){
    if (session_status() == PHP_SESSION_NONE)
        session_start();
    if(empty($_POST['id_kbr'])){
        $_SESSION['error_delete_kbr'] = "Gagal menghapus data.";
        return false;
    }else{
        require_once "db_connection.php";
        $conn = mysqli_connect($hostname,  $username, $password, $dbname);

        if (!$conn)
            die("Connection failed: " . mysqli_connect_error());
        $id = $_POST['id_kbr'];
        $query = mysqli_query($conn, "DELETE FROM kbr WHERE id_kbr='$id'");
        if(!$query)
            die("Query failed: " . mysqli_error($conn));

        $_SESSION['success_delete_kbr'] = "Berhasil menghapus data.";
        return true;
    }
}


function get_kbr_per_year($year){

    require "db_connection.php";
    $conn = mysqli_connect($hostname,  $username, $password, $dbname);

    if (!$conn)
        die("Connection failed: " . mysqli_connect_error());

    $query = mysqli_query($conn, "SELECT cities.name, kbr.unit, kbr.large, kbr.year FROM kbr INNER JOIN cities ON kbr.id_city=cities.id_city WHERE year='$year'");

    if(!$query)
        die("Query failed: " . mysqli_error($conn));


    return mysqli_fetch_all($query, MYSQLI_ASSOC);
}

