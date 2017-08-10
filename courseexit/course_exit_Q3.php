<html>
<head>
<?php
	session_start();
	$s_id=$_SESSION['user_id'];
	$c_name = $_POST['course_name'];
	$response = $_POST['response'];
	$m1 = $_POST['m3'];
	echo $c_name;
	echo $response;
	echo $m1;
	$sid=$_SESSION['user_id'];
	$conn=mysqli_connect("localhost","root","","feedback_system");
	if(mysqli_connect_error())
	{
		echo "Error in connecting to database: ".mysqli_connect_error();
	}
	$sql1="Select * from `course` where c_name='$c_name'";
	$result1 = mysqli_query($conn, $sql1);
	$row1=mysqli_fetch_assoc($result1);
	$c_id=$row1['c_id'];
	$sql2="Select * from `course_exit_responses` where s_id=$s_id and c_id=$c_id";
	$result2 = mysqli_query($conn, $sql2);
	if($response=='Yes')
	{
	if(mysqli_num_rows($result2)>0)
	{
			$sql3="Update `course_exit_responses` set a3='$response' where s_id=$s_id and c_id=$c_id";
	$sql4="Update `course_exit_responses` set a3_exp='$m1' where s_id=$s_id and c_id=$c_id";
	if(mysqli_query($conn,$sql3) && mysqli_query($conn,$sql4))
	{
		header("Location: course_exit.php?c_name=$c_name");
	}
	else
	{
		echo "Data Not saved";
	}
	}
	else{
		$sql5="INSERT INTO `course_exit_responses`(`s_id`,`c_id`, `a3`, `a3_exp`) VALUES ('$s_id','$c_id','$response','$m1')";
		if(mysqli_query($conn,$sql5))
	{
		header("Location: course_exit.php?c_name=$c_name");
	}
	else
	{
		echo "Data Not saved";
	}
	}
	}
	else if($response=='No')
	{
		if(mysqli_num_rows($result2)>0)
	{
			$sql3="Update `course_exit_responses` set a3='$response' where s_id=$s_id and c_id=$c_id";
	$sql4="Update `course_exit_responses` set a3_exp='$m1' where s_id=$s_id and c_id=$c_id";
	if(mysqli_query($conn,$sql3) && mysqli_query($conn,$sql4))
	{
		header("Location: course_exit.php?c_name=$c_name");
	}
	else
	{
		echo "Data Not saved";
	}
	}
	else{
		$sql5="INSERT INTO `course_exit_responses`(`s_id`,`c_id`, `a3`, `a3_exp`) VALUES ('$s_id','$c_id','$response','$m1')";
		if(mysqli_query($conn,$sql5))
	{
		header("Location: course_exit.php?c_name=$c_name");
	}
	
	else
	{
		echo "Data Not saved";
	}
	}
	}

	
?>
</head>
</html>