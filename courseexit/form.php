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
<div>
<?php
	$y1 = date("Y");
	$y2 = $y1%100 + 1;
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
	$s_id=$_GET['id'];
	$sql="select * from course_exit_responses where c_id=$c_id and s_id=$s_id";
	$result = mysqli_query($conn, $sql);
	$row=mysqli_fetch_assoc($result);
	$sql2="select * from course where c_id=$c_id";
	$result2 = mysqli_query($conn, $sql2);
	$row2=mysqli_fetch_assoc($result2);
	$c_name= $row2['c_name'];
	$count=0;
	$sql3="select * from student where s_id=$s_id";
	$result3=mysqli_query($conn,$sql3);
	$row3=mysqli_fetch_assoc($result3);
	$sql4="select * from questions where c_id=$c_id";
	$result4=mysqli_query($conn,$sql4);
	$row4=mysqli_fetch_assoc($result4);
	echo"<h3 align='center'>Name: $row3[s_name]  Id: $s_id</h3><br><br>";
	echo"<img src='spit.jpeg' height='100' width='100' style='float:left'>
<h3 align='center' style='margin:0px'>BHARTIYA VIDYA BHAVAN'S<br>
SARDAR PATEL INSTITUTE OF TECHNOLOGY<br>
MUNSHI NAGAR, ANDHERI(WEST),MUMBAI-400058</h3>
</div>
<h4 align='center'>Academic year: $y1-$y2</h4>
<br><br><br>";
echo"
<div align='center'>
<h4>Question 1: $row4[q1]</h4>
<br>";
if($row['a1_exp']=='High')
{	
	echo"<input type='radio' name='m1'  value='Low'  required>Low &nbsp;
	<input type='radio' name='m1'  value='Medium' >Medium &nbsp;
	<input type='radio' name='m1' checked=checked value='High' >High &nbsp;";
}
else if($row['a1_exp']=='Low')
{	
	echo"<input type='radio' name='m1'  value='Low'  checked=checked required>Low &nbsp;
	<input type='radio' name='m1'  value='Medium' >Medium &nbsp;
	<input type='radio' name='m1' value='High' >High &nbsp;";
}
else
{	
	echo"<input type='radio' name='m1'  value='Low'  required>Low &nbsp;
	<input type='radio' name='m1' checked=checked value='Medium' >Medium &nbsp;
	<input type='radio' name='m1'  value='High' >High &nbsp;";
}
echo"<br>
<br>
<h4>Question 2: $row4[q2]<br></h4><br>";
if($row['a2_exp']=='High')
{	
	echo"<input type='radio' name='m1'  value='Low'  required>Low &nbsp;
	<input type='radio' name='m1'  value='Medium' >Medium &nbsp;
	<input type='radio' name='m1' checked=checked value='High' >High &nbsp;";
}
else if($row['a2_exp']=='Low')
{	
	echo"<input type='radio' name='m1'  value='Low'  checked=checked required>Low &nbsp;
	<input type='radio' name='m1'  value='Medium' >Medium &nbsp;
	<input type='radio' name='m1' value='High' >High &nbsp;";
}
else
{	
	echo"<input type='radio' name='m1'  value='Low'  required>Low &nbsp;
	<input type='radio' name='m1' checked=checked value='Medium' >Medium &nbsp;
	<input type='radio' name='m1'  value='High' >High &nbsp;";
}
echo"<br>
<br>
<h4>Question 3: $row4[q3]</h4>
<br>";
if($row['a3_exp']=='High')
{	
	echo"<input type='radio' name='m1'  value='Low'  required>Low &nbsp;
	<input type='radio' name='m1'  value='Medium' >Medium &nbsp;
	<input type='radio' name='m1' checked=checked value='High' >High &nbsp;";
}
else if($row['a3_exp']=='Low')
{	
	echo"<input type='radio' name='m1'  value='Low'  checked=checked required>Low &nbsp;
	<input type='radio' name='m1'  value='Medium' >Medium &nbsp;
	<input type='radio' name='m1' value='High' >High &nbsp;";
}
else
{	
	echo"<input type='radio' name='m1'  value='Low'  required>Low &nbsp;
	<input type='radio' name='m1' checked=checked value='Medium' >Medium &nbsp;
	<input type='radio' name='m1'  value='High' >High &nbsp;";
}
echo"<br>
<br>
<h4>Question 4: $row4[q4]</h4>
<br>";
if($row['a4_exp']=='High')
{	
	echo"<input type='radio' name='m1'  value='Low'  required>Low &nbsp;
	<input type='radio' name='m1'  value='Medium' >Medium &nbsp;
	<input type='radio' name='m1' checked=checked value='High' >High &nbsp;";
}
else if($row['a4_exp']=='Low')
{	
	echo"<input type='radio' name='m1'  value='Low'  checked=checked required>Low &nbsp;
	<input type='radio' name='m1'  value='Medium' >Medium &nbsp;
	<input type='radio' name='m1' value='High' >High &nbsp;";
}
else
{	
	echo"<input type='radio' name='m1'  value='Low'  required>Low &nbsp;
	<input type='radio' name='m1' checked=checked value='Medium' >Medium &nbsp;
	<input type='radio' name='m1'  value='High' >High &nbsp;";
}
echo"<br>
<br>
<h4>Question 5: $row4[q5]</h4>
<br>";
if($row['a5_exp']=='High')
{	
	echo"<input type='radio' name='m1'  value='Low'  required>Low &nbsp;
	<input type='radio' name='m1'  value='Medium' >Medium &nbsp;
	<input type='radio' name='m1' checked=checked value='High' >High &nbsp;";
}
else if($row['a5_exp']=='Low')
{	
	echo"<input type='radio' name='m1'  value='Low'  checked=checked required>Low &nbsp;
	<input type='radio' name='m1'  value='Medium' >Medium &nbsp;
	<input type='radio' name='m1' value='High' >High &nbsp;";
}
else
{	
	echo"<input type='radio' name='m1'  value='Low'  required>Low &nbsp;
	<input type='radio' name='m1' checked=checked value='Medium' >Medium &nbsp;
	<input type='radio' name='m1'  value='High' >High &nbsp;";
}
echo"<br>
</table>";
	}
	else
	{
		header("Location: courseexit.php?set_id=invalid");
	}
?>


 <script src="js/index.js"></script>
</body>
</html>