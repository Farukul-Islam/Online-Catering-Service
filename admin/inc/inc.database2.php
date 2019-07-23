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
    $query = "SELECT * FROM `package`";
    $result = mysqli_query($connectionStatus, $query);
    if(mysqli_num_rows($result) > 0){
       mysqli_close($connectionStatus);
       return $result;
    }
    return false;
    
}
   

//update data for any row
function update_data($connectionStatus, $id, $choice, $newValue){
    $query = "UPDATE `package` SET ";

    if($choice == "name"){
	   $query .= "`package`='$newValue'";
	}
    else if($choice == "price"){
        $query .= "`price`='$newValue'";
    }
    else if($choice == "item1"){
        $query .= "`item1`='$newValue'";
    }
    else if($choice == "item2"){
        $query .= "`item2`='$newValue'";
    }
    else if($choice == "item3"){
        $query .= "`item3`='$newValue'";
    }
    else if($choice == "item4"){
        $query .= "`item4`='$newValue'";
    }
    else if($choice == "item5"){
        $query .= "`item5`='$newValue'";
    }
    else if($choice == "item6"){
        $query .= "`item6`='$newValue'";
    }
    $query .= " WHERE `id`=$id"; 
    
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
