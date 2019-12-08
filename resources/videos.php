<?php
require '../require/head.html';
?>
<link rel="stylesheet" href="../styles/videos.css">
</head>
<body id="ebookPage">
  <!-- <div class="header">
    <h3>Digital library of Kaliabor College</h3>
  </div> -->
  <div style="z-index: 1; position:fixed; top:0px; left:0px; right:0px;" id="header">
    <div class="logo">
      <img src="../images/logo.JPG" alt="KC Logo" width="100px"></img>
    </div>
    <div class="brand">
      Digital Library of Kaliabor College
    </div>
  </div>
  <div class="container" id="ebooksPageContent">
    <h1 id="underline">Videos</h1>

<?php
require_once '../require/config.php';

//videos for a Speaker
if(isset($_GET['s'])){
  $speaker_name=$_GET['s'];
  $videos = "select saved_as, title, subject, course, semester from media WHERE speaker='$speaker_name' and type='0' ";
  $result=$connect->query($videos);
  while($data = mysqli_fetch_row($result)){
      $saved_as = $data[0];
      $title = $data[1];
      $subject = $data[2];
      $course = $data[3];
      $semester = $data[4];
    ?>
    <div class="containerdiv">
      <div class="col-md-offset-1 col-md-10 media">
        <div class="col-sm-5 col-xs-12">
          <video width="100%" controls>
          <source src="../media/video/<?php echo $saved_as; ?>" type="video/mp4">
          </source>
          </video>
        </div>
        <div class="col-sm-7 col-xs-12 details">
          <table class="table table-borderless" width="100%">
          <tr><td>Title </td><td><?php echo $title; ?></td></tr>
          <tr><td>Subject </td><td><?php echo $subject; ?></td></tr>
          <tr><td>Standard </td><td><?php echo $semester.' semester '.$course; ?></td></tr>
        </table>
        </div>
      </div>
    </div>

<?php
}
}
else if(isset($_GET['all'])){
$videos = "select distinct speaker from media where type = '0' ";
$result=$connect->query($videos);
while($data = mysqli_fetch_row($result)){
  $speaker = $data[0];
  ?>
  <div style="padding:10px 10px; width: auto;" class="col-xs-6 col-sm-4 col-md-2">
    <a href="resources/videos.php?s=<?php echo $speaker; ?>" >
      <img width="120px" src="../images/folder.svg" alt="...">
      <p class="text-center">
        <?php echo $speaker; ?>
      </p>
    </a>
  </div>
  <?php
}
}
?>
</div>
</body>
</html>
