<?php


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
    $query = "SELECT * FROM `confirmed`";
    $result = mysqli_query($connectionStatus, $query);
    if(mysqli_num_rows($result) > 0){
       mysqli_close($connectionStatus);
       return $result;
    }
    return false;
    
}
   



function delete_data($connectionStatus, $id){
	$query = "DELETE FROM `confirmed` WHERE `id` = $id";
	$result = mysqli_query($connectionStatus, $query);
    
	if(mysqli_affected_rows($connectionStatus)){
        return true;
    }
    return false;
}
