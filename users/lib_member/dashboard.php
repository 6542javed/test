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
<body>
  <div id="header">
    <div class="logo">
      <img src="../../images/logo.JPG" alt="KC logo" width="100px"></img>
    </div>
    <div class="brand">
      Digital Library of Kaliabor College
    </div>
  </div>
  <div class="containerdiv">
    <div class="menu">
      <ul class="nav sidebar-nav">
      <h3 id="menu_category">Personal</h3>
      <li class="nav-item">
        <a class="nav-link active" href="#home" data-toggle="tab">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#reset_pass" data-toggle="tab">Reset Pasword</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#logout" data-toggle="modal">Log Out</a>
      </li>
      <h3 id="menu_category">Upload</h3>
      <li class="nav-item">
      <a class="nav-link" href="#Up_doc" data-toggle="tab">Document</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="#media" data-toggle="tab">Media</a>
      </li>
      </ul>
    </div>
    <div class="content">
      <div class="tab-content">
        <div class="nav-button">
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
        </div>
        <div id="home" class="tab-pane fade in active">
          <div class="dashboard">
            <h3>homepage of librarian dashboard</h3>
          </div>
        </div>
        <div id="reset_pass" class="tab-pane fade in">
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
              <h3>Reset Password</h3>
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
                  <label class="label-name" for="confirm"><span class="content-name">Confirm New Password</span>
              </div>
              <div class="button">
                <button type="submit" class="submit-button">Update</button>
              </div>
            </form>
          </div>
        </div>
        <div id="Up_doc" class="tab-pane fade in">
          <h3>upload document</h3>
        </div>
        <div id="media" class="tab-pane fade in">
          <h3>Upload media</h3>
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
    </div>
  </div>
  <script src="../../styles/javascript.js"></script>
</body>
</html>
