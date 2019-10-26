<?php
require '../require/head.html';
require_once '../require/config.php';
?>
</head>
<body id="ebookPage">
  <div style="z-index: 1; position:fixed; top:0px; left:0px; right:0px;" id="header">
    <div class="logo">
      <img src="../images/logo.JPG" alt="KC Logo" width="100px"></img>
    </div>
    <div class="brand">
    Digital Library of Kaliabor College
    </div>
  </div>
  <div class="container" id="ebooksPageContent">
    <h1 id="underline">E-Books</h1>
  <?php
$query = "select name from ebook";
$result=$connect->query($query);
while($data = mysqli_fetch_row($result)){
$title = $data[0];
?>
<div style="padding:10px 10px;" class="col-xs-6 col-sm-4 col-md-2">
    <div style="border:1px solid black;" class="thumbnail">
    <img src="../images/<?php echo $title ?>.jpg" alt="...">
    <div class="caption">
      <h4><?php echo $title; ?></h4>
      <p style="padding:0px 0px;" align="center">
      <a href="../media/pdf/<?php echo $title; ?>.pdf" type="application/pdf" target="_blank" class="btn btn-primary" role="button">View PDF</a>
      </p>
    </div>
  </div>
</div>
<?php }
 ?>
</div>
</body>
</html>
