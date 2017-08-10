<?php
session_start();
?>
<html>
<head>
<?php
	$s_id = $_POST['s_id'];
	$password = $_POST['password'];
	$_SESSION['user_id']=$s_id;
	$conn=mysqli_connect("localhost","root","","feedback_system");
	if(mysqli_connect_error())
	{
		echo "Error in connecting to database: ".mysqli_connect_error();
	}
	$sql="Select * from student where s_id=$s_id";
	$sql1="Select * from faculty where f_id=$s_id";
	$result = mysqli_query($conn, $sql);
	$result1= mysqli_query($conn, $sql1);
	$row = mysqli_fetch_assoc($result);
	$row1 = mysqli_fetch_assoc($result1);
	if(mysqli_num_rows($result)>0)
	{
		if($row['password']==$password)
		{ 
			header("Location: studentdashboard.php");
		}
		else
		{
			header('Location: courseexit.php?invalid=true');
		}
	}
	else if(mysqli_num_rows($result1)>0)
	{
		if($row1['password']==$password)
		{
			header("Location: teacherdashboard.php");
		}
		else
		{
			header('Location: courseexit.php?invalid=true');
		}
	}
	else
	{
		header('Location: courseexit.php?invalid=true');
	}
	

?>
</head>
</html>
