<?php
require '../require/head.html';
?>
<link rel="stylesheet" href="../styles/audios.css">
</head>
<body>
  <div class="header">
    <h3>Digital library of Kaliabor College</h3>
  </div>
<?php
require_once '../require/config.php';

//videos for a Speaker
if(isset($_GET['s'])){
  $speaker_name=$_GET['s'];
  $audios = "select saved_as, title, subject, course, semester from media WHERE speaker='$speaker_name' and type='1' ";
  $result=$connect->query($audios);
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
          <audio width="100%" controls>
          <source src="../media/audio/<?php echo $saved_as; ?>" type="audio/mp3">
          </source>
        </audio>
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
?>
</body>
</html>
