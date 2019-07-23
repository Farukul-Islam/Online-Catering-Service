<?php  



	$db = mysqli_connect('localhost','root','','ocs');

	$query1 = "SELECT * FROM sitting where s_id=1";
	$result1 = mysqli_query($db, $query1);
	if(mysqli_num_rows($result1) == 1){
		$row1 = mysqli_fetch_array($result1);
	}
	$query2 = "SELECT * FROM sitting where s_id=2";
	$result2 = mysqli_query($db, $query2);
	if(mysqli_num_rows($result2) == 1){
		$row2 = mysqli_fetch_array($result2);
	}
	$query3 = "SELECT * FROM sitting where s_id=3";
	$result3 = mysqli_query($db, $query3);
	if(mysqli_num_rows($result3) == 1){
		$row3 = mysqli_fetch_array($result3);
	}
	$query11 = "SELECT * FROM package where id=1";
	$result11 = mysqli_query($db, $query11);
	if(mysqli_num_rows($result11) == 1){
		$row11 = mysqli_fetch_array($result11);
	}
	$query12 = "SELECT * FROM package where id=2";
	$result12 = mysqli_query($db, $query12);
	if(mysqli_num_rows($result12) == 1){
		$row12 = mysqli_fetch_array($result12);
	}
	$query13 = "SELECT * FROM package where id=3";
	$result13 = mysqli_query($db, $query13);
	if(mysqli_num_rows($result13) == 1){
		$row13 = mysqli_fetch_array($result13);
	}               				              
	

	if (isset($_POST['add'])) {
	  
	  $username = $_POST['user_name'];
	  $product = $_POST['product_name'];
	  $price = $_POST['product_price'];
	  $quantity = $_POST['quantity'];
	  $subtotal = $price * $quantity;

  	$query = "INSERT INTO orders (user_name, product, price, quantity, subtotal) VALUES('$username', '$product', '$price', '$quantity', '$subtotal')";
  	mysqli_query($db, $query);
  	
  	mysqli_close($db);
    
	}

	if (isset($_POST['purchase'])) {

	  
	  $username = $_POST['username'];
	  $guests = $_POST['guests'];
	  $package = $_POST['package'];
	  $price = $_POST['price'];
	  $total = $guests * $price ;
	  

  	$query = "INSERT INTO orders2 (name, guests, package, price, total) VALUES('$username', '$guests', '$package', '$price', '$total')";
  	mysqli_query($db, $query);
  	
  	mysqli_close($db);
    
	}

	
	if (isset($_POST['send'])) {
	  
	  $username = $_POST['name'];
	  $email = $_POST['email'];
	  $subject = $_POST['subject'];
	  $message = $_POST['message'];
	  

  	$query = "INSERT INTO feedback (name, email, subject, message) VALUES('$username', '$email', '$subject', '$message')";
  	mysqli_query($db, $query);
  	
  	mysqli_close($db);
    
	}

	if (isset($_POST['clear'])) {
	  $username = $_POST['username'];



  	$query = "Delete from orders where user_name= '$username'";
  	mysqli_query($db, $query);

  	$query2 = "Delete from orders2 where name= '$username'";
  	mysqli_query($db, $query2);
  	
  	mysqli_close($db);
    
	}

	if (isset($_POST['confirm'])) {
	  $username = $_POST['username'];
	  $location= $_POST['location'];
	  $phone= $_POST['phone'];
	  $price= $_POST['price'];


  	$query = "INSERT INTO confirmed (name, location, phone, cost) VALUES('$username', '$location', '$phone', '$price')";
  	mysqli_query($db, $query);

  	
  	mysqli_close($db);
  	
    
	}

?>