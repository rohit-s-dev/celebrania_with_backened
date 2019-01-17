<?php 
// move uplooaded files
function m_f($tmp_name, $name) {
    return move_uploaded_file($tmp_name, "../images/our_works/$name");
}

// empty validation
function blank($value){
    return empty($value);
}

function t_val($value, $max, $min) {
    if(strlen($value) > $max || strlen($value) < $min) {
        return $value;
    }
}


// escape
function escape($db, $value) {
    return mysqli_real_escape_string($db, $value);
}

?>