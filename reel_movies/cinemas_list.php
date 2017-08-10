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
font-size:20px;
padding:16px 32px;
color:white;
}
</style>
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
     <div align="center">
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
	    $sql="select * from theatre_movie_ass tm inner join theatres t on tm.theatre_id=t.theatre_id and movie_id=$_SESSION[movie] and t.location_id=$_SESSION[region]";
	 $result=mysqli_query($conn,$sql);
	 if(mysqli_num_rows($result)>0)
	 {
		 echo"<form name='f4' action='theatretemp.php' method='post'>
		      <input type='hidden' name='theatreid'>
			  <table>
			  <tr>";
		 while($row=mysqli_fetch_assoc($result)){
			 
		 echo"<input type='submit' value='$row[name]' onclick='document.f4.theatreid.value=$row[theatre_id]' style='font-size:27px;padding:19x 38px;'>";
		 $sql1="select * from movie_theatre_time_assoc mt inner join time t on mt.theatre_id=$row[theatre_id] and mt.movie_id=$_SESSION[movie] and mt.time_id=t.time_id";
		 $result1=mysqli_query($conn,$sql1);
	 if(mysqli_num_rows($result1)>0)
	 { 
		 while($row1=mysqli_fetch_assoc($result1)){
			 $date=strtotime($row1['name']);
			 $sql2="select * from movies_theatre_time_available where movies_id=$_SESSION[movie] and theatre_id=$row[theatre_id] and time_id=$row1[time_id]";
			 $result2=mysqli_query($conn,$sql2);
			 if(mysqli_num_rows($result2)>0){
				 while($row2=mysqli_fetch_assoc($result2)){
					 if($row2['available_seats']<=0)
						 echo"<td style='color:red;'>".date('H:i',$date)."&nbsp;";
					 else
						 echo"<td>".date('H:i',$date)."&nbsp;";
				 }
				 echo"</td><br/>";
			 }
	 
		 }
	 }
		 }
		 echo"</tr></table></form>";
		 echo"<br/><hr/>";
	 }
	}
	?>
	 </div>
</div>
</body>
</html>