<?php
require_once("../connect.php");
// TODO::EXTRACT FROM DATABASE (FILENAME)

$pdfdirectory="../media/pdf/";
$videodirectory="../media/video/";
$audiodirectory="../media/audio/";
$file = $_FILES['file'];
$directorythumb="../media/pdf/thumbnail/";
$extension=".pdf";
$filesize = ((int)$file['size']/1024)/1024;

//check whether the form is submitted legally
if(isset($_POST['name']) && isset($_POST['author']) && isset($_FILES['file']))
{
  $name=$_POST['name'];
  $author=$_POST['author'];
  $file=$_FILES['file'];

  // Check If the file already exists in the server(in the pdf folder)
  if(!file_exists($pdfdirectory.$name.$extension)){
    if(move_uploaded_file($file['tmp_name'] , $pdfdirectory.$name.$extension)){
      $insert = "insert into ebook(name,author) values('$name','$author')";
      if($connect->query($insert)){
        echo 'file Uploaded succesfully';
        exec('gswin64 -dSAFER -dBATCH -dNOPAUSE -sDEVICE=jpeg -dTextAlphaBits=4 -dGraphicsAlphaBits=4 -r30 -sOutputFile='.$directorythumb.$name.'.jpeg ../pdf/'.$name.'.pdf');
      }
      else{
        echo "Couldn't establish connection with the server";
      }
    }
  }
  else{
    echo "File already exists";
  }
}

else if(isset($_POST['topic']) && isset($_POST['subject']) && isset($_POST['speaker']) && isset($_POST['course']) && isset($_POST['semester']))
{
  $title=$_POST['topic'];
  $subject=$_POST['subject'];
  $speaker=$_POST['speaker'];
  $course=$_POST['course'];
  $semester=$_POST['semester'];
  $media=$_POST['media'];

  //extractig file extension
  $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
  $extension = '.'.strtolower($ext);

  //generating FILENAME
  $str=rand();
  $filename_saved_as = md5($str);

  // if audio
  if($media == 'a' ){
    if(move_uploaded_file($file['tmp_name'] , $audiodirectory.$filename_saved_as.$extension)){
      $insert= "insert into audio(saved_as,title,subject,speaker,course,semester) values('$filename_saved_as','$title','$subject','$speaker','$course','$semester')";
      if($connect->query($insert)){
        echo 'File Uploaded succesfully';
      }
      else{
        echo "Couldn't establish connection with the server";
        echo $filename_saved_as;
      }
    }
  }

  //if video
  else if($media == 'v'){
    if(move_uploaded_file($file['tmp_name'] , $videodirectory.$title.$extension)){
      $insert= "insert into video(saved_as,title,subject,speaker,course, semester) values('$filename_saved_as','$title','$subject','$speaker','$course','$semester')";
      if($connect->query($insert)){
        echo 'File Uploaded succesfully';
      }
      else{
        echo "Couldn't establish connection with the server";

      }
    }
  }
}
?>
<br>
<a href="../index.php">Go To Home</a>
