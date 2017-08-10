<!DOCTYPE html>
<html >
  <head>
  <link rel="icon" href="../Wwalczyszyn-Android-Style-Honeycomb-Books.ico" type="image/x-icon"/>
    <meta charset="UTF-8">
    <title>Course Exit</title>
    <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
	.button {
    background-color: #13232f; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    font-size: 16px;
	border-radius:8px;
           }
		   
	</style>
  </head>

  <body>
  <?php
  session_start();
  if(isset($_SESSION['user_id']))
  {
	  echo"";
  }
  else
  {
	  header("Location: ../courseexit.php?set_id=invalid");
  }
  ?>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
    </div>
    <ul class="nav navbar-nav">
      <li><a href="../studentdashboard.php">Home</a></li>
    </ul>
	<ul class="nav navbar-nav pull-right">
	<li><a href="../logout_request.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
	</ul>
  </div>
</nav>
    <div class="container">
          <h1 class="heading-primary">Courses</h1>
          <div class="accordion">
            <dl>
              <dt>
                <a href="#accordion1" aria-expanded="false" aria-controls="accordion1" class="accordion-title accordionTitle js-accordionTrigger">System Programming and Compiler Construction</a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion1" aria-hidden="true">
              <br><br>
			  <center><button class="button" onclick="location.href='../course_exit_display.php?c_name=SPCC';">Fill Form</button></center>
			  <br><br>
			  </dd>
              <dt>
                <a href="#accordion2" aria-expanded="false" aria-controls="accordion2" class="accordion-title accordionTitle js-accordionTrigger">
                  Software Engineering</a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion2" aria-hidden="true">
                 <br><br>
			  <center><button class="button" onclick="location.href='../course_exit_display.php?c_name=SE';">Fill Form</button></center>
			  <br><br>
              </dd>
              <dt>
                <a href="#accordion3" aria-expanded="false" aria-controls="accordion3" class="accordion-title accordionTitle js-accordionTrigger">
                  Distributed Databases
                </a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion3" aria-hidden="true">
                <br><br>
			  <center><button class="button" onclick="location.href='../course_exit_display.php?c_name=DDB';">Fill Form</button></center>
			  <br><br>
              </dd>
			                <dt>
                <a href="#accordion1" aria-expanded="false" aria-controls="accordion1" class="accordion-title accordionTitle js-accordionTrigger">Mobile Computing and Communication</a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion1" aria-hidden="true">
                <br><br>
			  <center><button class="button" onclick="location.href='../course_exit_display.php?c_name=MCC';">Fill Form</button></center>
			  <br><br>
              </dd>
			           <dt>
                <a href="#accordion1" aria-expanded="false" aria-controls="accordion1" class="accordion-title accordionTitle js-accordionTrigger">Elective-I</a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion1" aria-hidden="true">
               <br><br>
			  <center><button class="button" onclick="location.href='../course_exit_display.php?c_name=elective';">Fill Form</button></center>
			  <br><br>
              </dd>
			                <dt>
                <a href="#accordion1" aria-expanded="false" aria-controls="accordion1" class="accordion-title accordionTitle js-accordionTrigger">Network Programming Laboratory</a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion1" aria-hidden="true">
               <br><br>
			  <center><button class="button" onclick="location.href='../course_exit_display.php?c_name=NPL';">Fill Form</button></center>
			  <br><br>
              </dd>
            </dl>
          </div>
        </div>
        <script src="js/index.js"></script> 
  </body>
</html>
