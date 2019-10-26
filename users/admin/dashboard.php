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
  <meta charset="utf-8">
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
</head>
<body  data-spy="scroll" data-target=".navbar" data-offset="100">
  <div style="z-index:1; position:fixed; top:0px; left:0px; right:0px;" id="header">
    <div class="logo">
      <img src="../../images/logo.JPG" alt="KC logo" width="100px"></img>
    </div>
    <div class="brand">
      Digital Library of kaliabor College
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
        <a class="nav-link" href="#add_member" data-toggle="tab">Add new member</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#Update_member" data-toggle="tab">Update member</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#rem_member" data-toggle="tab">Remove member</a>
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
    <div id="update_pass" class="tab-pane fade in">
      <div class="col-md-offset-2 col-md-8"  >
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
        <form class="form-horizontal" role="form" action="" method="post">
          <div><center><h3 id="label">Update Admin Password</h3></center></div>
          <div class="form-group">
            <label for="old" class="col-md-4 control-label">Enter Current Password</label>
            <div class="col-md-8">
              <input type="text" class="form-control" id="old" name="old" placeholder="Current Password" required>
            </div>
          </div>
          <div class="form-group">
            <label for="new" class="col-md-4 control-label">Enter New Password</label>
            <div class="col-md-8">
              <input type="text" class="form-control" id="new" name="new" placeholder="New Password">
            </div>
          </div>
          <div class="form-group">
            <label for="confirm" class="col-md-4 control-label">Confirm New Password</label>
            <div class="col-md-8">
              <input type="text" class="form-control" id="confirm" name="confirm" placeholder="Confirm New Password">
            </div>
          </div>
          <div class="col-md-12">
            <button style="width:20%;" type="submit" class="btn btn-primary center-block">Update</button>
          </div><br/><br/>
        </form>
      </div>
    </div>
    <div id="add_member" class="tab-pane fade in">
      <div class="col-md-offset-2 col-md-8"  >
        <!-- register website -->
        <form id="section" class="form-horizontal" action="" method="post">
          <center><h3 style="background: orange; color:white; padding: 10px 5px;" id="label"> &nbsp; Member Registration</h3></center>
          <div class="form-group">
            <div class="col-sm-4">
              <input class="form-control" id="fname" placeholder="First name" type="text" name="fname" required>
            </div>
            <div class="col-sm-4">
              <input class="form-control" id="mname" placeholder="Middle name" type="text" name="mname" >
            </div>
            <div class="col-sm-4">
              <input class="form-control" id="lname" placeholder="Last name" type="text" name="lname" required>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label" for="gender">Gender</label>
            <div class="col-sm-4">
              <select class="form-control" id="gender" type="radio" name="gender" required>
                <option selected="selected" value="0">-- Select Gender --</option>
                <option value="1">Male(M)</option>
                <option value="2">Female(F)</option>
                <option value="3">Other</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label" for="email">Email ID</label>
            <div class="col-sm-4">
              <input class="form-control" id="email" type="email" name="email" required>
            </div>
            <label class="col-sm-2 control-label" for="contact">Mobile no</label>
            <div class="col-sm-4">
              <input class="form-control" id="contact" type="tel" name="contact" required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="password">Create Password</label>
            <div class="col-sm-4">
              <input class="form-control" id="password" type="password" name="password" required>
            </div>
            <label class="col-sm-2 control-label" for="confirm_password">Confirm Password</label>
            <div class="col-sm-4">
              <input class="form-control" id="confirm_password" type="password" name="confirm_password" required>
            </div>
          </div>
          <div class="form-group">
            <div class=" col-md-12">
              <center><button class="btn btn-primary "  type="submit" name="register">Register</button></center>
            </div></div>
          </form>
        </div>
      </div>
      <div id="Update_member" class="tab-pane fade in">
        Update existing library member
        <div class="col-md-offset-2 col-md- 8">

        </div>
      </div>
      <div id="rem_member" class="tab-pane fade in">
        <div class="col-md-offset-2 col-md- 8">
            Remove existing library member
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
        <div class="col-md-offset-2 col-md- 8">
            Upload video lecture
        </div>
      </div>
    </div>

    <!-- Logout -->
    <div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class=" modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
          <div style="background: red;" class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <span class="glyphicon glyphicon-remove"></span>
            </button>
            <h4 class="modal-title" id="myModalLabel">
              Log Out
            </h4>
          </div>
          <div class="modal-body">
            <h3>Are you sure?</h3>
          </div>
          <div class="modal-footer"><form action="../../require/logout.php" method="post">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel
            </button>
            <button type="submit" name="logout" class="btn btn-warning">
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
</body>
</html>
