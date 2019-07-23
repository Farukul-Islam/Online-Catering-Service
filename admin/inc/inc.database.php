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
    $query = "SELECT * FROM `sitting`";
    $result = mysqli_query($connectionStatus, $query);
    if(mysqli_num_rows($result) > 0){
       mysqli_close($connectionStatus);
       return $result;
    }
    return false;
    
}
   

//update data for any row
function update_data($connectionStatus, $id, $choice, $newValue){
    $query = "UPDATE `sitting` SET ";

    if($choice == "name"){
	   $query .= "`s_name`='$newValue'";
	} else if($choice == "price"){
        $query .= "`s_price`='$newValue'";
    }
    $query .= " WHERE `s_id`=$id"; 
    
    $result = mysqli_query($connectionStatus, $query);
    
	if(mysqli_affected_rows($connectionStatus)){
        return true;
    } else {
        return false;
    }
}

function delete_data($connectionStatus, $id){
	$query = "DELETE FROM `sitting` WHERE `s_id` = $id";
	$result = mysqli_query($connectionStatus, $query);
    
	if(mysqli_affected_rows($connectionStatus)){
        return true;
    }
    return false;
}
