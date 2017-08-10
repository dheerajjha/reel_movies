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
$price=0;
$conn=mysqli_connect("localhost","root","","online_movies");
	if(mysqli_connect_error())
	{
		echo "Error in connecting to database: ".mysqli_connect_error();
	}
	else{
$sql="select * from movies where movie_id=$_SESSION[movie]";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$sql1="select * from theatres where theatre_id=$_SESSION[theatre]";
$result1=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_assoc($result1);
$sql2="select * from time where time_id=$_SESSION[time]";
$result2=mysqli_query($conn,$sql2);
$row2=mysqli_fetch_assoc($result2);
echo"Movie: $row[name]<br/>";
echo"Theatre :$row1[name]<br/>";
echo"Show TIme :$row2[name]<br/>";
echo"Seats :";
if($_SESSION['id1']!=0){
echo $_SESSION['id1']."  ";
if($_SESSION['id1']>=1&&$_SESSION['id1']<=20)
	$price=$price+300;
if($_SESSION['id1']>=21&&$_SESSION['id1']<=116)
	$price=$price+180;
if($_SESSION['id1']>=117&&$_SESSION['id1']<=148)
	$price=$price+120;
}
if($_SESSION['id2']!=0){
echo $_SESSION['id2']."  ";
if($_SESSION['id2']>=1&&$_SESSION['id2']<=20)
	$price=$price+300;
if($_SESSION['id2']>=21&&$_SESSION['id2']<=116)
	$price=$price+180;
if($_SESSION['id2']>=117&&$_SESSION['id2']<=148)
	$price=$price+120;
}
if($_SESSION['id3']!=0){
echo $_SESSION['id3']."  ";
if($_SESSION['id3']>=1&&$_SESSION['id3']<=20)
	$price=$price+300;
if($_SESSION['id3']>=21&&$_SESSION['id3']<=116)
	$price=$price+180;
if($_SESSION['id3']>=117&&$_SESSION['id3']<=148)
	$price=$price+120;
}
if($_SESSION['id4']!=0){
echo $_SESSION['id4']."  ";
if($_SESSION['id4']>=1&&$_SESSION['id4']<=20)
	$price=$price+300;
if($_SESSION['id4']>=21&&$_SESSION['id4']<=116)
	$price=$price+180;
if($_SESSION['id4']>=117&&$_SESSION['id4']<=148)
	$price=$price+120;
}
if($_SESSION['id5']!=0){
echo $_SESSION['id5']."  ";
if($_SESSION['id5']>=1&&$_SESSION['id5']<=20)
	$price=$price+300;
if($_SESSION['id5']>=21&&$_SESSION['id5']<=116)
	$price=$price+180;
if($_SESSION['id5']>=117&&$_SESSION['id5']<=148)
	$price=$price+120;
}
echo"<br/>Total :".$price."<br/>";
	}
?>

<button type="button" onclick="location.href='index.php'" class="button">Pay</button>&nbsp;&nbsp;
<button type="button" onclick="location.href='home.php'" class="button">cancel</button>
</form>
</div>
</body>
</html>