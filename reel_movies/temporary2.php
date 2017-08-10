<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>
body{
background-image:url("https://images.bewakoof.com/utter/content-rich-movies-9-low-budget-films-that-didnt-receive-the-spotlight.jpg");
background-size:cover;
}
.button{
background-color:00FFFF;
align:center;
font-size:13px;
padding:13px 30px;
color:white;
}
</style>
</head>
<body>
<div class="container">
     <div class="row1">
				<div class="header">
					<figure><img class="img-responsive" src="logo.png" alt="logo" height="150px" width="300px"></figure>
				</div>
	 </div>
     <div class="navbar navbar-inverse" role="navigation">

			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
				</button>
				<span class="visible-xs navbar-brand"><b>Categories</b></span>
			</div>
			<div class="navbar-collapse collapse sidebar-navbar-collapse">
				<ul class="nav navbar-nav">
				                    <li><a href="home.php">Home</a></li>
									<li class="dropdown">
										<a class="dropdown-toggle" data-toggle="dropdown" href="#">Search By
										<span class="caret"></span></a>
										<ul class="dropdown-menu">
										  <li><a href="movies.php">Movies</a></li>
										  <li><a href="theatres.php">Theatres</a></li> 
										</ul>
									 </li>
									 <li><a href="logout_request.php">Logout</a></li>
				</ul>
			</div><!--/.nav-collapse -->
	 </div>
	 <div align="center" style="padding-top:0%;">
<img src="strip3.png" alt="Mountain View" style="width:304px;height:228px;">
<img src="strip2.png" alt="Mountain View" style="width:304px;height:228px;">
<img src="strip4.png" alt="Mountain View" style="width:304px;height:228px;">
<form>
<br><br>
<?php 
session_start();
if(isset($_SESSION['region']))
 {
	 echo"";
 }
else
 {
 header('Location:home.php?set_id=unset');
 }
$conn=mysqli_connect("localhost","root","","online_movies");
	if(mysqli_connect_error())
	{
		echo "Error in connecting to database: ".mysqli_connect_error();
	}
	else{
  $count=0;
  if($_SESSION['id1']!=0)
  $count=$count+1;
  if($_SESSION['id2']!=0)
  $count=$count+1;
  if($_SESSION['id3']!=0)
  $count=$count+1;
  if($_SESSION['id4']!=0)
  $count=$count+1;
  if($_SESSION['id5']!=0)
  $count=$count+1;
  $sql="select * from movies_theatre_time_available where movies_id=$_SESSION[movie] and theatre_id=$_SESSION[theatre] and time_id=$_SESSION[time]";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_assoc($result);
  $final=$row['available_seats']-$count;
  $sql1="update movies_theatre_time_available set available_seats=$final where movies_id=$_SESSION[movie] and theatre_id=$_SESSION[theatre] and time_id=$_SESSION[time]";
  if(mysqli_query($conn,$sql1))
  echo"<h1 style='color:white;'>Payment Successful!!Enjoy the Movie!!thanks for using REEL_Movies!</h1>
       <a href='print.php'><input type='button' value='Print Ticket' id='myButton' class='button'></a>";
  else
  echo"Transaction Failed!!Sorry,Please Try again later";
	}
  ?>
  </div>
  </body>
  </html>