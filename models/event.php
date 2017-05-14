<?php
function get_events(){
    require "db_connection.php";
    $conn = mysqli_connect($hostname,  $username, $password, $dbname);

    if (!$conn)
        die("Connection failed: " . mysqli_connect_error());

    $query = mysqli_query($conn, "SELECT * FROM events;");

    if(!$query)
        die("Query failed: " . mysqli_error($conn));


    return mysqli_fetch_all($query, MYSQLI_ASSOC);
}