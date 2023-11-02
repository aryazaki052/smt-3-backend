<?php

function connect_database(){
    $servername = "";
    $username = "root";
    $password = "";
    $database = "uts_backend";
    
    $conn = new mysqli($servername, $username, $password, $database);
    
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    return $conn;
}

function runQuery($query) {
    $conn = connect_database();

    $result = $conn->query($query);

    $conn->close();

    return $result;
}






