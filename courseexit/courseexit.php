<!DOCTYPE html>
<html>
  <head>
  <link rel="icon" href="Wwalczyszyn-Android-Style-Honeycomb-Books.ico" type="image/x-icon"/>
    <title>Course Exit</title>
    <link rel="stylesheet" href="css/normalize.css"> 
        <link rel="stylesheet" href="css/style.css">
    <style>
	.header{
	background-image: url(banner.jpg);
    background-size: cover;
	}
	input[type=number]::-webkit-inner-spin-button, 
    input[type=number]::-webkit-outer-spin-button 
	{ 
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0; 
     }
	</style>  
  </head>

  <body class="header">   
    <div class="form" > 
      <ul class="tab-group">
        <li class="tab active"><a href="#login">Log In</a></li>
        <li class="tab"><a href="#signup">Register</a></li>
	  </ul>    
      <div class="tab-content">
                
				<div id="login">       
          <form action="login_request.php" method="POST">     
            <div class="field-wrap">
            <label>
              Enter UID<span class="req">*</span>
            </label>
            <input type="number" name="s_id" required autocomplete="off"/>
          </div>  
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="password" required autocomplete="off"/>
          </div> 
		  <?php
		  if(!(empty($_GET['invalid'])))
		  {
			  echo"<font color='red'>Invalid username or password</font>";
		  }
		  if(!(empty($_GET['set_id'])))
		  {
			  echo"<font color='red'>Please Login first</font>";
		  }
		  if(!(empty($_GET['invalid_id'])))
		  {
			  if($_GET['invalid_id']=='true')
			  {
				echo"<font color='red'>Invalid UID</font>";
			  }
			  else
			  {
				  		  
		  
			  echo"<font color='green'>Check your mail to access the system.</font>";
		  
			  }

		  }
		  			  if(!empty($_GET['connection_failure']))
			  {
				  echo"<font color='red'>Please check your network connection.</font>";
			  }
		  ?>
          <p class="forgot"><a href="forgotpassword.php">Forgot Password?</a></p> 
          <button type="submit" class="button button-block"/>Log In</button>
          </form>
        </div>
		
		<div id="signup">   
          <h1>Register Here</h1>
          <form action="mail.php" method="POST">  
          <div class="field-wrap">
            <label>
              Enter UID<span class="req">*</span>
            </label>
            <input type="number" name="s_id" required autocomplete="off"/>
          </div>      
          
		          <button class="button button-block"/>Submit</button> 
          </form>
        </div>
		
      </div>
	  <!-- tab-content -->
</div> <!-- /form -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="js/index.js"></script>
  </body>
</html>
