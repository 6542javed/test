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
  <!-- <link rel="stylesheet" href="../../styles/main.css"> -->
  <link rel="stylesheet" href="../../styles/dashboard.css">
  <meta charset="utf-8">
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script>
    $(document).ready(function() {
        if (location.hash) {
            $("a[href='" + location.hash + "']").tab("show");
        }
        $(document.body).on("click", "a[data-toggle='tab']", function(event) {
            location.hash = this.getAttribute("href");
        });
    });
    $(window).on("popstate", function() {
        var anchor = location.hash || $("a[data-toggle='tab']").first().attr("href");
        $("a[href='" + anchor + "']").tab("show");
    });
  </script>
</head>
<body>
  <div id="header">
    <div class="logo">
      <a href="../../index.php"><img src="../../images/logo.JPG" alt="KC logo" width="100px"></img></a>
    </div>
    <div class="brand">
      Digital Library of Kaliabor College
    </div>
  </div>
  <div class="containerdiv">
    <div class="menu">
      <ul class="nav">
        <h3 id="menu_category">DASHBOARD</h3>
        <li class="nav-item">
          <a class="nav-link active" href="#home" data-toggle="tab">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="../../index.php">Visit Site</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#reset_pass" data-toggle="tab">Reset Pasword</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#logout" data-toggle="modal">Log Out</a>
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
        <a class="nav-link" href="#media" data-toggle="tab">Media</a>
      </li>
      <!-- <li class="nav-item">
      <a class="nav-link" href="#" data-target="#modal" data-toggle="modal">Log Out</a>
    </li> -->
  </ul>
