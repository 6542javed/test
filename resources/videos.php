<?php
require_once '../require/config.php';

//videos for a Speaker
if(isset($_GET['s'])){
  $speaker_name=$_GET['s'];
  $videos = "select saved_as,title from media WHERE speaker='$speaker_name' ";
  $result=$connect->query($videos);
  while($data = mysqli_fetch_row($result)){
    $saved_as = $data[0];
    $title = $data[1];
    echo '<video width="320" height="240" controls>
    <source src="../media/video/'.$saved_as.'" type="video/mp4">
            </source>
          </video>';
    echo '<p>'.$title.'</p>';
}
}
?>
