<?php 
//OutPut buffering
ob_start();

// function file required
require_once("db.php");
require_once("func.php");

// database conection
$db = db_connect();


// if($db) {
//     echo "Connected";
// } else {
//     echo "not connected";
// }

?>