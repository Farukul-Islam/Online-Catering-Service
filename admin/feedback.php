<?php
	require_once "inc/inc.database4.php";
	$connectionStatus = connect_db();
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="prabhakar gupta">
	<title>Admin Panel</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
</head>
<body>



<nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" style="color: white;">Admin Panel</a>
			<a class="navbar-brand" href="index.php">Decorating Items</a>
			<a class="navbar-brand" href="package.php">Dish Packages</a>
			<a class="navbar-brand" href="dorders.php">Decoration Orders</a>
			<a class="navbar-brand" href="porders.php">Package Orders</a>
			<a class="navbar-brand" href="confirmed.php">Placed Orders</a>
			<a class="navbar-brand" href="feedback.php">Feedbacks</a>

		</div>

		
	</div>
</nav>

	<!-- Decoration -->
    <div class="col-md-12" id="decoration">
    	<div class="row">
        	
	        <div class="col-md-12" id="right-section">
	        	<h2>User Feedbacks</h2>

				<table class="table table-hover table-condensed">
					<tr>	
						<th>Name</th>
						<th>Email</th>
						<th>Subject</th>
						<th>Message</th>
						
					</tr>
<?php		
	while($query_row = mysqli_fetch_assoc($result)){
			
		echo "
					<tr>
						<td>" . $query_row["name"] . "</td>
						<td>" . $query_row["email"] . "</td>
						<td>" . $query_row["subject"] . "</td>
						<td>" . $query_row["message"] . "</td>
						
					</tr>";
	}
?>						
				</table>
				<div id="message">

				</div>
	        </div> 
        </div>
    </div>
    <!-- Decoration -->
    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>