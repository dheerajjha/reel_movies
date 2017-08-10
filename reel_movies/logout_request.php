<html>
<head>
<?php
	session_start();
	session_unset();
	session_destroy();
	header('Location: home.php');
?>
</head>
</html>