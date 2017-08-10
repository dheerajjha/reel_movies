<?php
session_start();
?>
<html>
<body>
<?php
  $_SESSION['id1']=$_POST['one'];
  $_SESSION['id2']=$_POST['two'];
  $_SESSION['id3']=$_POST['three'];
  $_SESSION['id4']=$_POST['four'];
  $_SESSION['id5']=$_POST['five'];
  header("Location: signup3.php");
  ?>
  
  </body>
  </html>