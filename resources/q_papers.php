<?php
  require_once "../require/config.php";
  require_once "../require/head.html";
?>

</head>
<body>
<div class="pages col-md-12">
  <?php
  $subject = $_GET['sub'];
  $year = $_GET['year'];
  $course = $_GET['course'];
  $class = $_GET['class'];
  $pages = "select page from question_papers where subject = '$subject' and year = '$year' and course = '$course' and class = '$class' ";
  $result2 = $connect->query($pages);
  echo "<ul class=\"list-inline\" >";
  while($data2=mysqli_fetch_row($result2))
  {
    $page=$data2[0];
    ?>
      <a href="<?php echo 'Question Papers/'.$year.'/'.$subject.'/'.$page ?>" target="_blank"><img src="<?php echo 'Question Papers/'.$year.'/'.$subject.'/'.$page ?>" width="200px"></img></a>
    <?php
  }
  echo "</ul>";
  ?>
</div>
</body>
</html>
