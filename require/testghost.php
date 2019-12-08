<?php
$original_filename = 'Megazine ---15-16.pdf'; //OUTPUT: maths2.pdf
//$file_type_full = explode('/',$file['type']);//OUTPUT: 1=>application, 2=>pdf

//explode lol
//$file_extension = $file_type_full[0];
//$file_type = $file_type_full[1];

//extract real file name withour extenstion
$filename_without_extension = explode('.',$original_filename);//SPLITTED INTO maths2 and pdf
$filename_without_extension = $filename_without_extension[0];//OUTPUT: maths2

function clean($string) {
  $string = str_replace(' ', '_', $string); // Replaces all spaces with hyphens.
  $string = preg_replace('/[^A-Za-z0-9\ - ]/', '', $string); // Removes special chars.

  return preg_replace('/_+/', '_', $string); // Replaces multiple hyphens with single one.
  //return $string; // Replaces multiple hyphens with single one.
}

$filename_without_extension = clean($filename_without_extension);

//generate filename lol
$str=rand();//OUTPUT: random
$filename_saved_as = md5($str).'_'.$filename_without_extension.'.pdf'; //OUTPUT: random_maths2.pdf

//function calling lol
 // = return_file_extension($file_type_full);//INSERT: application/pdf OUTPUT:pdf
 // = return_file_type($file_type_full);//INSERT: application/pdf OUTPUT:application

//$full_file_name = $filename_saved_as.$file_extension; //OUTPUT: random_maths2.pdfpdf

//one more explode
$filename_saved_as_without_extension =  explode('.',$filename_saved_as);//SPLIT random_maths2.pdf into two using '.'
echo $filename_saved_as_without_extension = $filename_saved_as_without_extension[0]; //OUTPUT: random_maths2

  //exec('gswin32 -dSAFER -dBATCH -dNOPAUSE -sDEVICE=jpeg -g250x350 -sOutputFile=college5.jpeg college_campus.pdf');
  //echo 'done';
?>
