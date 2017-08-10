<html>
<head>
<?php
 $month = date(m);
 if($month>=7 && $month<=12)
 {
	 header('Location: course_exit/courseexitodd.php');
 }
 else
 {
	 header('Location: course_exit/courseexiteven.php');
 }

?>
</head>
</html>