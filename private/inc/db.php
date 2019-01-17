<?php

// Database Connections
require_once("db_credentials.php");

// Connection function Database
function db_connect() {
    $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    confirm_db_connect();
    return $con;
}

// database connection confirm
function confirm_db_connect() {
    if(mysqli_connect_errno()) {
        $msg = "Database connection failed: ";
        $msg .= mysqli_connect_error();
        $msg .= " (" . mysqli_connect_errno() . ")";
        exit($msg);
    }
}

// database connection close
function db_close() {
    if(isset($con)) {
        mysqli_close($con);
    }
}


?>