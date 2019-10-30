<?php
  require '../require/config.php';
  if(isset($_GET['task']) && isset($_GET['id']))
  {
    if(!empty($_GET['id']))
    {
      $task = $_GET['task'];
      $id = $_GET['id'];
      //for editing member by principal
      if($task=='edit'){
        $edit="Update lib_member set ";
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
        header("Location: ../users/admin/dashboard.php#Update_rem_member");
      }
    }
  }
?>
