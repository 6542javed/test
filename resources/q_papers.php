<?php
require_once "../require/config.php";
require_once "../require/head.html";
?>
</head>
<body>
  <div id="header">
    <div class="logo">
      <img src="images/logo.png" alt="KC logo" width="100px"></img>
    </div>
    <div class="brand">
      Digital Library of Kaliabor College
    </div>
  </div>
    <?php
    if(isset($_GET['sub']) && isset($_GET['year']) && isset($_GET['course']) && isset($_GET['class']) && isset($_GET['num_pages']) && isset($_GET['q_id'])){
      $subject = htmlentities($_GET['sub']);
      $year = htmlentities($_GET['year']);
      $course = htmlentities($_GET['course']);
      $class = htmlentities($_GET['class']);
      $num_pages = htmlentities($_GET['num_pages']);
      $q_id = htmlentities($_GET['q_id']);
?>
<div>
  <center><h1 class="question-paper-heading"><?php echo $subject.' - '.$year; ?></h1></center>
</div>
  <div class="pages">

<?php
      for($i=1 ; $i<= $num_pages; $i++){
        ?>
        <div class="eachpage">
          <a href="<?php echo 'media/question_papers/'.$year.'_'.$subject.'_'.$q_id.'_'.$i.'.jpg' ?>" target="_blank">
            <center><p>Page <?php echo $i; ?></p></center>
            <img src="<?php echo 'media/question_papers/'.$year.'_'.$subject.'_'.$q_id.'_'.$i.'.jpg' ?>" width="200px"></img>
          </a>
        </div>
<?php
      }
  ?>
  </div>
  <?php
    }
    else if(isset($_GET['all'])){
      $folder = "select distinct subject, year, course, class, num_pages, q_id from question_papers";
      $result=$connect->query($folder);
      ?>
      <div>
        <center><h1 class="question-paper-heading">Question Papers</h1></center>
      </div>
      <table class="table table-hover table-responsive">
        <tr id="table_title">
          <th>Subject</th>
          <th>Year</th>
          <th>Course</th>
          <th>Standard</th>
        </tr>
        <?php
        while($data = mysqli_fetch_row($result)){
          $subject = $data[0];
          $year = $data[1];
          $course = $data[2];
          $class = $data[3];
          $num_pages = $data[4];
          $q_id = $data[5];
          ?>
          <tr>
            <td><a href="questionpapers?sub=<?php echo $subject; ?>&year=<?php echo $year;?>&course=<?php echo $course;?>&class=<?php echo $class; ?>&num_pages=<?php echo $num_pages; ?>&q_id=<?php echo $q_id; ?>" target="_blank"><?php echo $subject; ?></a></td>
            <td><?php echo $year; ?></td>
            <td><?php echo $course; ?></td>
            <td><?php echo $class; ?></td>
          </tr>
        <?php } ?>
      </table>
    <?php } ?>
</body>
</html>
