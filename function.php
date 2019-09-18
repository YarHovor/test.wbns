<?php

function clear(){
    global $db;
    foreach ($_POST as $key => $value) {
        $_POST[$key] = mysqli_real_escape_string($db, $value);
    }
}

function save_mess(){
    global $db;
    clear();
    extract($_POST);
    $query = "INSERT INTO table_info (first_name, second_name, email) VALUES ('$first_name', '$second_name', '$email')";
    mysqli_query($db, $query);
}

function get_mess(){
    global $db;
    $query = "SELECT * FROM table_info";
    $res = mysqli_query($db, $query);
    return mysqli_fetch_all($res, MYSQLI_ASSOC);

}