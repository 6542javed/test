<?php
if(isset($_POST['register']))
{
  $name=$_POST['name'];
  $institute=$_POST['institute'];
  $user=$_POST['user'];
  $course=$_POST['course'];
  $semester=$_POST['semester'];
  $email=$_POST['email'];
  $contact=$_POST['contact'];
  $pass=$_POST['password'];
  $c_pass=$_POST['confirm_password'];
  $temp=0;
  if($pass==$c_pass){
    require '../require/config.php';
    if($connect->connect_error){
      die("Connection failed ".$connect->connect_error);
    }
    $query1="select * from account where username='$email'";
    if($connect->query($query1))
    {
      $result=$connect->query($query1);
      $rows=mysqli_num_rows($result);
      if($rows>=1)
      {
        $temp=2;
      }
      else{
        $query2="insert into
        account( name, institution, user_type, course, semester, username, contact_no, password)
        values('$name', '$institute', '$user', '$course', '$semester', '$email', '$contact' , '$pass')";
        if($connect->query($query2))
        {
          $temp=1;
        }
        else{
          $temp=0;
        }
      }

    }
  }
}
?>


<!-- html part -->
<?php require '../require/head.html'; ?>
</head>
<body id="body" style=" min-height: 100vh;">
  <div id="header">
  Digital Library
  </div>
  <br/><?php
  if(isset($_POST['register'])){
    if(@$temp == 1)
    {?>
      <div class="container alert alert-info">
        Your form has been submitted successfully
        Return to <a style="color: red" href="index.php?#login">Homepage</a>
      </div>
    <?php  }
    else if(@$temp==2)
    {?>
      <div class="container alert alert-warning">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        User already exists
      </div>
    <?php  }
    else if(@$temp == 0)
    {?>
      <div class="container alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        Something went wrong. Please try again.
      </div>
    <?php  }
  }
  ?>
  <div class="col-md-offset-2 col-md-8"  >
    <!-- register website -->
    <form id="section" class="form-horizontal" action="" method="post">
      <center><h3 style="background: orange; color:white; padding: 10px 5px;" id="label"> &nbsp; Member Registration</h3></center>
      <div class="form-group">
        <label class="col-sm-2 control-label" for="name">Full Name</label>
        <div class="col-sm-10">
          <input class="form-control" id="name" type="text" name="name" required>
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
  </body>
  </html>
