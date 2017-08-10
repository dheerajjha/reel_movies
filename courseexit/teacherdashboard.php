<?php
session_start();
?>
<html>
<head>
<link rel="icon" href="Wwalczyszyn-Android-Style-Honeycomb-Books.ico" type="image/x-icon"/>
<title>Course Exit</title>
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
#box{
background-color:#0FC7B3;
width:200px;
height:200px;
border-radius:100px;
position:relative;
left:350px;
top:200px;
padding:5 5 5 5;
text-align:center;
vertical-align:middle;
line-height:200px;
font-size:25px;
font-family:Helvetica;
color:white;
float:left;
}
#box2{
background-color:#0FC7B3;
width:200px;
height:200px;
position:relative;
border-radius:100px;
left:500px;
top:200px;
position:relative;
padding:5 5 5 5;
text-align:center;
vertical-align:middle;
line-height:200px;
font-size:25px;
float:left;
font-family:Helvetica;
color:white;
}
a:link{
text-decoration:none;
}
a {
    color: white;
}
</style>
</head>
<body>
<?php
if(isset($_SESSION['user_id']))
{
echo"
<nav class='navbar navbar-inverse navbar-fixed-top'>
  <div class='container-fluid'>
    <div class='navbar-header'>
	  <a class='navbar-brand' href='#'>DashBoard</a>
    </div>
    <ul class='nav navbar-nav'>
      <li class='active'><a href='#'>Home</a></li>
    </ul>
	<ul class='nav navbar-nav pull-right'>
	<li><a href='questions.php'>Set Questions</a></li>
	<li><a href='logout_request.php'><span class='glyphicon glyphicon-log-out'></span>Logout</a></li>
	</ul>
  </div>
</nav>
<div class='w3-container w3-animate-zoom'id='box'><a href='profile.php' target='_blank'>Moodle</a></div>
<div class='w3-container w3-animate-zoom' id='box2'><a href='course_exit_view.php'>View Course Exit</a>";

}
else
{
	header("Location: courseexit.php?set_id=invalid");
}
?>

</body>
</html>