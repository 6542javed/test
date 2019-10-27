<?php
session_start();
require "../../require/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Digital library</title>
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
  <script src="../../bootstrap/js/bootstrap.js"></script>
  <script src="../../bootstrap/js/jquery.min.js"></script>
  <script src="../../bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../../styles/style.css">
  <link rel="stylesheet" href="../../styles/dashboard.css">
  <meta charset="utf-8">
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
</head>
<body  data-spy="scroll" data-target=".navbar" data-offset="100">
  <div style="z-index:1; position:fixed; top:0px; left:0px; right:0px;" id="header">
    <div class="logo">
      <img src="../../images/logo.JPG" alt="KC logo" width="100px"></img>
    </div>
    <div class="brand">
      Digital Library of Kaliabor College
    </div>
  </div>
  <div class="containerdiv">
    <div class="menu">
      <ul class="nav">
        <h3 id="menu_category">Personal</h3>
        <li class="nav-item">
          <a class="nav-link active" href="#update_pass" data-toggle="tab">Update Pasword</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#logout" data-toggle="modal">Log Out</a>
        </li>
        <h3 id="menu_category">Library</h3>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#add_member" data-toggle="tab">Add member</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#Update_rem_member" data-toggle="tab">Update/Remove member</a>
      </li>
      <h3 id="menu_category">Upload</h3>
      <li class="nav-item">
        <a class="nav-link" href="#Up_doc" data-toggle="tab">Document</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#Up_audio" data-toggle="tab">Audio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#Up_video" data-toggle="tab">Video</a>
      </li>
      <!-- <li class="nav-item">
      <a class="nav-link" href="#" data-target="#modal" data-toggle="modal">Log Out</a>
    </li> -->
  </ul>
</div>
<div class="content">
  <div class="tab-content">
    <div class="nav-button">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </div>
    <div id="update_pass" class="tab-pane fade in">
      <div class="dashboard">
        <?php
        $admin_id = $_SESSION['user'];
        if(isset($_POST['old']) && isset($_POST['new']) && isset($_POST['confirm']))
        {
          $old=$_POST['old'];
          $new1=$_POST['new'];
          $new2=$_POST['confirm'];
          if($new1==$new2)
          {
            require "../resources/connect.php" ;
            $query1="UPDATE account SET password='$new1' WHERE user_type='0' and id='$admin_id'";
            $connect->query($query1);
            if($connect->connect_error)
            die("Operation failed, Please try after some time.");
            else
            echo '<div class= "alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            Password updated sucessfully
            </div>';
          }
          else {
            echo '<div class= "alert alert-info">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            Passwords don\'t match . Please try again.
            </div>';
          }
        }

        ?>
          <form class="form-horizontal" action="" method="post">
            <h3>Update Admin Password</h3>
            <div class="group">
                <input type="password" id="old" name="old" autocomplete="off" required>
                <label class="label-name" for="old"><span class="content-name">Current Password</span>
            </div>
            <div class="group">
                <input type="password" id="new" name="new" autocomplete="off" required>
                <label class="label-name" for="new"><span class="content-name">New Password</span>
            </div>
            <div class="group">
                <input type="password" id="confirm" name="confirm" autocomplete="off" required>
                <label class="label-name" for="confirm"><span class="content-name">Confirm new Password</span>
            </div>
            <div class="button">
              <button type="submit" class="submit-button">Update</button>
            </div>
          </form>
        </div>
    </div>
    <div id="add_member" class="tab-pane fade in">
      <div class="dashboard">
        <!-- register website -->
        <form class="form-horizontal" action="" method="post">
          <h3>Library Member Registration</h3>
          <div class="group">
              <input id="fname" type="text" name="fname" autocomplete="off" required>
              <label class="label-name" for="new"><span class="content-name">First name</span>
          </div>
          <div class="group">
              <input id="lname" type="text" name="lname" autocomplete="off" required>
              <label class="label-name" for="new"><span class="content-name">Last name</span>
          </div>
          <div class="group">
              <input id="contact" type="tel" name="contact" autocomplete="off" required>
              <label class="label-name" for="new"><span class="content-name">Contact No.</span>
          </div>
          <div class="group">
              <input type="text" name="address" autocomplete="off" required>
              <label class="label-name" for="new"><span class="content-name">Address</span>
          </div>
          <div class="group">
              <input id="password" type="password" name="password" autocomplete="off" required>
              <label class="label-name" for="new"><span class="content-name">Create Password</span>
          </div>
          <div class="group">
              <input id="confirm_password" type="password" name="confirm_password" autocomplete="off" required>
              <label class="label-name" for="new"><span class="content-name">Confirm Password</span>
          </div>
          <div class="button">
              <button class="submit-button" type="submit" name="register">Register</button>
            </div>
          </form>
        </div>
      </div>
      <div id="Update_rem_member" class="tab-pane fade in">
        <div class="dashboard">
            <h3>Update/Remove existing Member</h3>
            <?php
  $query="select id, first_name, last_name, address, contact_no, username from account ";
    if($connect->query($query))
    {
      $result=$connect->query($query);
      $rows=mysqli_num_rows($result);
      if($rows!=0){
        echo '
        <div class="table-responsive">
          <table id="table" class="table table-hover ">
            <thead style="background:#282828; color:white;">
              <th>Id</th>
              <th>Name</th>
              <th>Address</th>
              <th>Contact</th>
              <th>Email</th>
              <th>Update</th>
              <th>Delete</th>
            </thead>
        ';
          while($rows=mysqli_fetch_row($result))
          {
            echo '<tr><td>'.$rows[0].'</td><td>'.$rows[1].' '.$rows[2].'</td><td>'.$rows[3].'</td><td>'.$rows[4].'</td><td>'.$rows[5].'</td><td>'.
            '<form action="" method="POST"><button class="btn btn-default" type="submit" name="update" value="'.$rows[0].'"><font color="blue"><span class="glyphicon glyphicon-edit"></span></font></button></form>'
            .'</td><td>'.
              '<form action="" method="POST"><button class="btn btn-default" type="submit" name="delete" value="'.$rows[0].'"><font color="red"><span class="glyphicon glyphicon-remove"></span></font></button></form>
            </td></tr>';
          }
        echo '</table></div><br/>';
      }
      else
      {
      echo "<h3 align='center' style='color:white'>No Staff Member</h3>";
    }}
    else{
      echo "Error: " .$query. "<br>" . $connect->error;
    }
  $connect->close();
