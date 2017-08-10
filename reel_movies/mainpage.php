<html>
<head>
<title>Welcome!!</title>
<style>
body{
background-image:linear-gradient(to right,black 0%,white 150%),linear-gradient(to left,black 0%,white 150%),url("bgimg1.jpg");
background-blend-mode:screen;
background-size:cover;
}
.button{
background-color:00FFFF;
align:center;
font-size:24px;
padding:32px 16px;
color:white;
}
</style>
</head>
<body>
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
				
                echo"<div align='center' style='padding-top:25%;'>
			    <table>
				<form name='f1' action='movies.php'>
         
	<tr>
		<td><input type='submit' value='Movies  ' class='button'></td>
	</tr>	
		</form>
		<form name='f2' action='theatre.php'>
	<tr>
	  <td><input type='submit' value='Theatres' class='button'></td>		
    </tr>
	</form>
</table>
</div>";
			}
?>
</body>
</html>