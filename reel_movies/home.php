<html>
<head>
<title>Welcome!!</title>
<style>
body{
background-image:linear-gradient(to right,black 0%,white 70%),linear-gradient(to left,black 0%,white 150%),url("bgimg1.jpg");
background-blend-mode:screen;
background-size:cover;
}
.button{
background-color:00FFFF;
align:center;
font-size:13px;
padding:13px 30px;
color:white;
}
</style>
</head>
<body>

<div align="center" style="padding-top:10%;">
<img src="strip3.png" alt="Mountain View" style="width:304px;height:228px;">
<img src="strip2.png" alt="Mountain View" style="width:304px;height:228px;">
<img src="strip4.png" alt="Mountain View" style="width:304px;height:228px;">
<?php
$servername = "localhost";
$username = "root";
$password = "";
if (!empty($_GET["set_id"])){
echo "<font color=red>Your session has expired. Please Start again.</font><br/>";
}
			
$conn = mysqli_connect("localhost","root","","online_movies");
			if(mysqli_connect_error($conn)){
			    echo"Error in connection ".mysqli_connect_error();
			}
			else{
			$sql="select * from location";
			$result=mysqli_query($conn,$sql);
			if(mysqli_num_rows($result)>0)
			{
				echo"<form action='regiontemp.php' method='post'>
                     <table>
	                 <tr>
		             <td style='background-color:00FFFF;color:white;padding:15px 90px;'>Region:</td>
		             <td><select style='background-color:00FFFF;color:white;padding:12px 100px;'  name='region' required>
		    ";
			while($row=mysqli_fetch_assoc($result))
			{
			echo"<option value='$row[location_id]'>$row[name]</option>";
			}
			}
			}
			echo"</td>
                 </tr>
				<tr>
				<td colspan='2' align='center'><input type='submit' value='Submit' class='button'></td>
				</tr>
				</table>
				</form>";
?>	

<img src="strip.png" alt="Mountain View" style="width:304px;height:228px;">

</div>
</body>
</html>