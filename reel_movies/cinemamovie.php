<html>
<head>
  <title>Movies List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
	body {
background-image:url("https://images.bewakoof.com/utter/content-rich-movies-9-low-budget-films-that-didnt-receive-the-spotlight.jpg")
    
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
				$sql="select * from theatre_movie_ass as a inner join movies as b on a.theatre_id=$_SESSION[theatre] and a.movie_id=b.movie_id";
				$result=mysqli_query($conn,$sql);
				if(mysqli_num_rows($result)>0)
				{
					echo" <form name='f2' action='movietemp1.php' method='post'>
					      <input type='hidden' name='movieid'>
					       <table align='center'>
	                     "; 
				while($row=mysqli_fetch_assoc($result))
			{echo"<tr>
	        <td colspan='3'><img src='$row[images]' alt='$row[name]' height='500px' width='800px'></img></td>
	       </tr>
		   
	       <tr>
	     <td><b>$row[name]</b>$row[language] $row[certificate]</td>
	     <td></td>
		 <td align='right'><input type='submit' value='Book' class='button' onclick='document.f2.movieid.value=$row[movie_id]' ></td>
	   </tr>";
				 
		 
		 $sql1="select * from movie_theatre_time_assoc mt inner join time t on mt.theatre_id=$_SESSION[theatre] and mt.movie_id=$row[movie_id] and mt.time_id=t.time_id";
		 $result1=mysqli_query($conn,$sql1);
	 if(mysqli_num_rows($result1)>0)
	 { 
		 while($row1=mysqli_fetch_assoc($result1)){
			 $date=strtotime($row1['name']);
			 $sql2="select * from movies_theatre_time_available where movies_id=$row1[movie_id] and theatre_id=$_SESSION[theatre] and time_id=$row1[time_id]";
			 $result2=mysqli_query($conn,$sql2);
			 if(mysqli_num_rows($result2)>0){
				 echo"<tr>";
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
</body>
</html>
