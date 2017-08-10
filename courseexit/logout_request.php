<html>
<head>
<?php
	session_start();
	session_unset();
	session_destroy();
	header("Location: courseexit.php");
?>
</head>
</html>