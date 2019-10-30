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
    <?php

    ?>
  </div>
  <div class="container" id="ebooksPageContent">
    <h1 id="underline">E-Books</h1>
    <form class="form-inline" action="search.php?s=<?php if(isset($_GET['search_term']))echo $_GET['search_term'];?>" method="get">
      <div class="form-group">
        <input type="text" class="form-control" id="exampleInputName2" placeholder="Search" name="search_term">
      </div>
      <button type="submit" class="btn btn-primary">Search</button>
    </form>
    <?php
    $search = ""; //Default its blank, so evrything gets showed lol
    $query = "SELECT name,saved_as,thumbname FROM document WHERE name LIKE '%$search%'";
    $result=$connect->query($query);
    while($data = mysqli_fetch_row($result)){
        $name = $data[0];
        $saved_as = $data[1];
        $thumbname = $data[2];
      ?>
      <div style="padding:10px 10px;" class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
        <div style="border:1px solid black;" class="thumbnail">
          <img src="../media/pdf/thumbs/<?php echo $thumbname ?>.jpeg" alt="...">
          <div class="caption">
            <h4><?php echo $name; ?></h4>
            <p style="padding:0px 0px;" align="center">
              <a href="../media/pdf/<?php echo $saved_as; ?>" type="application/pdf" target="_blank" class="btn btn-primary" role="button">View PDF</a>
            </p>
          </div>
        </div>
      </div>
    <?php }
    ?>
  </div>
</body>
</html>
