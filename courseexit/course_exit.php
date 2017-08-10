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
      <li><a href="studentdashboard.php">Home</a></li>
    </ul>
	<ul class="nav navbar-nav pull-right">
	<li><a href="logout_request.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
	</ul>
  </div>
</nav>

	
<br><br><br>
<table>
	<?php
	if(!empty($_GET['invalid']))
	{
			echo "<h1 align ='center'><font color='red'>All the fields are mandatory.</font></h1";
	}
?>
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
			header("location: feedbacklogin.php?set_id=true");
		}
			$conn = mysqli_connect();
			$c_name='';
			if(!empty($_GET['c_name']))
			{
				$c_name=$_GET['c_name'];
			}
			else
			{
				header("location: course.php");
			}
			//echo $c_name;
			$conn = mysqli_connect("localhost","root","","feedback_system");
			$sql1 = "Select * from `course` where c_name='$c_name'";
			$result1 = mysqli_query($conn, $sql1);
			$row1 = mysqli_fetch_assoc($result1);
			$c_id = $row1['c_id'];
			$sql = "Select * from course_exit_responses where s_id='$id' and c_id='$c_id'";
			$result = mysqli_query($conn,$sql);
			$row = mysqli_fetch_assoc($result);
			$sql2 = "Select * from `questions` where c_id=$c_id";
			$result2 = mysqli_query($conn, $sql2);
			$row2 = mysqli_fetch_assoc($result2);
			if($row2>0)
			{
			echo"
			<p align='center'><i>Note: On-click of save for each Question, your answer will be recorded. However you can modify it before clicking on the final submit.</i></p>
			<thead><tr>
			<th><center>Question</center></th>
			<th colspan='2'><center>Options</center></th>
			</tr></thead>";
			echo"<td><center>$row2[q1]</center></td>
			<form action='$_SERVER[PHP_SELF]?c_name=$c_name' method='POST'>
			<input type='hidden' value='true' name='o1'>
			<input type='hidden' value=$c_name name='course_name'>
			<td><center><button type='submit' class='btn btn-success' id='Y1'>Yes</center></td>
			</form>
			<form action='$_SERVER[PHP_SELF]?c_name=$c_name' method='POST'>
			<input type='hidden' value='false' name='t1'>
			<input type='hidden' value=$c_name name='course_name'>
			<td><center><button type='submit' class='btn btn-success' id='X1'>No</center></td>
			</form>
			</tr>";
			
			if ($_SERVER["REQUEST_METHOD"] == "POST")
			{
				if(!empty($_POST['o1']))
				{
					$c_name=$_POST['course_name'];
					echo "
					<tr>
					<td colspan='3'><form action='course_exit_Q1.php'  id='f1' method='POST'>
					<input type='hidden' value='$c_name' name='course_name'>
					<input type='hidden' value='Yes' name='response'>";
					if($row['a1']=='Yes' && $row['a1_exp']=='High')
					{
						echo"<input type='radio' name='m1'  value='Low'  required>Low &nbsp;
						<input type='radio' name='m1'  value='Medium' >Medium &nbsp;
						<input type='radio' name='m1' checked=checked value='High' >High &nbsp;<br><br>
						<center><button type='submit' class='btn btn-success' id='Y1'>Save</center>
						</form>
						</td>
						</tr>";
					}
					else if($row['a1']=='Yes' && $row['a1_exp']=='Medium')
					{
						echo"<input type='radio' name='m1'  value='Low'  required>Low &nbsp;
						<input type='radio' name='m1' checked=checked value='Medium' >Medium &nbsp;
						<input type='radio' name='m1' value='High' >High &nbsp;<br><br>
						<center><button type='submit' class='btn btn-success' id='Y1'>Save</center>
						</form>
						</td>
						</tr>";	
					}
					else if($row['a1']=='Yes' && $row['a1_exp']=='Low')
					{
						echo"<input type='radio' name='m1' checked=checked value='Low'  required>Low &nbsp;
						<input type='radio' name='m1' value='Medium' >Medium &nbsp;
						<input type='radio' name='m1' value='High' >High &nbsp;<br><br>
						<center><button type='submit' class='btn btn-success' id='Y1'>Save</center>
						</form>
						</td>
						</tr>";	
					}
					else
					{
						echo"<input type='radio' name='m1'  value='Low'  required>Low &nbsp;
						<input type='radio' name='m1' value='Medium' >Medium &nbsp;
						<input type='radio' name='m1' value='High' >High &nbsp;<br><br>
						<center><button type='submit' class='btn btn-success' id='Y1'>Save</center>
						</form>
						</td>
						</tr>";	
					}
				
				}
				else if(!empty($_POST['t1']))
				{
					echo"<tr>
					<form action='course_exit_Q1.php'  id='f1' method='POST'>
					<input type='hidden' value='$c_name' name='course_name'>
					<input type='hidden' value='No' name='response'>";
					$exp='';
					if($row['a1']=='No')
					{
						$exp=$row['a1_exp'];
					}
					//echo $exp;
					echo"
		<td colspan='3'><textarea rows='3' cols='135'  name='m1' id='11' placeholder='Explanation' required>$exp</textarea><br><br>
		<center><button type='submit' class='btn btn-success' id='X1'>Save</center></td>
		</form>
		</tr>";
				}
			}
			
		echo "<tr>";
			echo"<td><center>$row2[q2]</center></td>
			<form action='$_SERVER[PHP_SELF]?c_name=$c_name' method='POST'>
			<input type='hidden' value='true' name='o2'>
			<input type='hidden' value=$c_name name='course_name'>
			<td><center><button type='submit' class='btn btn-success' id='Y1'>Yes</center></td>
			</form>
			<form action='$_SERVER[PHP_SELF]?c_name=$c_name' method='POST'>
			<input type='hidden' value='false' name='t2'>
			<input type='hidden' value=$c_name name='course_name'>
			<td><center><button type='submit' class='btn btn-success' id='X2'>No</center></td>
			</form>
			</tr>";
			
			if ($_SERVER["REQUEST_METHOD"] == "POST")
			{
				if(!empty($_POST['o2']))
				{
					echo "
					
					<tr>
					
					<td colspan='3'><form action='course_exit_Q2.php'  id='f2' method='POST'>
					<input type='hidden' value='$c_name' name='course_name'>
					<input type='hidden' value='Yes' name='response'>";
					if($row['a2']=='Yes' && $row['a2_exp']=='High')
					{
						echo"<input type='radio' name='m2'  value='Low'  required>Low &nbsp;
						<input type='radio' name='m2'  value='Medium' >Medium &nbsp;
						<input type='radio' name='m2' checked=checked value='High' >High &nbsp;<br><br>
						<center><button type='submit' class='btn btn-success' id='Y1'>Save</center>
						</form>
						</td>
						</tr>";
					}
					else if($row['a2']=='Yes' && $row['a2_exp']=='Medium')
					{
						echo"<input type='radio' name='m2'  value='Low'  required>Low &nbsp;
						<input type='radio' name='m2' checked=checked value='Medium' >Medium &nbsp;
						<input type='radio' name='m2' value='High' >High &nbsp;<br><br>
						<center><button type='submit' class='btn btn-success' id='Y1'>Save</center>
						</form>
						</td>
						</tr>";	
					}
					else if($row['a2']=='Yes' && $row['a2_exp']=='Low')
					{
						echo"<input type='radio' name='m2' checked=checked value='Low'  required>Low &nbsp;
						<input type='radio' name='m2' value='Medium' >Medium &nbsp;
						<input type='radio' name='m2' value='High' >High &nbsp;<br><br>
						<center><button type='submit' class='btn btn-success' id='Y1'>Save</center>
						</form>
						</td>
						</tr>";	
					}
					else
					{
						echo"<input type='radio' name='m2'  value='Low'  required>Low &nbsp;
						<input type='radio' name='m2' value='Medium' >Medium &nbsp;
						<input type='radio' name='m2' value='High' >High &nbsp;<br><br>
						<center><button type='submit' class='btn btn-success' id='Y1'>Save</center>
						</form>
						</td>
						</tr>";	
					}
					
				
				}
				else if(!empty($_POST['t2']))
				{
					echo"<tr >
					<form action='course_exit_Q2.php'  id='f2' method='POST'>
					<input type='hidden' value='$c_name' name='course_name'>
					<input type='hidden' value='No' name='response'>";
					$exp1='';
					if($row['a2']=='No')
					{
						$exp1=$row['a2_exp'];
					}
		echo"<td colspan='3'><textarea rows='3' cols='135' name='m2'  id='11' placeholder='Explanation' required>$exp1</textarea><br><br>
		<center><button type='submit' class='btn btn-success' id='X2'>Save</center></td>
		<form>
		</tr>";
				}
			}
			
			echo "<tr>";
		
			echo"<td><center>$row2[q3]</center></td>
			<form action='$_SERVER[PHP_SELF]?c_name=$c_name' method='POST'>
			<input type='hidden' value='true' name='o3'>
			<input type='hidden' value=$c_name name='course_name'>
			<td><center><button type='submit' class='btn btn-success' id='Y1'>Yes</center></td>
			</form>
			<form action='$_SERVER[PHP_SELF]?c_name=$c_name' method='POST'>
			<input type='hidden' value='false' name='t3'>
			<input type='hidden' value=$c_name name='course_name'>
			<td><center><button type='submit' class='btn btn-success' id='X3'>No</center></td>
			</form>
			</tr>";
			
			if ($_SERVER["REQUEST_METHOD"] == "POST")
			{
				if(!empty($_POST['o3']))
				{
					echo "
					<tr>
					<td colspan='3'><form action='course_exit_Q3.php'  id='f3' method='POST'>
					<input type='hidden' value='$c_name' name='course_name'>
					<input type='hidden' value='Yes' name='response'>";

					if($row['a3']=='Yes' && $row['a3_exp']=='High')
					{
						echo"<input type='radio' name='m3'  value='Low'  required>Low &nbsp;
						<input type='radio' name='m3'  value='Medium' >Medium &nbsp;
						<input type='radio' name='m3' checked=checked value='High' >High &nbsp;<br><br>
						<center><button type='submit' class='btn btn-success' id='Y1'>Save</center>
						</form>
						</td>
						</tr>";
					}
					else if($row['a3']=='Yes' && $row['a3_exp']=='Medium')
					{
						echo"<input type='radio' name='m3'  value='Low'  required>Low &nbsp;
						<input type='radio' name='m3' checked=checked value='Medium' >Medium &nbsp;
						<input type='radio' name='m3' value='High' >High &nbsp;<br><br>
						<center><button type='submit' class='btn btn-success' id='Y1'>Save</center>
						</form>
						</td>
						</tr>";	
					}
					else if($row['a3']=='Yes' && $row['a3_exp']=='Low')
					{
						echo"<input type='radio' name='m3' checked=checked value='Low'  required>Low &nbsp;
						<input type='radio' name='m3' value='Medium' >Medium &nbsp;
						<input type='radio' name='m3' value='High' >High &nbsp;<br><br>
						<center><button type='submit' class='btn btn-success' id='Y1'>Save</center>
						</form>
						</td>
						</tr>";	
					}
					else
					{
						echo"<input type='radio' name='m3'  value='Low'  required>Low &nbsp;
						<input type='radio' name='m3' value='Medium' >Medium &nbsp;
						<input type='radio' name='m3' value='High' >High &nbsp;<br><br>
						<center><button type='submit' class='btn btn-success' id='Y1'>Save</center>
						</form>
						</td>
						</tr>";	
					}
				
				}
				else if(!empty($_POST['t3']))
				{
					echo"<tr >
					<form action='course_exit_Q3.php'  id='f3' method='POST'>
					<input type='hidden' value='$c_name' name='course_name'>
					<input type='hidden' value='No' name='response'>";
					$exp2='';
					if($row['a3']=='No')
					{
						$exp2=$row['a3_exp'];
					}
		echo"<td colspan='3'><textarea rows='3' cols='135' name='m3'  id='11' placeholder='Explanation' required>$exp2</textarea><br><br>
		<center><button type='submit' class='btn btn-success' id='X3'>Save</center></td>
		</form>
		</tr>";
				}
			}
			
			echo "<tr>";
			echo"<td><center>$row2[q4]</center></td>
			<form action='$_SERVER[PHP_SELF]?c_name=$c_name' method='POST'>
			<input type='hidden' value='true' name='o4'>
			<input type='hidden' value=$c_name name='course_name'>
			<td><center><button type='submit' class='btn btn-success' id='Y1'>Yes</center></td>
			</form>
			<form action='$_SERVER[PHP_SELF]?c_name=$c_name' method='POST'>
			<input type='hidden' value='false' name='t4'>
			<input type='hidden' value=$c_name name='course_name'>
			<td><center><button type='submit' class='btn btn-success' id='X4'>No</center></td>
			</form>
			</tr>";
			
			if ($_SERVER["REQUEST_METHOD"] == "POST")
			{
				if(!empty($_POST['o4']))
				{
					echo "
					<tr>
					<td colspan='3'><form action='course_exit_Q4.php'  id='f4' method='POST'>
					<input type='hidden' value='$c_name' name='course_name'>
					<input type='hidden' value='Yes' name='response'>";

					if($row['a4']=='Yes' && $row['a4_exp']=='High')
					{
						echo"<input type='radio' name='m4'  value='Low'  required>Low &nbsp;
						<input type='radio' name='m4'  value='Medium' >Medium &nbsp;
						<input type='radio' name='m4' checked=checked value='High' >High &nbsp;<br><br>
						<center><button type='submit' class='btn btn-success' id='Y1'>Save</center>
						</form>
						</td>
						</tr>";
					}
					else if($row['a4']=='Yes' && $row['a4_exp']=='Medium')
					{
						echo"<input type='radio' name='m4'  value='Low'  required>Low &nbsp;
						<input type='radio' name='m4' checked=checked value='Medium' >Medium &nbsp;
						<input type='radio' name='m4' value='High' >High &nbsp;<br><br>
						<center><button type='submit' class='btn btn-success' id='Y1'>Save</center>
						</form>
						</td>
						</tr>";	
					}
					else if($row['a4']=='Yes' && $row['a4_exp']=='Low')
					{
						echo"<input type='radio' name='m4' checked=checked value='Low'  required>Low &nbsp;
						<input type='radio' name='m4' value='Medium' >Medium &nbsp;
						<input type='radio' name='m4' value='High' >High &nbsp;<br><br>
						<center><button type='submit' class='btn btn-success' id='Y1'>Save</center>
						</form>
						</td>
						</tr>";	
					}
					else
					{
						echo"<input type='radio' name='m4'  value='Low'  required>Low &nbsp;
						<input type='radio' name='m4' value='Medium' >Medium &nbsp;
						<input type='radio' name='m4' value='High' >High &nbsp;<br><br>
						<center><button type='submit' class='btn btn-success' id='Y1'>Save</center>
						</form>
						</td>
						</tr>";	
					}
				
				}
				else if(!empty($_POST['t4']))
				{
					echo"<tr >
					<form action='course_exit_Q4.php'  id='f4' method='POST'>
					<input type='hidden' value='$c_name' name='course_name'>
					<input type='hidden' value='No' name='response'>";
					$exp3='';
					if($row['a4']=='No')
					{
						$exp3=$row['a4_exp'];
					}
		echo"<td colspan='3'><textarea rows='3' cols='135' name='m4'  id='11' placeholder='Explanation' required>$exp3</textarea><br><br>
		<center><button type='submit' class='btn btn-success' id='X4'>Save</center></td>
		</form>
		</tr>";
				}
			}
			
			echo "<tr>";
			echo"<td><center>$row2[q5]</center></td>
			<form action='$_SERVER[PHP_SELF]?c_name=$c_name' method='POST'>
			<input type='hidden' value='true' name='o5'>
			<input type='hidden' value=$c_name name='course_name'>
			<td><center><button type='submit' class='btn btn-success' id='Y1'>Yes</center></td>
			</form>
			<form action='$_SERVER[PHP_SELF]?c_name=$c_name' method='POST'>
			<input type='hidden' value='false' name='t5'>
			<input type='hidden' value=$c_name name='course_name'>
			<td><center><button type='submit' class='btn btn-success' id='X5'>No</center></td>
			</form>
			</tr>";
			
			if ($_SERVER["REQUEST_METHOD"] == "POST")
			{
				if(!empty($_POST['o5']))
				{
					echo "
					<tr>
					<td colspan='3'><form action='course_exit_Q5.php'  id='f5' method='POST'>
					<input type='hidden' value='$c_name' name='course_name'>
					<input type='hidden' value='Yes' name='response'>";

					if($row['a5']=='Yes' && $row['a5_exp']=='High')
					{
						echo"<input type='radio' name='m5'  value='Low'  required>Low &nbsp;
						<input type='radio' name='m5'  value='Medium' >Medium &nbsp;
						<input type='radio' name='m5' checked=checked value='High' >High &nbsp;<br><br>
						<center><button type='submit' class='btn btn-success' id='Y1'>Save</center>
						</form>
						</td>
						</tr>";
					}
					else if($row['a5']=='Yes' && $row['a5_exp']=='Medium')
					{
						echo"<input type='radio' name='m5'  value='Low'  required>Low &nbsp;
						<input type='radio' name='m5' checked=checked value='Medium' >Medium &nbsp;
						<input type='radio' name='m5' value='High' >High &nbsp;<br><br>
						<center><button type='submit' class='btn btn-success' id='Y1'>Save</center>
						</form>
						</td>
						</tr>";	
					}
					else if($row['a5']=='Yes' && $row['a5_exp']=='Low')
					{
						echo"<input type='radio' name='m5' checked=checked value='Low'  required>Low &nbsp;
						<input type='radio' name='m5' value='Medium' >Medium &nbsp;
						<input type='radio' name='m5' value='High' >High &nbsp;<br><br>
						<center><button type='submit' class='btn btn-success' id='Y1'>Save</center>
						</form>
						</td>
						</tr>";	
					}
					else
					{
						echo"<input type='radio' name='m5'  value='Low'  required>Low &nbsp;
						<input type='radio' name='m5' value='Medium' >Medium &nbsp;
						<input type='radio' name='m5' value='High' >High &nbsp;<br><br>
						<center><button type='submit' class='btn btn-success' id='Y1'>Save</center>
						</form>
						</td>
						</tr>";	
					}
				
				}
				else if(!empty($_POST['t5']))
				{
					echo"<tr >
					<form action='course_exit_Q5.php'  id='f5' method='POST'>
					<input type='hidden' value='$c_name' name='course_name'>
					<input type='hidden' value='No' name='response'>";
					$exp4='';
					if($row['a5']=='No')
					{
						$exp4=$row['a5_exp'];
					}
		echo"<td colspan='3'><textarea rows='3' cols='135' name='m5'  id='11' placeholder='Explanation' required>$exp4</textarea><br><br>
		<center><button type='submit' class='btn btn-success' id='X5'>Save</center></td>
		</form>
		</tr>";
				}
			}
		echo"<tr>
		<form action='course_exit_validate.php' method='post'>
		<input type='hidden' name='course_name' value=$c_name>
			<td colspan='3'><center><input type='submit' class='btn btn-success' role='button'></center></td>
		</form>
			</tr>";
		}
		else
		{
			echo "<h1 style='color:green' align='center'><i>Your course-exit form is not ready as yet!!</i></h1>";
		}
		?>
		
	<tbody>
</table>

</body>
</html>	