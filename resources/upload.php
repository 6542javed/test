<?php require "../require/head.html"; ?>
<link rel="stylesheet" href="../styles/style.css">
<title>Upload Page</title>
</head>
<body>
<div style="z-index:1; position:fixed; top:0px; left:0px; right: 0px;" id="header">
    <div class="logo">
      <img src="../images/logo.JPG" alt="KC Logo" width="100px"></img>
    </div>
    <div class="brand">
    Digital Library of Kaliabor College
    </div>
  </div>
  <div class="container" style="padding-top: 50px;">
<?php
  if($_GET['t']=='e'){
?>
<div>
  <form class="form-horizontal" method="POST" action="uploading.php" enctype="multipart/form-data">
    <div class="form-group">
      <label class="form-label" for="name">Title:</label>
      <input class="form-control" type="text" id="name" name="name" required>
    </div>
    <div class="form-group">
      <label class="form-label" for="author">Author:</label>
      <input class="form-control" type="text" id="author" name="author" required>
    </div>
    <div class="form-group">
      <label class="form-label" for="file">Upload File Here:</label>
      <input class="form-control-file" type="file" id="file" name="file" required>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary" name="button">Upload</button>
    </div>
  </form>
</div>

  <?php }
  else if($_GET['t']=='a' || $_GET['t']=='v'){
?>
<div>
  <form class="form-horizontal" method="POST" action="uploading.php" enctype="multipart/form-data">
    <div class="form-group">
      <label class="form-label" for="topic">Topic:</label>
      <input class="form-control" type="text" id="topic" name="topic" required>
    </div>
    <div class="form-group">
      <label class="form-label" for="subject">Subject:</label>
      <input class="form-control" type="text" id="subject" name="subject" required>
    </div>
    <div class="form-group">
      <label class="form-label" for="speaker">Speaker:</label>
      <input class="form-control" type="text" id="speaker" name="speaker" required>
    </div>
    <div class="form-group">
      <label class="form-label" for="Course">Course:</label>
      <input class="form-control" type="text" id="Course" name="course" required>
    </div>
    <div class="form-group">
      <label class="form-label" for="Semester">Semester:</label>
      <input class="form-control" type="text" id="Semester" name="semester" required>
    </div>
    <div class="form-group">
      <label class="form-label" for="file">Upload File Here:</label>
      <input class="form-control-file" type="file" id="file" name="file" required>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary" name="media" value="<?php echo $_GET['t']; ?>">Upload</button>
    </div>
  </form>
</div>
<?php }else if($_GET['t']=='y'){ ?>
  <form class="form-horizontal" method="POST" action="uploading.php" enctype="multipart/form-data">
    <div class="form-group">
      <label class="form-label" for="topic">Youtube Link</label>
      <input class="form-control" type="text" id="topic" name="topic" required>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary" name="media" value="<?php echo $_GET['t']; ?>">Upload</button>
    </div>
  </form>
<?php }else if($_GET['t']=='c' || $_GET['t']=='l'){ ?>
	<form class="form-horizontal" method="POST" action="uploading.php" enctype="multipart/form-data">
    <div class="form-group">
      <label class="form-label" for="name">Title:</label>
      <input class="form-control" type="text" id="name" name="name" required>
    </div>
    <div class="form-group">
      <label class="form-label" for="author">Author:</label>
      <input class="form-control" type="text" id="author" name="author" required>
    </div>
    <div class="form-group">
      <label class="form-label" for="file">Upload File Here:</label>
      <input class="form-control-file" type="file" id="file" name="file" required>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary" name="button">Upload</button>
    </div>
  </form>
<?php } ?>

</div>
</body>