</div>
  <div class="tab-content">
    <div class="nav-button">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </div>
    <div id="home" class="tab-pane active fade in">
      <div class="dashboard">
		<div class="boxcontainer">
        <div class="box">
          Ebooks<br/>
          <div class="count">
            <?php
            $query = "select * from document where type= 'e'";
            if($connect->query($query)){
              $result=$connect->query($query);
              $rows=mysqli_num_rows($result);
              echo $rows;
            } ?>
          </div>

        </div>
        <div class="box">
          College Publishing<br/>
          <div class="count">
            <?php
            $query = "select * from document where type= 'c'";
            if($connect->query($query)){
              $result=$connect->query($query);
              $rows=mysqli_num_rows($result);
              echo $rows;
            } ?>
          </div>
        </div>
        <div class="box">
          Local Publishing<br/>
          <div class="count">
            <?php
            $query = "select * from document where type= 'l'";
            if($connect->query($query)){
              $result=$connect->query($query);
              $rows=mysqli_num_rows($result);
              echo $rows;
            } ?>
          </div>
        </div>
        <div class="box">
          Audios<br/>
          <div class="count">
            <?php
            $query = "select * from media where type= '1'";
            if($connect->query($query)){
              $result=$connect->query($query);
              $rows=mysqli_num_rows($result);
              echo $rows;
            } ?>
          </div>
        </div>
        <div class="box">
          Videos<br/>
          <div class="count">
            <?php
            $query = "select * from media where type= '0'";
            if($connect->query($query)){
              $result=$connect->query($query);
              $rows=mysqli_num_rows($result);
              echo $rows;
            } ?>
          </div>
        </div>
        <div class="box">
          Question Papers<br/>
          <div class="count">
            <?php
            $query = "select * from question_papers ";
            if($connect->query($query)){
              $result=$connect->query($query);
              $rows=mysqli_num_rows($result);
              echo $rows;
            } ?>
          </div>

        </div>
		</div>
      </div>
    </div>
    <div id="reset_pass" class="tab-pane fade in">
      <div class="dashboard">
        <?php
        $admin_id = $_SESSION['user'];
        if(isset($_POST['old']) && isset($_POST['new']) && isset($_POST['confirm']))
        {
          $old= htmlentities($_POST['old']);
          $new1= htmlentities($_POST['new']);
          $new2= htmlentities($_POST['confirm']);
          if($new1 == $new2)
          {
            require_once "../../require/config.php" ;
            $query = "select username from admin where id = '$admin_id' and password = '$old'";
            $result = $connect->query($query);
            if($connect->connect_error){
            die("Operation Failed, Please try after some time.");
            }
            else{
              $rows=mysqli_num_rows($result);
              if($rows == 0){
              echo '<div class= "alert alert-warning">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
              Authentication Failed. Please type in correct password.
              </div>';
              }
              else{
                if($old == $new1){
                  echo '<div class= "alert alert-warning">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  New password cannot be same as old password. Please use another password.
                  </div>';
                }
                else{
                $query1="UPDATE admin SET password='$new1' WHERE id='$admin_id' and password = '$old'";
                $connect->query($query1);
                if($connect->connect_error)
                  die("Operation failed, Please try after some time.");
                else
                echo '<script>
                  alert("Password Updated Successfully.");
                  </script>';
                    }
                  }
                }
              }
          else{
            echo '<script>
            alert("Passwords don\'t match . Please try again.");
            </script>';
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
    <div id="add_member" class="tab-pane fade in">
      <div class="dashboard">
        <?php
        if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['contact']) && isset($_POST['address'])
          && isset($_POST['user_id']) && isset($_POST['password']))
          {
            $fname = htmlentities($_POST['fname']);
            $lname = htmlentities($_POST['lname']);
            $contact = htmlentities($_POST['contact']);
            $addr = htmlentities($_POST['address']);
            $user_id = htmlentities($_POST['user_id']);
            $pass = htmlentities($_POST['password']);
            require_once "../../require/config.php";
            $register = "insert into lib_member(first_name, last_name, contact_no, address, username, password)
            values('$fname', '$lname', '$addr', '$contact', '$user_id', '$pass')";
            if($connect->query($register))
            {
              echo '<script>
              alert("Registration Successful.");
              </script>';
            }
            else{
              echo '<script>
              alert("Error: Registration Failed. Please try again.");
              </script>';
            }

          }
        ?>
        <!-- register section -->
        <form class="form-horizontal" action="" method="post">
          <h3>Library Member Registration</h3>
          <div class="group">
              <input id="fname" type="text" name="fname" autocomplete="off" required>
              <label class="label-name" for="fname"><span class="content-name">First name</span>
          </div>
          <div class="group">
              <input id="lname" type="text" name="lname" autocomplete="off" required>
              <label class="label-name" for="lname"><span class="content-name">Last name</span>
          </div>
          <div class="group">
              <input id="contact" type="tel" name="contact" autocomplete="off" required>
              <label class="label-name" for="contact"><span class="content-name">Contact No.</span>
          </div>
          <div class="group">
              <input id="address" type="text" name="address" autocomplete="off" required>
              <label class="label-name" for="address"><span class="content-name">Address</span>
          </div>
          <div class="group">
              <input type="text" name="user_id" autocomplete="off" required>
              <label class="label-name" for="user_id"><span class="content-name">User ID</span>
          </div>
          <div class="group">
              <input id="password" type="password" name="password" autocomplete="off" required>
              <label class="label-name" for="password"><span class="content-name">Create Password</span>
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
  $query="select id, first_name, last_name, contact_no, address, username, password from lib_member ";
    if($connect->query($query))
    {
      $result=$connect->query($query);
      $rows=mysqli_num_rows($result);
      if($rows!=0){
        ?>
        <div class="table-responsive">
        <table class="table table-striped table-bordered">
        <?php
          while($rows=mysqli_fetch_row($result))
          {
            ?>
            <tr>
              <td rowspan=5><?php echo $rows[0]; ?></td>
              <td>Name</td>
              <td><?php echo $rows[1]." ".$rows[2] ?></td>
              <td rowspan="5">
                <ul class="list-inline member_option">
                    <li><a href="../../resources/edit_remove.inc.php?task=edit&id=<?php echo $rows[0]; ?>" type="button" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></a></li><br/><br/>
                    <li><a href="../../resources/edit_remove.inc.php?task=remove&id=<?php echo $rows[0]; ?>" type="buttton" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a></li>
                </ul>
              </td>
            </tr>
            <tr>
              <td></td>
              <td><?php echo $rows[3]; ?></td>
            </tr>
            <tr>
              <td></td>
              <td><?php echo $rows[4]; ?></td>
            </tr>
            <tr>
              <td></td>
              <td><?php echo $rows[5]; ?></td>
            </tr>
            <tr>
              <td></td>
              <td><?php echo $rows[6]; ?></td>
            </tr>
            <?php
          }
        ?>
        </table>
        </div>
        <?php
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
        <div class="dashboard">
            <form class="form-horizontal" method="POST" action="../../resources/dashuploading.php" enctype="multipart/form-data">
              <h3>Upload document</h3>
              <div class="container-fluid">
                <div class="form-group">
                  <select class="form-control" id="category" type="radio" name="category" required>
                      <option value="e" selected>Ebook</option>
                    	<option value="c">College Publication</option>
                    	<option value="l">Local Publication</option>
                    	<option value="p">Paid Publication</option>
                  </select>
                </div>
              </div>
              <div class="group">
                <input type="text" id="name" name="title_book" autocomplete="off" required>
                <label class="label-name" for="name"><span class="content-name">Title</span></label>
              </div>
              <div class="group">
                <input type="text" id="author" name="author" autocomplete="off" required>
                <label class="label-name" for="author"><span class="content-name">Author</span></label>
              </div>
              <div class="file">
                <input type="file" id="file" name="file" required>
              </div>
              <div class="button">
                <button type="submit" class="submit-button" name="upload_pdf_button">Upload</button>
              </div>
            </form>
        </div>
      </div>

      <div id="media" class="tab-pane fade in">
        <div class="dashboard">
              <form class="form-horizontal" method="POST" action="../../resources/uploading.php" enctype="multipart/form-data">
                <h3>Upload Media</h3>
				        <div class="container-fluid">
                  <div class="form-group">
                    <select class="form-control" id="type" type="radio" name="type" required>
                      <option value="0" selected>Video</option>
                      <option value="1">Audio</option>
                    </select>
                  </div>
                </div>
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
                  <input type="file" id="file" name="file" required>
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
<script src="../../styles/javascript.js"></script>
<script src="../../styles/jquery.js"></script>
</body>
</html>
