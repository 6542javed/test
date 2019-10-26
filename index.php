<?php
session_start();
require "require/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Digital library</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <script src="bootstrap/js/bootstrap.js"></script>
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="styles/style.css">
<meta charset="utf-8">
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
</head>
<body  data-spy="scroll" data-target=".navbar" data-offset="100">
<div id="header">
  <div class="logo">
<img src="images/logo.JPG" alt="KC logo" width="100px"></img>
  </div>
  <div class="brand">
Digital Library of Kaliabor College
  </div>
</div>
<!-- The navbar - The <a> elements are used to jump to a section in the scrollable area -->
<nav id="navigation" class="navbar navbar-static-top navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavbar" aria-expanded="true">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <!-- Menu items -->
    <div class="collapse navbar-collapse" id="mainNavbar">
      <ul class="nav navbar-nav">
        <li><a class="scroll" href="#header">E-Books</a></li>
        <li><a class="scroll" href="#collegePubs">College Publications</a></li>
        <li><a class="scroll" href="#localPubs">Local Publications</a></li>
        <li><a class="scroll" href="#audioLectures">Audio Lectures</a></li>
        <li><a class="scroll" href="#videoLectures">Video Lectures</a></li>
        <li><a class="scroll" href="#questionPapers">Question Papers</a></li>
        <li><a class="scroll" href="#aboutUs">About Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php
        if(isset($_SESSION['user']))
        {
        ?>
          <li class="sign_in_out"><a href="require/logout.php"><span class="glyphicon glyphicon-log-out"></span> Sign out</a></li>
        <?php
        }
        else
        { ?>
        <li class="sign_in_out"><a href="#login" data-toggle="modal"><span class="glyphicon glyphicon-log-in"></span> Sign in</a></li>
        <!---<li><a href="resources/registration.php">Register</a></li>--->
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>
<div class="sectioncontainer">
  <div id="ebooks" class="container-fluid">
    <center><h1>E-Books</h1></center>
    <?php
    $query = "select name from ebook limit 6";
    $result=$connect->query($query);
    while($data = mysqli_fetch_row($result)){
    $title = $data[0];
  ?>
    <div style="padding: 0px 10px;" class="col-xs-6 col-sm-4 col-md-2">
      <div class="thumbnail">
        <img src="images/<?php echo $title ?>.jpg" alt="...">
        <div class="caption">
          <h4><?php echo $title; ?></h4>
          <p style="padding:0px 0px;" align="center">
          <a href="media/pdf/<?php echo $title; ?>.pdf" type="application/pdf" target="_blank" class="btn btn-primary" role="button">View PDF</a>
          </p>
        </div>
      </div>
    </div>
  <?php }
     ?>
    <center><a href="resources/ebooks.php" target="_blank" class="view-more" type="button" name="button"><b>VIEW MORE</b></a></center>

  </div>
  <div id="collegePubs" class="container-fluid">
    <center><h1>College Publications</h1></center>
	<?php
    $query = "select name from collegePubs limit 6";
    $result=$connect->query($query);
    while($data = mysqli_fetch_row($result)){
    $title = $data[0];
  ?>
    <div style="padding:0px 10px;" class="col-xs-6 col-sm-4 col-md-2">
      <div class="thumbnail">
        <img src="images/<?php echo $title ?>.jpg" alt="...">
        <div class="caption">
          <h4><?php echo $title; ?></h4>
          <p style="padding:0px 0px;" align="center">
          <a href="media/collegePubs/<?php echo $title; ?>.pdf" type="application/pdf" target="_blank" class="btn btn-primary" role="button">View PDF</a>
          </p>
        </div>
      </div>
    </div>
  <?php }
     ?>
     <div class="view-more-div">
    <center><a href="resources/collegepubs.php" target="_blank" class="view-more" type="button" name="button"><b>VIEW MORE</b></a></center>
     </div>


  </div>



  <div id="localPubs" class="container-fluid">
    <center><h1>Local Publications</h1></center>
	<?php
    $query = "select name from LocalPubs limit 6";
    $result=$connect->query($query);
    while($data = mysqli_fetch_row($result)){
    $title = $data[0];
  ?>
    <div style="padding:0px 10px;" class="col-xs-6 col-sm-4 col-md-2">
      <div class="thumbnail">
        <img src="images/<?php echo $title ?>.jpg" alt="...">
        <div class="caption">
          <h4><?php echo $title; ?></h4>
          <p style="padding:0px 0px;" align="center">
          <a href="media/localPubs/<?php echo $title; ?>.pdf" type="application/pdf" target="_blank" class="btn btn-primary" role="button">View PDF</a>
          </p>
        </div>
      </div>
    </div>
  <?php }
     ?>
     <center><a href="resources/localpubs.php" target="_blank" class="view-more" type="button" name="button"><b>VIEW MORE</b></a></center>

  </div>

  <div id="audioLectures" class="container-fluid">
	<center><h1>Audio Lectures</h1></center>
	<div class="sectionContent">
	  <p class="text-center">Deep Work | Chapter 0 | Cal Newport</p>
	  <audio controls >
		<source src="media/audio/6d7ae8f2bf0150cbafa08970e5675bce.mp3" type="audio/mp3">
	  </audio>
	  <p class="text-center">Deep Work | Chapter 1 | Cal Newport</p>
	  <audio controls >
		<source src="media/audio/f02024893fc77c7f0a80da15ec8d79ea.mp3" type="audio/mp3">
	  </audio>
    </div>
  </div>
  <div id="videoLectures" class="container-fluid">
      <center><h1>Video Lectures</h1></center>
      <div class="sectionContent">
        <?php
        $videos = "select distinct speaker from video";
        $result=$connect->query($videos);
        while($data = mysqli_fetch_row($result)){
        $speaker = $data[0];
        ?>
        <div style="padding:0px 10px; width: auto;" class="col-xs-6 col-sm-4 col-md-2">
          <a href="resources/videos.php?s=<?php echo $speaker; ?>" >
          <img width="150px" src="images/folder.svg" alt="...">
          <p class="text-center">
            <?php echo $speaker; ?>
          </p>
        </a>
        </div>
      <?php } ?>
        </div>
    </div>

  <div id="questionPapers" class="container-fluid">
      <center><h1>Question Papers</h1></center>
      <?php
      $folder = "select distinct subject, year, course, class from question_papers";
      $result=$connect->query($folder);
      ?>
      <table class="table table-responsive">
            <tr id="table_title">
              <th>Subject</th>
              <th>Year</th>
              <th>Course</th>
              <th>Standard</th>
            </tr>
      <?php
      while($data = mysqli_fetch_row($result)){
      $subject = $data[0];
      $year = $data[1];
      $course = $data[2];
      $class = $data[3]
      ?>
          <tr>
            <td><a href="resources/q_papers.php?sub=<?php echo $subject; ?>&year=<?php echo $year;?>&course=<?php echo $course;?>&class=<?php echo $class ?>" target="_blank"><?php echo $subject; ?></a></td>
            <td><?php echo $year; ?></td>
            <td><?php echo $course; ?></td>
            <td><?php echo $class; ?></td>
          </tr>
      <?php } ?>
    </table>
      </div>




  <div id="aboutUs" class="container-fluid">
      <center><h1>About Us</h1></center>
      <div class="sectionContent">

      </div>
  </div>

</div> <!--close tab of the sectionContainer div-->
<!-- login modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

  <div class=" modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          <span class="glyphicon glyphicon-remove"></span>
        </button>
        <h4 class="modal-title" id="myModalLabel">SIGN IN</h4>
      </div>
      <div class="modal-body">
        <form action="require/login.php" method="post">
        <div class="form-group">
          <label class="control-label" for="user">SIGN IN AS:</label>
          <select class="form-control" id="user" type="radio" name="user" required>
            <option value="0" selected>Principal</option>
            <option value="1">Librarian</option>
          </select>
        </div>
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
          <input type="text" name="username" class="form-control" placeholder="Username" aria-describedby="basic-addon1" required>
        </div><br/>
        <div class="input-group">
          <span class=" input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock"></span></span>
          <input type="password" name="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1" required>
        </div>
      </div>
      <div class="modal-footer">
        <center>
          <button type="submit" name="login" class="btn btn-primary">
          Login
          </button>
          <button type="reset" class="btn btn-default">Reset
          </button>
        </center>
      </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->

</div><!-- /.modal -->




<!-- footer area -->
<div id="footer" class="col-md-12" style="padding-top: 70px; min-height: 400px; background:#282828;">
<div class="row">
  <div  class="col-md-4">
<h3>Links</h3>
<ul id="footer_list">
<li><a class="scroll" href="#ebooks">E-Books</a></li>
<li><a class="scroll" href="#collegePubs">College Publications</a></li>
<li><a class="scroll" href="#localPubs">Local Publications</a></li>
<li><a class="scroll" href="#audioLectures">Audio Lectures</a></li>
<li><a class="scroll" href="#videoLectures">Video Lectures</a></li>
<li><a class="scroll" href="#questionPapers">Question Papers</a></li>
<li><a class="scroll" href="#aboutUs">About Us</a></li>
</ul>

  </div>
  <div class="col-md-4">
<h3>Support Us</h3>
  </div>
  <div class="col-md-4">
<h3>Contact Us</h3>
  </div>
</div>
<div class="row">
  <center>
<p style="color:white"><span class="glyphicon glyphicon-copyright-mark"></span> Copyright 2019. Kaliabor College</p>
  </center>
</div>
</div>


<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="styles/javascript.js"></script>
<script src="styles/jquery.js"></script>
</body>
</html>
