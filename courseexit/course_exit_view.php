<html>
<head>
<title>Course Exit</title>
<link rel="icon" href="Wwalczyszyn-Android-Style-Honeycomb-Books.ico" type="image/x-icon"/>
<link rel="stylesheet" href="cssf/normalizef.css">

    
        <link rel="stylesheet" href="cssf/stylef.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="teacherdashboard.php">Home</a></li>
    </ul>
	<ul class="nav navbar-nav pull-right">
	<li><a href="logout_request.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
	</ul>
  </div>
</nav>
<br><br><br>
<style>
table
{
    table-layout: fixed;
	width:90%;
}
thead{
	width:17%;
}

th{
	width:17%;
}

td
{
    width:17%;
	word-wrap:break-word;
}
</style>

<?php
	session_start();
	if(isset($_SESSION['user_id']))
	{
	$conn=mysqli_connect("localhost","root","","feedback_system");
	if(mysqli_connect_error())
	{
		echo "Error in connecting to database: ".mysqli_connect_error();
	}
	$sql1="select c_id from faculty where f_id='".$_SESSION['user_id']."'";
	$result1=mysqli_query($conn,$sql1);
	$row=mysqli_fetch_assoc($result1);
	$c_id= $row['c_id'];
	$sql="select * from course_exit_responses where c_id=$c_id";
	$result = mysqli_query($conn, $sql);
	$sql2="select * from course where c_id=$c_id";
	$result2 = mysqli_query($conn, $sql2);
	$row2=mysqli_fetch_assoc($result2);
	$c_name= $row2['c_name'];
	$count=0;
	if (mysqli_num_rows($result)>0)
	{ echo "<h1 style='color:#0FC7B3' align='center'>{$c_name}</h1>";
		echo"
		<table>
			<thead>
				<tr>
					<th style='width:10%'><center>Student Id.</center></th>
					<th><center>Question 1</center></th>
					<th><center>Question 2</center></th>
					<th><center>Question 3</center></th>
					<th><center>Question 4</center></th>
					<th><center>Question 5</center></th>
				</tr>
			</thead>";
		$i=0;
		while($row = mysqli_fetch_assoc($result)) 
		{  
				$count=$count+1;
				echo "<tbody>";
				if($i%2==0){
				echo "<tr class='even'>";}
				else{
					echo "<tr class='odd'>";
				}
				echo "
						<td style='width:10%'><center><a href='form.php?id=$row[s_id]' target='_blank'>$row[s_id]</a></center></td>
						<td><center>$row[a1]<br>$row[a1_exp]</center></td>
						<td><center>$row[a2]<br>$row[a2_exp]</center></td>
						<td><center>$row[a3]<br>$row[a3_exp]</center></td>
						<td><center>$row[a4]<br>$row[a4_exp]</center></td>
						<td><center>$row[a5]<br>$row[a5_exp]</center></td>
					</tr>";
		
				$i++;
				
	        }
		if($i%2==0)
		{
		echo "<tr class='even'>";
		}
		else
		{
			echo "<tr class='odd'>";
		}
		echo"
		</tr>	
		</tbody>
		</table>";
		 
	}
	else
	{
		echo "<h1 style='color:#0FC7B3' align='center'>No Data to Display</h1>";
	}
	}
	else
	{
		header("Location: courseexit.php?set_id=invalid");
	}
?>


 <script src="js/index.js"></script>
</body>
</html>