

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Signup or Login!</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="C:\wamp\www\online_movies\assets\bootstrap\css\bootstrap.min.css">
        <link rel="stylesheet" href="C:\wamp\www\online_movies\assets\font-awesome\css\font-awesome.min.css">
		<link rel="stylesheet" href="C:\wamp\www\online_movies\assets\css\form-elements.css">
        <link rel="stylesheet" href="C:\wamp\www\online_movies\assets\css\style.css">

        <link rel="shortcut icon" href="C:\wamp\www\online_movies\assets\ico\favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="C:C:\wamp\www\online_movies\assets\ico\apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="C:\wamp\www\online_movies\assets\ico\apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="C:\wamp\www\online_movies\assets\ico\apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="C:\wamp\www\online_movies\assets\ico\apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row">
                                     </div>
                    
                    <div class="row">
                        <div class="col-sm-5">
                        	
                        	<div class="form-box">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Login to our site</h3>
	                            		<p>Enter username and password to log on:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-key"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="login_request.php" method="post" class="login-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form_username">Username</label>
				                        	<input type="username" name="form_username" placeholder="Username..." class="form-username form-control" id="form-username">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form_password">Password</label>
				                        	<input type="password" name="form_password" placeholder="Password..." class="form-password form-control" id="form-password">
				                        </div>
				                        <button type="submit" class="btn">Sign in!</button>
				                    </form>
								<?php
									if (!empty($_GET["invalid"])) {
										echo "<font color=red> Invalid Username or Password </font><br/>";
									}
									if (!empty($_GET["exist"])) {
										echo "<font color=red> Username does not exist</font><br/>";
									}

                                  ?>

			                    </div>
		                    </div>
		                
		                	<div class="social-login">
	                        	<h3>...or login with:</h3>
	                        	<div class="social-login-buttons">
		                        	<a class="btn btn-link-1 btn-link-1-facebook" href="#">
		                        		<i class="fa fa-facebook"></i> Facebook
		                        	</a>
		                        	<a class="btn btn-link-1 btn-link-1-twitter" href="#">
		                        		<i class="fa fa-twitter"></i> Twitter
		                        	</a>
		                        	<a class="btn btn-link-1 btn-link-1-google-plus" href="#">
		                        		<i class="fa fa-google-plus"></i> Google Plus
		                        	</a>
	                        	</div>
	                        </div>
	                        
                        </div>
                        
                        <div class="col-sm-1 middle-border"></div>
                        <div class="col-sm-1"></div>
                        	
                        <div class="col-sm-5">
                        	
                        	<div class="form-box">
                        		<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Sign up now</h3>
	                            		<p>Fill in the form below to get special offers!:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-pencil"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="user_insert.php" method="post" class="registration-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form_first_name">First name</label>
				                        	<input type="text" name="form_firstname" placeholder="First name..." class="form-first-name form-control" id="form-first-name">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form_last_name">Last name</label>
				                        	<input type="text" name="form_lastname" placeholder="Last name..." class="form-last-name form-control" id="form-last-name">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form_email">UserName</label>
				                        	<input type="username" name="username" placeholder="Username..." class="form-email form-control" id="form-username">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form_password">Password</label>
				                        	<input type="password" name="userpassword" placeholder="Password..." class="form-password form-control" id="form-password">
				                        </div>
				                        <button type="submit" class="btn">Sign me up!</button>
				                    </form>
			                    </div>
                        	</div>
                        	
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>

        <!-- Footer -->
        <footer>
        	<div class="container">
        		<div class="row">
        			
        			<div class="col-sm-8 col-sm-offset-2">
        				        			
        		</div>
        	</div>
        </footer>

        <!-- Javascript -->
        <script src="C:\wamp\www\online_movies\assets\js\jquery-1.11.1.min.js"></script>
        <script src="C:\wamp\www\online_movies\assets\bootstrap\js\bootstrap.min.js"></script>
        <script src="C:\wamp\www\online_movies\assets\assets\js\jquery.backstretch.min.js"></script>
        <script src="C:\wamp\www\online_movies\assets\assets\js\scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="C:/Users/John Britto/Desktops/signup/signuploginform/assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>