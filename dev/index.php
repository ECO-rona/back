
<!DOCTYPE html>
<html>
<head>
  <title>COVIDHUB</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
  <header class="row navsector">
    <div class = "col-3">
        <h1>E-CORONA</h1>
    </div>
    <div class="col-9">
      <ul class="nav justify-content-end">
      <li class="nav-item">
        <a class="nav-link active" href="index.php">Main</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Consultation</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">PCR check</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">COVID help centers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Schedule</a>
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

  <div class="mainblock">
    <div class="row col-4 sch" >
      <h5>Your schedule</h5>
      <div class="insidesch">
        <div class="mon"><p>Mon<p></div>
        <div class="insidesch2">
          <div style="margin-left: 20px;">
            <p style="font-size: 12px; margin-bottom: -2px">11:00-11:50</p>
            <p style="font-size: 14px;">COVID prophylaxy</p> 
          </div>
          <div style="margin-left: 20px;">
            <p style="font-size: 12px;margin-bottom: -2px">11:00-11:50</p>
            <p style="font-size: 14px;">COVID prophylaxy</p> 
          </div>

        </div>
      </div>
      <div class="insidesch">
        <div class="mon"><p>Tue<p></div>
        <div class="insidesch2">
          <div style="margin-left: 20px;">
            <p style="font-size: 12px;margin-bottom: -2px">11:00-11:50</p>
            <p style="font-size: 14px;">COVID prophylaxy</p> 
          </div>
          <div style="margin-left: 20px;">
            <p style="font-size: 12px;margin-bottom: -2px">11:00-11:50</p>
            <p style="font-size: 14px;">COVID prophylaxy</p> 
          </div>
        </div>
      </div>
      <div><a href="" style="color: white; margin-left: 200px;">Full schedule</a></div>
    </div>
    <div class="row col-4">
      <img src="images/doctor1.jpg">
    </div>
    <div class="row col-4 maintext">
        <h1>Together we can win COVID</h1>
        <p>
          On the website, you can sign up for an online consultation or PCR test, participate in scheduled web meetings with your doctor, watch various video tutorials for post-illness prevention, watch the news, read the blog and ask questions. 
        </p>
        <a class="btn btn-primary" href="#" role="button">Online colsultation</a>
    </div>

  </div>
  <div class="news">
    <div class="row col-12">
      <h1>News</h1>
    </div>
    <div class="newsblocks">
        <div class = "row col-4">
            <img src="images/new1.jpg" width="144px" height="144px">
            <div class="newstext">
            <p style="font-size: 14px; font-weight: 500;">In the North Kazakhstan region 108 cases of coronavirus infection were registered per day</p>
            <p style="font-size: 12px; font-style: italic; font-weight: 300;"> News from www.pkzsk.info/</p>
          </div>
        </div>
        <div class = "row col-4">
            <img src="images/new2.jpg" width="144px" height="144px">
            <div class="newstext">
              <p style="font-size: 14px; font-weight: 500;">When will the coronavirus vaccination take place around the world?...</p>
              <p style="font-size: 12px; font-style: italic; font-weight: 300;"> News from www.pkzsk.info/</p>
          </div>
        </div>
        <div class = "row col-4">
            <img src="images/new3.jpg" width="144px" height="144px">
            <div class="newstext">
              <p style="font-size: 14px; font-weight: 500;">COVID-19 is being transported to the north of Kazakhstan from Russia...</p>
              <p style="font-size: 12px; font-style: italic; font-weight: 300;"> News from www.pkzsk.info/</p>
           </div>
        </div>
    </div>
    <div style="display: flex;justify-content: flex-end;">
    <a class="btn btn-primary" href="#" role="button">Read news</a></div>
  </div>

  <footer class="footer">
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



