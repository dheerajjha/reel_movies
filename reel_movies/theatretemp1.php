<?php
session_start();
?>
<html>
<body>
<?php
$y=$_POST['theatreid'];
$_SESSION['theatre']=$y;
header("Location:cinemamovie.php");
?>
</body>
</html>