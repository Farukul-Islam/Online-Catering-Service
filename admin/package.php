<?php
	require_once "inc/inc.database2.php";
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
        <!-- Package -->

    <div class="col-md-12" id="package">
    	<div class="row">
        	<div class="col-md-2">

        		<h3>Actions</h3>
	            
	            <div class="form-wrapper">
	                <form method="post" action="update2.php">
						<select class="form-control" name="choice">
							<option>Choose field</option>
							<option value="name">Package Name</option>
							<option value="price">Price</option>
							<option value="item1">Item1</option>
							<option value="item2">Item2</option>
							<option value="item3">Item3</option>
							<option value="item4">Item4</option>
							<option value="item5">Item5</option>
							<option value="item6">Item6</option>
						</select>
						<input class="form-control" name="id" placeholder="ID" required>
		                <input class="form-control" name="update-value" placeholder="Enter new value" required>
		                <button type="submit" class="btn btn-warning" name="submit">UPDATE</button>
	                </form>
	            </div>
	            <div class="form-wrapper" >
	                <form method="post" action="delete2.php">
		                <input class="form-control" name="id" placeholder="ID" required>
		                <button type="submit" class="btn btn-danger" name="submit">DELETE</button>
	                </form>
	            </div>
	        </div>
	        <div class="col-md-10" id="right-section">
	        	<h2>Packages</h2>

				<table class="table table-hover table-condensed">
					<tr>	
						<th>ID</th>
						<th>Product Name</th>
						<th>Price</th>
						<th>Item1</th>
						<th>Item2</th>
						<th>Item3</th>
						<th>Item4</th>
						<th>Item5</th>
						<th>Item6</th>
						
					</tr>
<?php		
	
	$query_result = select_data($connectionStatus);
	while($query_row2 = mysqli_fetch_assoc($query_result)){
			
		echo "
					<tr>
						<td>" . $query_row2["id"] . "</td>
						<td>" . $query_row2["package"] . "</td>
						<td>" . $query_row2["price"] . "</td>
						<td>" . $query_row2["item1"] . "</td>
						<td>" . $query_row2["item2"] . "</td>
						<td>" . $query_row2["item3"] . "</td>
						<td>" . $query_row2["item4"] . "</td>
						<td>" . $query_row2["item5"] . "</td>
						<td>" . $query_row2["item6"] . "</td>
						
					</tr>";
	}
?>						
				</table>
				<div id="message">
<?php
	if(isset($_GET["id"])){
		echo '<div class="alert alert-' . $_GET["id"] . ' alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . $_GET["msg"] . '</div>';
	}
?>
				</div>
	        </div> 
        </div>
    </div>
    <!-- Package -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>