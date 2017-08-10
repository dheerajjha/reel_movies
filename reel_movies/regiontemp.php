<?php
session_start();
?>
<html>
<body>
<?php

$l_id=$_POST['region'];
$_SESSION['region']=$l_id;
header("Location:mainpage.php");

?>
</body>
</html>