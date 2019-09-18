<?php

function delete_mess(){
    global $db;
    $query = "DELETE from table_info where id=".$_GET['id'];
    mysqli_query($db, $query);

}