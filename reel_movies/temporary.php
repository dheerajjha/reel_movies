<?php
session_start();
?>
<html>
<body>
<?php
  $t_id=$_POST['timeid'];
  $_SESSION['time']=$t_id;
  header("Location: reservation.php");
  ?>
  
  </body>
  </html>