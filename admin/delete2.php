<?php
require_once "inc/inc.database2.php";

if(isset($_POST["submit"])){
	$id = (int)$_POST["id"];
	
	if($id > 0){
        $connectionStatus = connect_db();
        $status = delete_data($connectionStatus, $id);
		if($status){
			header("Location: package.php?id=success&msg=Deletion was successfull");
		}else{
			header("Location: package.php?id=danger&msg=Invalid user ID entered!");
		}
	} else {
		header("Location: package.php?id=danger&msg=All fields mandatory");
	}
}