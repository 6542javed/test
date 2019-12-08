<?php
require '../require/head.html';
?>
</head>
<body id="upload_paper">
  <div style="z-index: 1; position:fixed; top:0px; left:0px; right:0px;" id="header">
    <div class="logo">
      <img src="../images/logo.JPG" alt="KC Logo" width="100px"></img>
    </div>
    <div class="brand">
      Digital Library of Kaliabor College
    </div>
  </div>
  <div class="container q_paper">
<?php
require_once '../require/config.php';

if(isset($_POST['submit-upload-page-btn'])){
  $subject = htmlentities($_POST['subject']);
  $course = htmlentities()$_POST['course']);
  $year = htmlentities($_POST['year']);
  $c_type = htmlentities($_POST['s1']);
  $class = htmlentities($_POST['s2']);
  $q_id = mt_rand(1000000000, 9999999999);
  $success = 0;
  $failure = 0;
  for($i = 1; $i<20; $i++){
    $name = "qPaper_".$i;
    if(isset($_FILES[$name])){
      $q_no = $_FILES[$name]['tmp_name'];
      $address = '../media/question_papers/'.$year.'_'.$subject.'_'.$q_id.'_'.$i.'.jpg';
      if(move_uploaded_file($q_no , $address )){
          $success++;
        }
        else{
          $failure++;
        }
    }
  }
  $insert= "insert into question_papers(subject, year, c_type, course, class, num_pages, q_id)
            values('$subject','$year','$c_type' ,'$course','$class','$success','$q_id')";
    if($connect->query($insert)){
      echo $success." Media uploaded Successfully and ".$failure." media failed.";
    }
}

?>
