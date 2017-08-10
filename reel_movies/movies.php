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
			else{
				$sql="select * from movies";
				$result=mysqli_query($conn,$sql);
				if(mysqli_num_rows($result)>0)
				{
					echo" <form name='f2' action='movietemp.php' method='post'>
					      <input type='hidden' name='movieid'>
					       <table align='center'>
	                     "; 
				while($row=mysqli_fetch_assoc($result))
				{
	   
	        echo"<tr>
	        <td colspan='3'><img src='$row[images]' alt='$row[name]' height='500px' width='800px'></a></img></td>
	       </tr>
		   
	       <tr>
	     <td><b>$row[name]</b>$row[language] $row[certificate]</td>
	     <td></td>
		 <td align='right'><input type='submit' value='Book' class='button' onclick='document.f2.movieid.value=$row[movie_id]' ></td>
	   </tr>";
				}
	   echo"</form>
	 </table>";
				}
			}
	   ?>
</div>
</body>
</html>