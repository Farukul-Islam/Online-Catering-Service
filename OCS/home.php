<?php include('main_server.php');?>
<?php include('server.php');?>
<?php  
	if (isset($_POST['cart'])) {
	  
	  $username = $_POST['user_name'];
	  
	  
  	$query1 = "Select * from orders where user_name = '$username'";
  	$result1 = mysqli_query($db, $query1);

  	$query2 = "Select * from orders2 where name = '$username'";
  	$result2 = mysqli_query($db, $query2);

  	$query3 = "Select * from users where user_name = '$username'";
  	$result3 = mysqli_query($db, $query3);
  	if(mysqli_num_rows($result3) > 0){
		$row30 = mysqli_fetch_array($result3);
	}

	$location= $row30["location"];
	$_SESSION['location'] = $location;

	$phone= $row30["phone"];
	$_SESSION['phone'] = $phone;
  	
  	mysqli_close($db);
    
	}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Online catering Service</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="css/magnific-popup.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
<style>
	table {
	    font-family: arial, sans-serif;
	    border-collapse: collapse;
	    width: 100%;
	    color: white;
	}

	td, th {
	    border: 1px solid #dddddd;
	    text-align: left;
	    padding: 8px;
	}

</style>
</head>

<body>
	<!-- Header -->
	<header id="home">
		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./img/bg1.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Nav -->
		<nav id="nav" class="navbar nav-transparent">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="home.php">
							<h2 style="color: #16A085; padding-top:7px">OCS</h2>
						</a>
					</div>
					<!-- /Logo -->

					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>

				<!--  Main navigation  -->
				<ul class="main-nav nav navbar-nav navbar-right">
					<li><a href="#home">Home</a></li>
					<li><a href="#about">About</a></li>
					<li class="has-dropdown"><a href="#">Categories</a>
						<ul class="dropdown">
							
							<li><a href="#decoration">Decoration</a></li>
							<li><a href="#packages">Dish Packages</a></li>
							
						</ul>
					</li>
					
					<li><a href="#team">Team</a></li>
					<li><a href="#contact">Contact</a></li>
					<li>
						<?php if (isset($_SESSION['name'])) : ?>
				            <?php
				                $username = $_SESSION['name'];

				            ?>
				        <?php endif ?>
				        <?php if (isset($_SESSION['location'])) : ?>
				            <?php
				                $location = $_SESSION['location'];

				            ?>
				        <?php endif ?>
				        <?php if (isset($_SESSION['phone'])) : ?>
				            <?php
				                $phone = $_SESSION['phone'];

				            ?>
				        <?php endif ?>
				            
						<form method="post" action="#cart">
							<input type="hidden" name="user_name" value="<?php echo $username; ?>" />
							
							<input type="submit" name="cart" value="Your Cart" class="main-btn" style="padding:8px 10px; border-radius: 5px; ">
							
						</form>
					</li>
					<li><a href="index.php">Logout</a></li>
					
				</ul>
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->

		<!-- home wrapper -->
		<div class="home-wrapper">
			<div class="container">
				<div class="row">

					<!-- home content -->
					<div class="col-md-10 col-md-offset-1">
						<div class="home-content">
							<h1 class="white-text">Online catering Service</h1>
							<p class="white-text"> For Wedding and Social Event
							</p>
							<button href="#decoration" class="white-btn">Explore Products</button>
							
						</div>
					</div>
					<!-- /home content -->

				</div>
			</div>
		</div>
		<!-- /home wrapper -->

	</header>
	<!-- /Header -->

	<!-- About -->
	<div id="about" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">About Our Service</h2>
				</div>
				<!-- /Section header -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-mortar-board"></i>
						<h3>Renowned for Services</h3>
						<p>This Online Catering Service & Events provides fresh, innovative and professional catering and concession services. </p>
						
					</div>
				</div>
				<!-- /about -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-thumbs-up"></i>
						<h3>Quality Based Service</h3>
						<p>We plan events ranging from weddings and receptions, private parties, social events, corporate or medical events, themed events, family reunions.</p>
						
					</div>
				</div>
				<!-- /about -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-reply"></i>
						<h3>Response to Feedback</h3>
						<p>In this Website, customers can express their opinions about our services that  we provide and they can also suggest us structural advice to improve our service</p>
						
					</div>
				</div>
				<!-- /about -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /About -->


	<!-- decoration -->
	<div id="decoration" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Decorating Items</h2>
				</div>
				<!-- /Section header -->

				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="./img/work11.jpg" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Category</span>

						<h3><?php echo $row1["s_name"]; ?></h3>
						<h3>$ <?php echo $row1["s_price"]; ?></h3>
						<h3>
							<?php if (isset($_SESSION['name'])) : ?>
				            
				                <?php
				                  	$username = $_SESSION['name'];

				                ?>
				                				              
				            <?php endif ?>
						</h3>
						
						<div class="work-link">
							<form id="add" method="post" action="#decoration">
								
								<h6 class="white-text">Enter Quantity</h6>
								<input type="hidden" name="user_name" value="<?php echo $username; ?>" />
								<input type="hidden" name="product_name" value="<?php echo $row1["s_name"]; ?>" />
								<input type="hidden" name="product_price" value="<?php echo $row1["s_price"]; ?>" />
								<input type="number" name="quantity" value="50" min="50" max="100" style="margin-bottom: 10px" />
								<input type="submit" name="add" value="Add to Cart" class="main-btn" style="padding: 10px; border-radius: 0px; margin-bottom: 5px;">
								
							</form>
							
							
							<a class="lightbox" href="./img/work11.jpg"><i class="fa fa-search-plus"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->

				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="./img/work22.jpg" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Category</span>

						<h3><?php echo $row2["s_name"]; ?></h3>
						<h3>$ <?php echo $row2["s_price"]; ?></h3>
						<h3>
							<?php if (isset($_SESSION['name'])) : ?>
				            
				                <?php
				                  	$username = $_SESSION['name'];
				                ?>
				                				              
				            <?php endif ?>
						</h3>
						
						<div class="work-link">
							<form id="add" method="post" action="#decoration">
								
								<h6 class="white-text">Enter Quantity</h6>
								<input type="hidden" name="user_name" value="<?php echo $username; ?>" />
								<input type="hidden" name="product_name" value="<?php echo $row2["s_name"]; ?>" />
								<input type="hidden" name="product_price" value="<?php echo $row2["s_price"]; ?>" />
								<input type="number" name="quantity" value="10" min="10" max="100" style="margin-bottom: 10px" />
								<input type="submit" name="add" value="Add to Cart" class="main-btn" style="padding: 10px; border-radius: 0px; margin-bottom: 5px;">
								
							</form>
							
							
							<a class="lightbox" href="./img/work22.jpg"><i class="fa fa-search-plus"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->

				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="./img/work33.jpg" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Category</span>

						<h3><?php echo $row3["s_name"]; ?></h3>
						<h3>$ <?php echo $row3["s_price"]; ?></h3>
						<h3>
							<?php if (isset($_SESSION['name'])) : ?>
				            
				                <?php
				                  	$username = $_SESSION['name'];
				                ?>
				                				              
				            <?php endif ?>
						</h3>
						
						<div class="work-link">
							<form id="add" method="post" action="#decoration">
								
								<h6 class="white-text">Enter Quantity</h6>
								<input type="hidden" name="user_name" value="<?php echo $username; ?>" />
								<input type="hidden" name="product_name" value="<?php echo $row3["s_name"]; ?>" />
								<input type="hidden" name="product_price" value="<?php echo $row3["s_price"]; ?>" />
								<input type="number" name="quantity" value="10" min="10" max="100" style="margin-bottom: 10px" />
								<input type="submit" name="add" value="Add to Cart" class="main-btn" style="padding: 10px; border-radius: 0px; margin-bottom: 5px;">
								
							</form>
							
							
							<a class="lightbox" href="./img/work33.jpg"><i class="fa fa-search-plus"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->

				

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /decoration -->

	


	<!-- packages -->
	<div id="packages" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- why choose us content -->
				<div class="col-md-6">
					<div class="section-header">
						<h2 class="title">Choose Your Package Here</h2>

					</div>
					<p>Please fill up the form before choosing your package</p>
					<div class="feature">
						
					</div>
				</div>
				<!-- /why choose us content -->

				<!-- About slider -->
				<div class="col-md-6">
					<div id="about-slider" class="owl-carousel owl-theme">
						<img class="img-responsive" src="./img/ab1.jpg" alt="">
						<img class="img-responsive" src="./img/ab2.jpg" alt="">
						<img class="img-responsive" src="./img/ab3.jpg" alt="">
						<img class="img-responsive" src="./img/ab4.jpg" alt="">
					</div>
				</div>
				<!-- /About slider -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Why Choose Us -->


	

	<!-- Dish Packages -->
	<div id="pricing" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Dish Packages</h2>
				</div>
				<!-- /Section header -->

				<!-- pricing -->
				<div class="col-sm-4">
					<div class="pricing">
						<div class="price-head">
							<span class="price-title"><?php echo $row11["package"]; ?></span>
							<div class="price">
								<h3>$<?php echo $row11["price"]; ?><span class="duration">/ person</span></h3>
							</div>


						</div>
						<ul class="price-content">
							<li><p><?php echo $row11["item1"]; ?></p></li>
							<li><p><?php echo $row11["item2"]; ?></p></li>
							<li><p><?php echo $row11["item3"]; ?></p></li>
							<li><p><?php echo $row11["item4"]; ?></p></li>
							<li><p><?php echo $row11["item5"]; ?></p></li>
							<li><p><?php echo $row11["item6"]; ?></p></li>
						</ul>
						<div class="price-btn">
							<form id="order" method="post" action="#pricing">
								<input type="hidden" name="username"  value="<?php echo $username; ?>" >
								<input type="hidden" name="package" value="<?php echo $row11["package"]; ?>">
								<input type="hidden" name="price" value="<?php echo $row11["price"]; ?>">
								<label class="white-text">Enter Number of Guests</label>
								<input type="number" name="guests" value="50" min="50" max="500" >
								<button type="submit" name="purchase" class="outline-btn">Purchase now</button>
							</form>
							
						</div>
					</div>
				</div>
				<!-- /pricing -->

				<!-- pricing -->
				<div class="col-sm-4">
					<div class="pricing">
						<div class="price-head">
							<span class="price-title"><?php echo $row12["package"]; ?></span>
							<div class="price">
								<h3>$<?php echo $row12["price"]; ?><span class="duration">/ persosn</span></h3>
							</div>

						</div>
						<ul class="price-content">
							<li><p><?php echo $row12["item1"]; ?></p></li>
							<li><p><?php echo $row12["item2"]; ?></p></li>
							<li><p><?php echo $row12["item3"]; ?></p></li>
							<li><p><?php echo $row12["item4"]; ?></p></li>
							<li><p><?php echo $row12["item5"]; ?></p></li>
							<li><p><?php echo $row12["item6"]; ?></p></li>
						</ul>
						<div class="price-btn">
							<form id="order" method="post" action="#pricing">
								<input type="hidden" name="username"  value="<?php echo $username; ?>" >
								<label class="white-text">Enter Number of Guests</label>
								<input type="number" name="guests" value="50" min="50" max="500" >
								<input type="hidden" name="package" value="<?php echo $row12["package"]; ?>">
								<input type="hidden" name="price" value="<?php echo $row12["price"]; ?>">
								<button type="submit" name="purchase" class="outline-btn">Purchase now</button>
							</form>
						</div>
					</div>
				</div>
				<!-- /pricing -->

				<!-- pricing -->
				<div class="col-sm-4">
					<div class="pricing">
						<div class="price-head">
							<span class="price-title"><?php echo $row13["package"]; ?></span>
							<div class="price">
								<h3>$<?php echo $row13["price"]; ?><span class="duration">/ person</span></h3>
							</div>

						</div>
						<ul class="price-content">
							<li><p><?php echo $row13["item1"]; ?></p></li>
							<li><p><?php echo $row13["item2"]; ?></p></li>
							<li><p><?php echo $row13["item3"]; ?></p></li>
							<li><p><?php echo $row13["item4"]; ?></p></li>
							<li><p><?php echo $row13["item5"]; ?></p></li>
							<li><p><?php echo $row13["item6"]; ?></p></li>
						</ul>
						<div class="price-btn">
							<form id="order" method="post" action="#pricing">
								<input type="hidden" name="username"  value="<?php echo $username; ?>" >
								<label class="white-text">Enter Number of Guests</label>
								<input type="number" name="guests" value="50" min="50" max="500" >
								<input type="hidden" name="package" value="<?php echo $row13["package"]; ?>">
								<input type="hidden" name="price" value="<?php echo $row13["price"]; ?>">
								<button type="submit" name="purchase" class="outline-btn">Purchase now</button>
							</form>
						</div>
					</div>
				</div>
				<!-- /pricing -->

			</div>
			<!-- Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /packages -->




	<!-- Team -->
	<div id="team" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Our Team</h2>
				</div>
				<!-- /Section header -->

				<!-- team -->
				<div class="col-sm-4">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="img/team11.jpg" alt="">
							<div class="overlay">
								<div class="team-social">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</div>
							</div>
						</div>
						<div class="team-content">
							<h3>Faruk</h3>
							<span>Web Designer</span>
						</div>
					</div>
				</div>
				<!-- /team -->

				<!-- team -->
				<div class="col-sm-4">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="img/team12.jpg" alt="">
							<div class="overlay">
								<div class="team-social">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</div>
							</div>
						</div>
						<div class="team-content">
							<h3>Shuvo</h3>
							<span>Web Designer</span>
						</div>
					</div>
				</div>
				<!-- /team -->

				<!-- team -->
				<div class="col-sm-4">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="img/team13.jpg" alt="">
							<div class="overlay">
								<div class="team-social">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</div>
							</div>
						</div>
						<div class="team-content">
							<h3>Mithun</h3>
							<span>Web Designer</span>
						</div>
					</div>
				</div>
				<!-- /team -->
				<!-- team -->
				<div class="col-sm-4">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="img/team14.jpg" alt="">
							<div class="overlay">
								<div class="team-social">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</div>
							</div>
						</div>
						<div class="team-content">
							<h3>Sajeeb</h3>
							<span>Web Designer</span>
						</div>
					</div>
				</div>
				<!-- /team -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Team -->



	<!-- Contact -->
	<div id="contact" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section-header -->
				<div class="section-header text-center">
					<h2 class="title">Feedback</h2>
				</div>
				<!-- /Section-header -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-phone"></i>
						<h3>Phone</h3>
						<p>+880-1757-134191</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-envelope"></i>
						<h3>Email</h3>
						<p>farukulislam8@gamil.com</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-map-marker"></i>
						<h3>Address</h3>
						<p>29/a Sukrabad,Dhaka</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact form -->
				<div class="col-md-8 col-md-offset-2">
					<form class="contact-form" id="add" method="post" action="#contact">
						<input name="name" type="text" class="input" value="<?php echo $username; ?>" placeholder="Enter Your Name" style="border: 1px solid black;" required="required">
						<input name="email" type="email" class="input" placeholder="Email" style="border: 1px solid black;" required="required">
						<input name="subject" type="text" class="input" placeholder="Subject" style="border: 1px solid black;" required="required">
						<textarea name="message" class="input" placeholder="Message" style="border: 1px solid black;" required="required"></textarea>
						<button name="send" class="main-btn">Send message</button>
					</form>
				</div>
				<!-- /contact form -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Contact -->

		<!-- cart -->
	<div id="cart" class="section md-padding">

		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./img/bg2.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Container -->
		<div class="container">
			<?php if (isset($_SESSION['name'])) : ?>
				            <?php
				                $username = $_SESSION['name'];

				            ?>
				        <?php endif ?>
				        <?php if (isset($_SESSION['location'])) : ?>
				            <?php
				                $location = $_SESSION['location'];

				            ?>
				        <?php endif ?>
				        <?php if (isset($_SESSION['phone'])) : ?>
				            <?php
				                $phone = $_SESSION['phone'];

				            ?>
				        <?php endif ?>
			<ul class="main-nav nav navbar-nav navbar-right" >
					<li><h3 style="color: white;"><?php echo $username; ?></h3></li>
					<li><h3 style="color: white;"><?php echo $location; ?></h3></li>
					<li><h3 style="color: white;"><?php echo $phone; ?></h3></li>
			</ul>

			<h2 class="white-text">Cart</h2>

			<h4 class="white-text">Decorating Items</h4>

			<table>
				<tr >
					<th style="width: 25%;">Product</th>
					<th style="width: 25%;">Price</th>
					<th style="width: 25%;">Quanity</th>
					<th style="width: 25%;">Subtotal</th>
				</tr>
				<?php 
				$subtotal1=0;
				$subtotal2=0;
				$total=0; 
					while ($row20 = mysqli_fetch_array($result1))
			         {
			             echo "
			                <tr>
								<td>".$row20["product"]." </td>
								<td>".$row20['price']." $</td>
								<td>".$row20["quantity"]." </td>
								<td>".$row20["subtotal"]." $</td>
							</tr>
			              ";
			              $subtotal1= $subtotal1 + $row20["subtotal"];
			         }
				?>
				
			</table>

			<h4 class="white-text" style="margin-top: 40px;">Dish Packages</h4>

			<table>
				<tr >
					<th style="width: 25%;">Package</th>
					<th style="width: 25%;">Price</th>
					<th style="width: 25%;">Number of Guests</th>
					<th style="width: 25%;">Subtotal</th>
				</tr>
				<?php  
					while ($row21 = mysqli_fetch_array($result2))
			         {
			             echo "
			                <tr>
								<td>".$row21["package"]." </td>
								<td>".$row21['price']." $</td>
								<td>".$row21["guests"]."</td>
								<td>".$row21["total"]." $</td>
							</tr>
			              ";
			              $subtotal2= $subtotal2 + $row21["total"];
			          }
			          $total = $subtotal1 + $subtotal2;
				?>
				
			</table>
							

			<form method="post" style="margin-top: 20px;">
				<h3 class="white-text"> Total Cost : $<?php echo $total; ?></h3>
				
				<input type="hidden" name="username" value="<?php echo $username; ?>">
				<input type="hidden" name="location" value="<?php echo $location; ?>">
				<input type="hidden" name="phone" value="<?php echo $phone; ?>">
				<input type="hidden" name="price" value="<?php echo $total; ?>">

				<button name="clear" class="main-btn">Clear Cart</button>
				<button name="confirm" class="main-btn">Place Order</button>
			</form>

		</div>
		<!-- /Container -->

	</div>
	<!-- /cart -->


	<!-- Footer -->
	<footer id="footer" class="sm-padding bg-dark">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<div class="col-md-12">

					<!-- footer logo -->
					<div class="footer-logo">
						<h1 class="white-text">OCS</h1>
					</div>
					<!-- /footer logo -->

					<!-- footer follow -->
					<ul class="footer-follow">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube"></i></a></li>
					</ul>
					<!-- /footer follow -->

					<!-- footer copyright -->
					<div class="footer-copyright">
						<p>Copyright © 2018. All Rights Reserved. Designed by <a href="#" target="_blank">Cloud</a></p>
					</div>
					<!-- /footer copyright -->

				</div>

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</footer>
	<!-- /Footer -->

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- /Preloader -->

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

</body>

</html>
