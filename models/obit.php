<?php

function get_obit(){
    require "db_connection.php";
    $conn = mysqli_connect($hostname,  $username, $password, $dbname);

    if (!$conn)
        die("Connection failed: " . mysqli_connect_error());

    $query = mysqli_query($conn, "SELECT * FROM obit INNER JOIN events on obit.id_event = events.id_event ORDER BY id_obit DESC;");

    if(!$query)
        die("Query failed: " . mysqli_error($conn));


    return mysqli_fetch_all($query, MYSQLI_ASSOC);
}

function store_obit(){
    if (session_status() == PHP_SESSION_NONE)
        session_start();
    if((empty($_POST['event']) && empty($_POST['name']))||(empty($_POST['year']))||(empty($_POST['count']))){
        $_SESSION['error_store_obit'] = "Harap lengkapi isian formulir.";
        return false;
    }else{
        require "db_connection.php";
        require "event.php";
        $conn = mysqli_connect($hostname,  $username, $password, $dbname);

        if (!$conn)
            die("Connection failed: " . mysqli_connect_error());


        if(!empty($_POST['name']))
            $id_event = store_event($_POST['name']);
        else
            $id_event = $_POST['event'];

        $count = $_POST['count'];
        $year = $_POST['year'];
        $query = mysqli_query($conn, "INSERT INTO obit (id_event,year,count) VALUES('$id_event', $year, $count);");
        if(!$query)
            die("Query failed: " . mysqli_error($conn));

        $_SESSION['success_store_obit'] = "Berhasil menambah data.";
        return true;
    }
}

function update_obit(){
    if (session_status() == PHP_SESSION_NONE)
        session_start();
    if((empty($_POST['id_obit']))||(empty($_POST['event']))||(empty($_POST['year']))||(empty($_POST['count']))){
        $_SESSION['error_update_obit'] = "Harap lengkapi isian formulir.";
        if(!empty($_POST['id_obit']))
            $_SESSION['error_update_obit_id'] = $_POST['id_obit'];
        return false;
    }else{
        require "db_connection.php";
        $conn = mysqli_connect($hostname,  $username, $password, $dbname);

        if (!$conn)
            die("Connection failed: " . mysqli_connect_error());
        $id_obit = $_POST['id_obit'];
        $id_event = $_POST['event'];
        $count = $_POST['count'];
        $year = $_POST['year'];
        $query = mysqli_query($conn, "UPDATE obit SET id_event = '$id_event', year = $year, count = $count WHERE id_obit = $id_obit;");
        if(!$query)
            die("Query failed: " . mysqli_error($conn));

        $_SESSION['success_update_obit'] = "Berhasil memperbarui data.";
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
        require "db_connection.php";
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

function get_average_by_year_by_sector($sector, $year){

}
function get_average_per_sector_per_year(){
    require "db_connection.php";
    $conn = mysqli_connect($hostname,  $username, $password, $dbname);

    if (!$conn)
        die("Connection failed: " . mysqli_connect_error());

    $query = mysqli_query($conn, "SELECT avg(count) as count, sector, year FROM obit INNER JOIN events ON obit.id_event = events.id_event GROUP BY sector, year");
    if(!$query)
        die("Query failed: " . mysqli_error($conn));

    return mysqli_fetch_all($query, MYSQLI_ASSOC);
}

function get_average_per_event(){
    require "db_connection.php";
    $conn = mysqli_connect($hostname,  $username, $password, $dbname);

    if (!$conn)
        die("Connection failed: " . mysqli_connect_error());

    $query = mysqli_query($conn, "SELECT avg(count) as count, name FROM obit INNER JOIN events on obit.id_event = events.id_event GROUP BY obit.id_event");
    if(!$query)
        die("Query failed: " . mysqli_error($conn));

    return mysqli_fetch_all($query, MYSQLI_ASSOC);
}

function get_average_per_event_by_year($year){
    require "db_connection.php";
    $conn = mysqli_connect($hostname,  $username, $password, $dbname);

    if (!$conn)
        die("Connection failed: " . mysqli_connect_error());

    $query = mysqli_query($conn, "SELECT count, name FROM obit INNER JOIN events on obit.id_event = events.id_event WHERE year = $year");
    if(!$query)
        die("Query failed: " . mysqli_error($conn));

    return mysqli_fetch_all($query, MYSQLI_ASSOC);
}

function get_average_per_year_by_event($id_event){
    require "db_connection.php";
    $conn = mysqli_connect($hostname,  $username, $password, $dbname);

    if (!$conn)
        die("Connection failed: " . mysqli_connect_error());

    $query = mysqli_query($conn, "SELECT count, year FROM obit INNER JOIN events on obit.id_event = events.id_event WHERE obit.id_event = $id_event");
    if(!$query)
        die("Query failed: " . mysqli_error($conn));

    return mysqli_fetch_all($query, MYSQLI_ASSOC);
}

function get_years(){
    require "db_connection.php";
    $conn = mysqli_connect($hostname,  $username, $password, $dbname);

    if (!$conn)
        die("Connection failed: " . mysqli_connect_error());

    $query = mysqli_query($conn, "SELECT year FROM obit GROUP BY year ORDER BY year ASC");
    if(!$query)
        die("Query failed: " . mysqli_error($conn));

    return mysqli_fetch_all($query, MYSQLI_ASSOC);
}