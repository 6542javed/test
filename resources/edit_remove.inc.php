<?php
  require '../require/head.html';
  ?>
  <style>
    #label{
      /* background: pink;
      padding-left: 5px; */
      /* border-bottom: 2px solid #282828; */
      padding-top: 10px;
      padding-bottom: 10px;
      margin-bottom: 30px;
    }

  </style>
</head>
<body style="background: #eeeeee">
  <div id="header">
  <div class="logo">
    <a href="index.php"><img src="images/logo.png" alt="KC logo" width="100px"></img></a>
  </div>
  <div class="brand">
    Digital Library of Kaliabor College
  </div>
</div>
  <?php
  require '../require/config.php';
  if(isset($_GET['task']) && isset($_GET['id']))
  {
    if(!empty($_GET['id']))
    {
      $task = htmlentities($_GET['task']);
      $id = htmlentities($_GET['id']);
      //for editing member by principal
      if($task=='edit'){
        ?>

      <div style="background: white" class="container">
      <form class="form-horizontal" action="" method="post">
      <h3 id="label">Edit Member Details</h3>
      <div class="form-group">
      <label class="col-md-12 form-label" for="fname">&nbsp;First name</label>
      <div class="col-md-12">
      <input class="form-control" id="fname" type="text" name="fname" required>
      </div>
      </div>
      <div class="form-group">
      <label class="col-md-12 form-label" for="mname">&nbsp;Middle name</label>
        <div class="col-md-12">
      <input class="form-control" id="mname" type="text" name="mname" >
        </div>
      </div>
      <div class="form-group">
      <label class="col-md-12 form-label" for="lname">&nbsp;Last name</label>
        <div class="col-md-12">
      <input class="form-control" id="lname" type="text" name="lname" required>
        </div>
      </div><div class="form-group">
      <label class="col-md-12 form-label" for="studentid">&nbsp;Student ID</label>
        <div class="col-md-12">
      <input class="form-control" id="studentid" type="text" name="studentid" required>
        </div>
      </div><div class="form-group">
      <label class="col-md-12 form-label" for="dept">&nbsp;Department</label>
        <div class="col-md-12">
      <input class="form-control" id="dept" type="text" name="dept" required>
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-12 " >
          <button class="btn btn-primary " type="submit" name="register">UPDATE</button>
        </div>
      </div>
      </form>
      </div>

      <?php
      }
      //for removing a library member by principal
      else if($task=='remove'){
        $remove = "delete from lib_member where id = '$id' ";
        if ($connect->query($remove)==false)
          echo '<div class= "alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
            Some Problem occured. Please try later.
          </div>';
        header("Location: ../principal#Update_rem_member");
      }
    }
  }
?>
</body>
</html>
