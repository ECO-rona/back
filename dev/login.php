<?php include('server.php') ?>
<?php 
  if (!isset($_SESSION['email'])) {
	  $_SESSION['msg'] = "You must log in first";
	  $_SESSION['user_id'] = 'None';
  }
  if (!isset($_SESSION['user_id'])) {
	$_SESSION['user_id'] = "None";
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['email']);
	$_SESSION['user_id'] = 'None';
	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>COVIDHUB</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="stylelogin.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body style="background-color: #004FA8">
<div class="container">
  <header class="row navsector navsectorwhite">
    <div class = "col-3">
        <h1 style="color: white;">E-CORONA</h1>
    </div>
    <div class="col-9">
      <ul class="nav navwhite justify-content-end">
      <li class="nav-item">
        <a class="nav-link active" href="index.php">Main</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="consultation.php">Consultation</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pcr.php">PCR check</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="covid_centers.php">COVID help centers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="schedule.php">Schedule</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Specialists</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="login.php">Sign in</a>
      </li>
      </ul>
    </div>
  </header>
  <section class="mainblock2">
    <div class="row col-5" style="border: 1px solid white;">
      <img src="images/login.jpg" style="margin-left: -15px;">
    </div>
    <div class="row col-6 loginside" >
	<form method="post" action="login.php" class = "login">
        <?php include('errors.php'); ?>
      <h3>Log in</h3>
      <form class = "form">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
          <small id="emailHelp" class="form-text text-muted" style="color: white !important;">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter password" name="password">
		</div>
        <button type="submit" class="btn btn-primary btnwhite" name="login_user">Login</button>
      </form>
      <p class="ltext">Don’t have an account?</p>
      <a href="regist.php" style="color: white;font-size: 18px !important">Register to E-CORONA here</a>
      <p></p>
    </div>
    
  </section>


<footer class="footer fwhite" style="margin-top: 17vh;">
   <div class = "row col-4">
        <div class="icondiv">
          <img src="images/call.svg">
          <h5 style="padding: 10px;">103</h5>
        </div>
        <div class="icondiv" style="margin-right: 2vw;">
          <img src="images/call.svg">
          <h5 style="margin: 10px 0px;">8 702 369 0918</h5>
        </div>
    </div>
    <div class="row col-8" style="display: flex;justify-content: flex-end;">
       <h1>E-CORONA</h1>
    </div>
  </footer>
</div>
</body>
</html>
