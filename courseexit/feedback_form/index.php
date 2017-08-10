<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Feedback</title>
    
    
    <link rel="stylesheet" href="cssf/normalizef.css">

    
        <link rel="stylesheet" href="cssf/stylef.css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    
  </head>

  <body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="../studentdashboard.php">Home</a></li>
    </ul>
	<ul class="nav navbar-nav pull-right">
	<li><a href="../logout_request.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
	</ul>
  </div>
</nav>
<br><br><br>
<?php
		session_start();
		if(isset($_SESSION['user_id']))
		{
			echo '';
		}
		else
		{
			header("location: feedbacklogin.php?set_id=true");
		}
		if(isset($_GET['id'])){
			$u_id = $_GET['id'];
		}
		else{
			header("location: ../dropdown.php");
		}
	$conn=mysqli_connect("localhost","root","","feedback_system");
	if(mysqli_connect_error())
	{
		echo "Error in connecting to database: ".mysqli_connect_error();
	}
	$sql="Select * from faculty where f_id=$u_id";
	if(mysqli_query($conn,$sql))
	{
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_assoc($result);
		echo"<h1 align='center' style='color:#33cccc'>Feedback For Prof. $row[f_name]</h1>";
	}
echo"
<form action='../feedback_insert.php?id=$u_id' method='POST'>
    <table>
    <thead>
        <tr>
            <th>Parameters</th>
            <th><center>1</center></th>
            <th><center>2</center></th>
            <th><center>3</center></th>
			<th><center>4</center></th>
			<th><center>5</center></th>
        </tr>
    </thead>
    <tbody>
        <tr>
		    <td>Punctuality</td>
            <td><center><input type='radio' name='p1' value='1' required/></center></td>
			<td><center><input type='radio' name='p1' value='2'/></center></td>
			<td><center><input type='radio' name='p1' value='3'/></center></td>
			<td><center><input type='radio' name='p1' value='4'/></center></td>
			<td><center><input type='radio' name='p1' value='5'/></center></td>
           
        </tr>
        
	        <tr>
		    <td>Knowledge</td>
            <td><center><input type='radio' name='p2' value='1' required/></center></td>
			<td><center><input type='radio' name='p2' value='2'/></center></td>
			<td><center><input type='radio' name='p2' value='3'/></center></td>
			<td><center><input type='radio' name='p2' value='4'/></center></td>
			<td><center><input type='radio' name='p2' value='5'/></center></td>
           
            </tr>        
		<tr>
		    <td>Methodology</td>
            <td><center><input type='radio' name='p3' value='1' required/></center></td>
			<td><center><input type='radio' name='p3' value='2'/></center></td>
			<td><center><input type='radio' name='p3' value='3'/></center></td>
			<td><center><input type='radio' name='p3' value='4'/></center></td>
			<td><center><input type='radio' name='p3' value='5'/></center></td>
           
        </tr>        
		<tr>
		    <td>Interest Generated</td>
            <td><center><input type='radio' name='p4' value='1' required/></center></td>
			<td><center><input type='radio' name='p4' value='2'/></center></td>
			<td><center><input type='radio' name='p4' value='3'/></center></td>
			<td><center><input type='radio' name='p4' value='4'/></center></td>
			<td><center><input type='radio' name='p4' value='5'/></center></td>
           
        </tr>
		       <tr>
		    <td>Syllabus Covered</td>
            <td><center><input type='radio' name='p5' value='1' required/></center></td>
			<td><center><input type='radio' name='p5' value='2'/></center></td>
			<td><center><input type='radio' name='p5' value='3'/></center></td>
			<td><center><input type='radio' name='p5' value='4'/></center></td>
			<td><center><input type='radio' name='p5' value='5'/></center></td>
           
        </tr>
		<tr>
		<td colspan='6' align='center'><button type='submit' class='btn btn-success'>Submit</button></td>
		</tr>
    </tbody>
</table>

</form>";
?>   
 <script src="js/index.js"></script>
    
    
    
  </body>
</html>
