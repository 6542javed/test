<?php
require_once("../require/config.php");
session_start();
$pdfdirectory="../media/pdf/";
$videodirectory="../media/video/";
$audiodirectory="../media/audio/";
$file = $_FILES['file'];
$extension=".pdf";

if(isset($_POST['type']) && isset($_POST['topic']) && isset($_POST['subject']) && isset($_POST['speaker']) && isset($_POST['course']) && isset($_POST['semester']))
{
  $type= htmlentities($_POST['type']);
  $title= htmlentities($_POST['topic']);
  $subject= htmlentities($_POST['subject']);
  $speaker= htmlentities($_POST['speaker']);
  $course= htmlentities($_POST['course']);
  $semester= htmlentities($_POST['semester']);
  $file=$_FILES['file'];
  //extractig file extension
  $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
  $extension = '.'.strtolower($ext);

  //generating FILENAME
  $str=rand();
  $filename_saved_as = md5($str);

  // if audio
  if($type == '1' ){
    $directory = $audiodirectory;
  }
  //if video
  else if($type == '0'){
    $directory = $videodirectory;
  }
    if(move_uploaded_file($file['tmp_name'] , $directory.$filename_saved_as.$extension)){
      $insert= "insert into media(saved_as,type,title,subject,speaker,course,semester) values('$filename_saved_as','$type','$title' ,'$subject','$speaker','$course','$semester')";
      if($connect->query($insert)){
        echo "Media Uploaded succefully.";
      }
      else{
        echo "Couldn't establish connection with the server<br/>".$connect->error;
      }
    }else echo $file['tmp_name'];
  }else{
    echo 'lol';
  }
?>
