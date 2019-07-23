<?php
	session_start();
	$username="";
	
	//connection
	$db = mysqli_connect('localhost','root','','ocs');

	if (isset($_POST['reg'])) {
	  
	  $username = $_POST['reg_name'];
	  $password = $_POST['reg_pass'];
	  $location = $_POST['location'];
	

	  $phone = $_POST['phone'];
	  	

  	$query = "INSERT INTO users (user_name, user_pass, location, phone) VALUES('$username', '$password', '$location', '$phone')";
  	mysqli_query($db, $query);
  	
  	header('location: index.php');
  	
  	mysqli_close($db);
    
	}

	if (isset($_POST['login'])) {
	  $username = $_POST['user_name'];
	  $password = $_POST['user_pass'];
	  $_SESSION['name'] = $username;
	  
	  	$query = "SELECT * FROM users WHERE user_name='$username' AND user_pass='$password'";
	  	$results = mysqli_query($db, $query);
	  	if (mysqli_num_rows($results) == 1) {

	  	  header('location: home.php');
	  	  
	  	}else {
	  		$_SESSION['failed'] =  "Wrong username/password combination";
	  		header('location: index.php');
	  		
	  	}
	  	mysqli_close($db);
	  	exit();
	  
	}
	
	
	

?>