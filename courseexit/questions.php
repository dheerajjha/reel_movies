<!DOCTYPE html>
<html>
<head>
<title>
Course Exit
</title>
<link rel="icon" href="Wwalczyszyn-Android-Style-Honeycomb-Books.ico" type="image/x-icon"/>
 <link rel="stylesheet" href="cssf/normalizef.css">

    
        <link rel="stylesheet" href="cssf/stylef.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  
 input[type="radio"]{margin-left:200px}; 
</style>
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
<table>
<thead>
	<?php
	if(!empty($_GET['invalid']))
	{
			echo "<h1 align ='center'><font color='red'>All the fields are mandatory.</font></h1";
	}
?>
		<tr>
			<th colspan="3"><center>Questions</center></th>
		</tr>	
	</thead>
	<tbody>
	<tr>
		<?php
		session_start();
		$id='';
		if(isset($_SESSION['user_id']))
		{
			$id=$_SESSION['user_id'];
		}
		else
		{
			header("location: courseexit.php?set_id=true");
		}
		$conn = mysqli_connect();
		//echo $c_name;
		$conn = mysqli_connect("localhost","root","","feedback_system");
		$sql1 = "Select * from `faculty` where f_id=$id";
		$result1 = mysqli_query($conn, $sql1);
		$row1 = mysqli_fetch_assoc($result1);
		$c_id = $row1['c_id'];
		$sql2 = "Select * from `course` where c_id=$c_id";
		$result2 = mysqli_query($conn, $sql2);
		$row2 = mysqli_fetch_assoc($result2);
		$c_name = $row2['c_name'];
		$sql = "Select * from questions where c_id=$c_id";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($result);
		echo "<h1 style='color:#0FC7B3' align='center'>$c_name</h1>";
		if($row>0){
		echo"
		<form action='questions_update.php' method='POST'>
		<input type='hidden' name='c_id' value=$c_id>
		<td colspan='3'><textarea rows='3' cols='135' name='q1' placeholder='Question1' required>$row[q1]</textarea></td><tr>
		<tr><td colspan='3'><textarea rows='3' cols='135' name='q2' placeholder='Question2' required>$row[q2]</textarea></td><tr>
		<tr><td colspan='3'><textarea rows='3' cols='135' name='q3' placeholder='Question3' required>$row[q3]</textarea></td><tr>
		<tr><td colspan='3'><textarea rows='3' cols='135' name='q4' placeholder='Question4' required>$row[q4]</textarea></td><tr>
		<tr><td colspan='3'><textarea rows='3' cols='135' name='q5' placeholder='Question5' required>$row[q5]</textarea></td><tr>
		<tr><td colspan='3' align='center'><button type='submit' class='btn btn-success' id='X5'>Save</center></td></tr>
		</form>";
		}
		else{
		echo"
		<form action='questions_insert.php' method='POST'>
		<input type='hidden' name='c_id' value=$c_id>
		<td colspan='3'><textarea rows='3' cols='135' name='q1' placeholder='Question1' required></textarea></td><tr>
		<tr><td colspan='3'><textarea rows='3' cols='135' name='q2' placeholder='Question2' required></textarea></td><tr>
		<tr><td colspan='3'><textarea rows='3' cols='135' name='q3' placeholder='Question3' required></textarea></td><tr>
		<tr><td colspan='3'><textarea rows='3' cols='135' name='q4' placeholder='Question4' required></textarea></td><tr>
		<tr><td colspan='3'><textarea rows='3' cols='135' name='q5' placeholder='Question5' required></textarea></td><tr><br>
		<tr><td colspan='3' align='center'><button type='submit' class='btn btn-success' id='X5'>Save</center></td></tr>
		</form>";
		}
	?>
	
<tbody>
</table>
</body>
</html>	