?>
        </div>
      </div>
      <div id="Up_doc" class="tab-pane fade in">
        <div class="col-md-offset-2 col-md- 8">
            Upload_document
        </div>
      </div>
      <div id="Up_audio" class="tab-pane fade in">
        <div class="col-md-offset-2 col-md- 8">
            Upload audio lecture
        </div>
      </div>
      <div id="Up_video" class="tab-pane fade in">
        <div class="dashboard">
              <form class="form-horizontal" method="POST" action="uploading.php" enctype="multipart/form-data">
                <h3>Upload video lecture</h3>
                <div class="group">
                  <input type="text" id="topic" name="topic" autocomplete="off" required>
                  <label  class="label-name" for="topic"><span class="content-name">Topic</span></label>
                </div>
                <div class="group">
                  <input type="text" id="subject" name="subject" autocomplete="off" required>
                  <label class="label-name" for="subject"><span class="content-name">Subject</span></label>
                </div>
                <div class="group">
                  <input type="text" id="speaker" name="speaker" autocomplete="off" required>
                  <label class="label-name" for="speaker"><span class="content-name">Speaker</span></label>
                </div>
                <div class="group">
                  <input type="text" id="Course" name="course" autocomplete="off" required>
                  <label class="label-name" for="Course"><span class="content-name">Course</span></label>
                </div>
                <div class="group">
                  <input type="text" id="Semester" name="semester" autocomplete="off" required>
                  <label class="label-name" for="Semester"><span class="content-name">Semester</span></label>
                </div>
                <div class="file">
                  <input class="file" type="file" id="file" name="file" required>
                </div>
                <div class="button">
                  <button type="submit" class="submit-button" name="media" value="">Upload</button>
                </div>
              </form>
        </div>
      </div>
    </div>

    <!-- Logout -->
    <div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class=" modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
          <div id="logoutstyle" class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <span class="glyphicon glyphicon-remove"></span>
            </button>
            <h4 class="modal-title" id="myModalLabel">
              Log Out
            </h4>
          </div>
          <div class="modal-body">
            <h4>Do you really want to logout?</h4>
          </div>
          <div class="modal-footer"><form action="../../require/logout.php" method="post">
            <button type="button" class="btn btn-default" data-dismiss="modal">No
            </button>
            <button id="logoutstyle" type="submit" name="logout" class="btn btn-default">
              Yes
            </button>
          </form>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->

  </div><!-- /.modal -->

  <!-- <div class="alert alert-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
  Enter a valid email address
</div> -->

</div>
</div>
<script src="../../styles/javascript.js"></script>
</body>
</html>
