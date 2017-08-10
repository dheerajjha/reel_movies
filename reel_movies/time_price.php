<html>

<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<style>
.button{
background-color:00FFFF;
align:center;
font-size:17px;
padding:25px 18px;
color:white;
}
.button1{
background-color:red;
align:center;
font-size:17px;
padding:25px 18px;
color:white;
}
body {
background-image:url("https://images.bewakoof.com/utter/content-rich-movies-9-low-budget-films-that-didnt-receive-the-spotlight.jpg")
    
}
</style>

<script>
function myfunc(){
	document.getElementById('demo').innerHTML="Sorry!!The show is Housefull";
	return false;
}
</script>

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
				</ul>
			</div><!--/.nav-collapse -->
	 </div>
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
			if(mysqli_connect_error($conn)){
			    echo"Error in connection ".mysqli_connect_error();
			}
			//and a.theatre_id='{$_SESSION['theatre']'} on a.movies_id=$y and a.time_id=b.time_id 
			else{
				$sql="select * from movie_theatre_time_assoc as a inner join time as b on a.time_id=b.time_id and a.movie_id=$_SESSION[movie] and a.theatre_id=$_SESSION[theatre]";
				$result=mysqli_query($conn,$sql);
				if(mysqli_num_rows($result)>0)
				{echo" <form name='f3' action='temporary.php' method='post'>
					      <input type='hidden' name='timeid'>
					       <table align='center'>
						   <tr>"; 
				while($row=mysqli_fetch_assoc($result))
			{$date=strtotime($row['name']);
		     $xx=date("H:i",$date);
			 $sql1="select * from movies_theatre_time_available where movies_id=$_SESSION[movie] and theatre_id=$_SESSION[theatre] and time_id=$row[time_id]";
			 $result1=mysqli_query($conn,$sql1);
			 if(mysqli_num_rows($result1)>0){
				 while($row2=mysqli_fetch_assoc($result1)){
					 if($row2['available_seats']<=0)
				echo"<td><input type='submit' value='$xx' class='button1' onclick=' return myfunc()'>&nbsp;";
			         else
						 echo"<td><input type='submit' value='$xx' class='button' onclick='document.f3.timeid.value=$row[time_id]'>&nbsp;";
			}
			echo"</td>";
			 }
			}
echo"</tr></table></form> ,<br/><br/>";

				
	echo"<table align='center' style='font-size:25px;'>
		<tr>
			<td><b>Platinum:</b></td>
			<td><b>300Rs</b></td>
		</tr>
		<tr>
		</tr>
		<tr>
			<td><b>Gold:</b></td>
			<td><b>180Rs:</b></td>
		</tr>
		<tr>
		</tr>
		<tr>
			<td><b>Silver:</b></td>
			<td><b>120Rs</b></td>
		</tr>
	</table>";
	 
	 echo"<h3 align='center' id='demo'></h3>";
				}
}		
			?>

  
 

</div>
</body>
</html>
