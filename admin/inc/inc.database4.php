<?php

$connectionStatus = mysqli_connect('localhost','root','','ocs');
// establish connection with mysql database
function connect_db(){
    require_once 'config.php';
    
    $connectionStatus = mysqli_connect('localhost','root','','ocs');
    if(!$connectionStatus){
        echo "Error connecting database";
        die;
    }
    return $connectionStatus;
}

// fetch all data from database
function select_data($connectionStatus){
    $query = "SELECT * FROM `orders2`";
    $result = mysqli_query($connectionStatus, $query);
    if(mysqli_num_rows($result) > 0){
       mysqli_close($connectionStatus);
       return $result;
    }
    return false;
    
}
   
$query = "SELECT * FROM `feedback`";
    $result = mysqli_query($connectionStatus, $query);


function delete_data($connectionStatus, $id){
	$query = "DELETE FROM `orders2` WHERE `id` = $id";
	$result = mysqli_query($connectionStatus, $query);
    
	if(mysqli_affected_rows($connectionStatus)){
        return true;
    }
    return false;
}
