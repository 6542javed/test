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
  <link rel="stylesheet" href="styles/main.css">
  <meta charset="utf-8">
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
</head>
<body  data-spy="scroll" data-target=".navbar" data-offset="100">
  <div id="header">
    <div class="logo">
      <img src="images/logo.PNG" alt="KC logo" width="100px"></img>
    </div>
    <div class="brand">
      Digital Library of Kaliabor College
    </div>
  </div>
  <!-- The navbar - The <a> elements are used to jump to a section in the scrollable area -->
  <nav id="navigation" class="navbar navbar-static-top navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavbar" aria-expanded="false">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <!-- Menu items -->
      <div class="collapse navbar-collapse" id="mainNavbar">
        <ul class="nav navbar-nav">
          <li><a class="scroll" href="#header">Home</a></li>
          <li><a class="scroll" href="#collegePubs">College Publications</a></li>
          <li><a class="scroll" href="#ebooks">E-Books</a></li>
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
            $user=$_SESSION['table'];
            ?>
            <li class="dashboard_btn_home"><a href="<?php echo ($user == 'admin' )?"principal" : "librarian" ?>">Dashboard</a></li>
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
    <div id="home" class="container-fluid index-home">
        <div class="text">
        <div class="title">
          Digital library<hr>
        </div>
        <div class="description">
          <p>Welcome to the Digital library of Kaliabor College. Here you find the collection of all the Magazines, Books published by our college
             along with some of the Books that are considered neccessary for College Students of every course in E-book format all in one place.
          Moreover, you also get access to some of the Audio, Video lectures and previous year's Question papers that are provided by the Professors and Students of Kaliabor College.</p>
        </div>
      </div>
    </div>
    <div id="collegePubs" class="container-fluid">
      <center><h1>College Publications</h1></center>
      <?php
      $query = "select thumbname, name,saved_as from document where type = 'c' limit 6";
      $result=$connect->query($query);
      while($data = mysqli_fetch_row($result)){
        $title1 = $data[0];
        $title2 = $data[1];
        $title3 = $data[2];

        //LIMITING THE TITLE Name
        $lm_title2 = (strlen($title2) > 19) ? substr($title2,0,16).'...' : $title2;
        ?>
        <div style="padding: 0px 10px;" class="col-xs-6 col-sm-4 col-md-2">
          <div class="thumbnail">
            <img src="media/pdf/thumbs/<?php echo $title1 ?>.jpeg" alt="Book thumbnail image">
            <div class="caption">
              <h4 title="<?php echo $title2 ?>"><?php echo $lm_title2; ?></h4>
              <p style="padding:0px 0px;" align="center">
                <a href="media/pdf/<?php echo $title3; ?>" target="_blank" role="button" class="view-pdf-button">View PDF</a>
              </p>
            </div>
          </div>
        </div>
      <?php } ?>
      <div class="view-more-div">
        <center><a href="books?college" class="view-more" type="button" name="button"><b>VIEW MORE</b></a></center>
      </div>
    </div>

    <div id="ebooks" class="container-fluid">
      <center><h1>E-Books</h1></center>
      <?php
      $query = "select thumbname, name,saved_as from document where type = 'e' limit 6";
      $result=$connect->query($query);
      while($data = mysqli_fetch_row($result)){
        $title1 = $data[0];
        $title2 = $data[1];
        $title3 = $data[2];
        ?>
        <div style="padding: 0px 10px;" class="col-xs-6 col-sm-4 col-md-2">
          <div class="thumbnail">
            <img src="media/pdf/thumbs/<?php echo $title1 ?>.jpeg" alt="...">
            <div class="caption">
              <h4><?php echo $title2; ?></h4>
              <p style="padding:0px 0px;" align="center">
                <a href="media/pdf/<?php echo $title3; ?>" target="_blank" role="button" class="view-pdf-button">View PDF</a>
              </p>
            </div>
          </div>
        </div>
      <?php } ?>
      <div class="view-more-div">
        <center><a href="books?ebooks" class="view-more" type="button" name="button"><b>VIEW MORE</b></a></center>
      </div>
    </div>

    <div id="localPubs" class="container-fluid">
      <center><h1>Local Publications</h1></center>
      <?php
      $query = "select thumbname, name, saved_as from document where type = 'l' limit 6";
      $result=$connect->query($query);
      while($data = mysqli_fetch_row($result)){
        $title1 = $data[0];
        $title2 = $data[1];
        $title3 = $data[2];
        ?>
        <div style="padding: 0px 10px;" class="col-xs-6 col-sm-4 col-md-2">
          <div class="thumbnail">
            <img src="media/pdf/thumbs/<?php echo $title1 ?>.jpeg" alt="...">
            <div class="caption">
              <h4><?php echo $title2; ?></h4>
              <p style="padding:0px 0px;" align="center">
                <a href="media/pdf/<?php echo $title3; ?>" target="_blank" role="button" class="view-pdf-button">View PDF</a>
              </p>
            </div>
          </div>
        </div>
      <?php } ?>
      <div class="view-more-div">
        <center><a href="books?local" class="view-more" type="button" name="button"><b>VIEW MORE</b></a></center>
      </div>

    </div>

    <div id="audioLectures" class="container-fluid">
      <center><h1>Audio Lectures</h1></center>
      <div class="sectionContent">
        <?php
        $audios = "select distinct speaker from media where type='1' limit 6";
        $result=$connect->query($audios);
        while($data = mysqli_fetch_row($result)){
          $speaker = $data[0];
          ?>
          <div style="padding:0px 10px; width: auto;" class="col-xs-6 col-sm-4 col-md-2">
            <a href="audios?s=<?php echo $speaker; ?>" >
              <img width="120px" src="images/folder.svg" alt="...">
              <p class="text-center">
                <?php echo $speaker; ?>
              </p>
            </a>
          </div>
        <?php } ?>
      </div>
      <div class="view-more-div">
        <center><a href="audios?all" class="view-more" type="button" name="button"><b>VIEW MORE</b></a></center>
      </div>
      </div>
        <div id="videoLectures" class="container-fluid">
          <center><h1>Video Lectures</h1></center>
          <div class="sectionContent">
            <?php
            $videos = "select distinct speaker from media where type = '0' limit 6";
            $result=$connect->query($videos);
            while($data = mysqli_fetch_row($result)){
              $speaker = $data[0];
              ?>
              <div style="padding:0px 10px; width: auto;" class="col-xs-6 col-sm-4 col-md-2">
                <a href="videos?s=<?php echo $speaker; ?>" >
                  <img width="120px" src="images/folder.svg" alt="...">
                  <p class="text-center">
                    <?php echo $speaker; ?>
                  </p>
                </a>
              </div>
            <?php } ?>
          </div>
          <div class="view-more-div">
            <center><a href="videos?all" class="view-more" type="button" name="button"><b>VIEW MORE</b></a></center>
          </div>
        </div>

        <div id="questionPapers" class="container-fluid">
          <center><h1>Question Papers</h1></center>
          <?php
          $folder = "select distinct subject, year, course, class, num_pages, q_id from question_papers limit 10 ";
          $result=$connect->query($folder);
          ?>
          <table class="table table-hover table-responsive">
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
              $class = $data[3];
              $num_pages = $data[4];
              $q_id = $data[5];
              ?>
              <tr>
                <td><a href="questionpapers?sub=<?php echo $subject; ?>&year=<?php echo $year;?>&course=<?php echo $course;?>&class=<?php echo $class ?>&num_pages=<?php echo $num_pages; ?>&q_id=<?php echo $q_id; ?>"><?php echo $subject; ?></a></td>
                <td><?php echo $year; ?></td>
                <td><?php echo $course; ?></td>
                <td><?php echo $class; ?></td>
              </tr>
            <?php } ?>
          </table>
          <div class="view-more-div">
            <center><a href="questionpapers?all" class="view-more" type="button" name="button"><b>VIEW MORE</b></a></center>
          </div>
        </div>




        <div id="aboutUs" class="container-fluid">
          <!-- <center><h1>About Us</h1></center> -->
          <div class="sectionContent">
            <div class="about-us-left">
              <div class="container-fluid">
                <h1>About Us</h1>
                <p><i><span id="underline">Designed & Developed by </span></p>
                <span style="color: blue;">Students of BCA 5th Semester(Batch 2019)<br/> Kaliabor College</span><br/><br/>
                <p><span id="underline">Under Guidance of </span></p>
                <span style="color: blue;">Mr. Amit Dutta(HOD) BCA Department<br/> Kaliabor College<br/>
                Mr. Hiranya Kumar Chaliha, Principal<br/> Kaliabor College</span></i>
              </div>

            </div>
            <div class="about-us-right">

            </div>
          </div>
        </div>

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
      <div id="footer" class="col-md-12">
        <div class="footer-top">
          <span>Digital Library of Kaliabor College</span>
          <a href="#" title="Back to Top"><span class="glyphicon glyphicon-arrow-up back-to-top"></span></a>
        </div>
        <div class="row">
          <div class="col-md-offset-2 col-md-8">
            <h3>Links</h3>
            <hr/>
            <ul class="list-inline" id="footer_list">
              <li><a class="scroll" href="#header">Home</a></li>
              <li><a class="scroll" href="#collegePubs">College Publications</a></li>
              <li><a class="scroll" href="#ebooks">E-Books</a></li>
              <li><a class="scroll" href="#localPubs">Local Publications</a></li>
              <li><a class="scroll" href="#audioLectures">Audio Lectures</a></li>
              <li><a class="scroll" href="#videoLectures">Video Lectures</a></li>
              <li><a class="scroll" href="#questionPapers">Question Papers</a></li>
              <li><a class="scroll" href="#aboutUs">About Us</a></li>
            </ul>
          </div>
        </div>
        <div class="row" style="margin-bottom: 20px;">
          <div class="col-md-offset-2 col-md-8">
            <h3>Contact Us</h3><hr width="50%"/>
            <font style="color: grey" ><b>Helpline No:</b> 9876543210<br/>
            <b>Email ID:</b> example@gmail.com</font>
          </div>

        </div>

        <div class="row copyright">
          <center>
            <p><span style="font-size: 0.8em" class="glyphicon glyphicon-copyright-mark"></span> Copyright 2019. Kaliabor College</p>
          </center>
        </div>
      </div>


      <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
      <script src="styles/javascript.js"></script>
      <script src="styles/jquery.js"></script>
      <script src="styles/effects.js"></script>
    </body>
    </html>
