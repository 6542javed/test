<?php
require_once("../require/config.php");

$pdfdirectory="../media/pdf/";
$file = $_FILES['file'];
$directorythumb="../media/pdf/thumbs/";
$extension=".pdf";
$filesize = ((int)$file['size']/1024)/1024;

// Check If the file already exists in the server(in the pdf folder)
if(isset($_POST['category']) && isset($_POST['title_book']) && isset($_POST['author']) && isset($_FILES['file']))
{
  //declaring vars
  $category=$_POST['category'];
  $title_book=$_POST['title_book'];
  $author=$_POST['author'];
  $file=$_FILES['file']; //OUTPUT: Array
  $original_filename = $file['name'];//OUTPUT: maths2.pdf
  //$file_type_full = explode('/',$file['type']);//OUTPUT: 1=>application, 2=>pdf

  //explode lol
  //$file_extension = $file_type_full[0];
  //$file_type = $file_type_full[1];

  //extract real file name withour extenstion
  $filename_without_extension = explode('.',$original_filename);//SPLITTED INTO maths2 and pdf
  $filename_without_extension = $filename_without_extension[0];//OUTPUT: maths2

  //generate filename lol
  $str=rand();//OUTPUT: random
  $filename_saved_as = md5($str).'_'.$original_filename; //OUTPUT: random_maths2.pdf

  //function calling lol
   // = return_file_extension($file_type_full);//INSERT: application/pdf OUTPUT:pdf
   // = return_file_type($file_type_full);//INSERT: application/pdf OUTPUT:application

  //$full_file_name = $filename_saved_as.$file_extension; //OUTPUT: random_maths2.pdfpdf

  //one more explode
  $filename_saved_as_without_extension =  explode('.',$filename_saved_as);//SPLIT random_maths2.pdf into two using '.'
  $filename_saved_as_without_extension = $filename_saved_as_without_extension[0]; //OUTPUT: random_maths2

  //extract type(if application or not)
  if(file_exists($pdfdirectory.$filename_saved_as)){
    echo "File already exists";
  }elseif(move_uploaded_file($file['tmp_name'], $pdfdirectory.$filename_saved_as)){
    $insert = "insert into document(type,name,author,saved_as,thumbname) values('$category','$title_book','$author','$filename_saved_as','$filename_without_extension')";
    if($connect->query($insert)){
      echo '<br>file Uploaded succesfully<br>';
      echo '<a href="../users/admin/dashboard.php"><button type="button" class="btn btn-default">Go Back</button></a>';
      //exec('gswin32 -sDEVICE=jpeg -dFirstPage=1 -dLastPage=1 -dNOPAUSE -dJPEGQ=100 -dGraphicsAlphaBits=4 -dTextAlphaBits=4 -g250X350 -r40 -dUseCropBox -dUseTrimBox -sOutputFile='.$directorythumb.$filename_without_extension.'.jpeg ../media/pdf/'.$filename_saved_as_without_extension.'.pdf');
      exec('gswin32 -dSAFER -dBATCH -dNOPAUSE -sDEVICE=jpeg -dTextAlphaBits=4 -dGraphicsAlphaBits=4 -g250x350 -r30 -sOutputFile='.$directorythumb.$filename_without_extension.'.jpeg ../media/pdf/'.$filename_saved_as_without_extension.'.pdf');
    }else{
      echo 'File Name too long, possibly.';
      //echo $connect->error;
    }
  }

  // Check If the file already exists in the server(in the pdf folder)
  // if(!file_exists($pdfdirectory.$name.$extension)){
  //   if(move_uploaded_file($file['tmp_name'] , $pdfdirectory.$name.$extension)){
  //     $insert = "insert into ebook(name,author) values('$name','$author')";
  //     if($connect->query($insert)){
  //       echo 'file Uploaded succesfully';
  //       exec('gswin64 -dSAFER -dBATCH -dNOPAUSE -sDEVICE=jpeg -dTextAlphaBits=4 -dGraphicsAlphaBits=4 -r30 -sOutputFile='.$directorythumb.$name.'.jpeg ../pdf/'.$name.'.pdf');
  //     }
  //     else{
  //       echo "Couldn't establish connection with the server";
  //     }
  //   }
  // }
  // else{
  //   echo "File already exists";
  // }
}else{
  echo 'lol';
}


// function return_file_info($file){
//   //generating FILENAME
//   $str=rand();
//   $filename_saved_as = md5($str);
//
//   //extracting extension lol
//   $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
//   $extension = '.'.strtolower($ext);
//   $file_name
// }
