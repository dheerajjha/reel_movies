<html>
<head>
<?php
	session_start();
	$s_id=$_SESSION['user_id'];
	$c_name = $_POST['course_name'];
	//echo $c_name;
	$conn=mysqli_connect("localhost","root","","feedback_system");
	if(mysqli_connect_error())
	{
		echo "Error in connecting to database: ".mysqli_connect_error();
	}
	$sql="Select * from `course` where c_name='$c_name'";
	$result = mysqli_query($conn, $sql);
	$row=mysqli_fetch_assoc($result);
	$c_id=$row['c_id'];
	$sql1="Select * from `course_exit_responses` where c_id=$c_id and s_id=$s_id";
	$result1 = mysqli_query($conn, $sql1);
	$row1=mysqli_fetch_assoc($result1);
	if(mysqli_num_rows($result1)>0)
	{
		if(!empty($row1['a1']) && !empty($row1['a2']) && !empty($row1['a3']) && !empty($row1['a4']) && !empty($row1['a5']) && !empty($row1['a1_exp']) && !empty($row1['a2_exp']) && !empty($row1['a3_exp']) && !empty($row1['a4_exp']) && !empty($row1['a5_exp'] ))
		{
				$sql2="INSERT INTO `course_exit_status`(`s_id`, `c_id`, `status`) VALUES ('$s_id','$c_id','filled')";
				$result2 = mysqli_query($conn, $sql2);
			header('location:acknowledge.html');
		}
		else
		{
			header("location: course_exit.php?invalid=false&c_name=$c_name");
		}

	}
	else
	{
		header("location: course_exit.php?invalid=false&c_name=$c_name");
	}

	
?>
</head>
</html>