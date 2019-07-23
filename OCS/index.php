<?php include('server.php');?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
    <link rel="stylesheet" href="css/logstyle.css">
</head>

<body>

  <div class="form">
      
    <ul class="tab-group">
      <li class="tab active"><a href="#login">Log In</a></li>
      <li class="tab"><a href="#signup">Sign Up</a></li>
    </ul>
      
    <div class="tab-content">
      <div id="login">   
        <h1>Welcome Back!</h1>
          
        <form action="index.php" method="post">
          
          <div class="field-wrap">
            <label>
              User Name<span class="req">*</span>
            </label>
            <input type="text" name="user_name" required autocomplete="off" />
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="user_pass" required autocomplete="off"/>
          </div>
          
          <button type="submit" name="login" class="button button-block"/>Log In</button>

          <div class="content">
            <!-- notification message -->

            <?php if (isset($_SESSION['failed'])) : ?>
              <div class="success" >
                <h3>
                  <?php
                    echo $_SESSION['failed']; 
                    unset($_SESSION['failed']);
                  ?>
                </h3>
              </div>
            <?php endif ?>

          </div>
          
        </form>

      </div>

      <div id="signup">   
        <h1>Sign Up for Free</h1>
          
        <form action="index.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                User Name<span class="req">*</span>
              </label>
              <input type="text" name="reg_name" required autocomplete="off" />
            </div>
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" name="reg_pass" required autocomplete="off"/>
          </div>
          <div class="field-wrap">
            <label>
              Your Location<span class="req">*</span>
            </label>
            <input type="text" name="location" required autocomplete="off"/>
          </div>
          <div class="field-wrap">
            <label>
              Your Phone<span class="req">*</span>
            </label>
            <input type="text" name="phone" required autocomplete="off"/>
          </div>
          
          <button type="submit" name="reg" class="button button-block"/>Get Started</button>
          
          </form>

        </div>
        

        
      </div><!-- tab-content -->
      
</div> <!-- /form -->

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
