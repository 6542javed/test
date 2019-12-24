<?php
require '../require/head.html';
require_once '../require/config.php';

?>
<link rel="stylesheet" href="styles/ebooks.css">
</head>
<body id="ebookPage">
  <div style="z-index: 1; position:fixed; top:0px; left:0px; right:0px;" id="header">
    <div class="logo">
      <img src="images/logo.PNG" alt="KC Logo" width="100px"></img>
    </div>
    <div class="brand">
      Digital Library of Kaliabor College
    </div>
  </div>
  <div class="container-fluid" id="ebooksPageContent">
    <h1 id="underline">
      <?php
      if(isset($_GET['local'])){
        echo "PDF \ Local";
      }
      else if(isset($_GET['college'])){
        echo "PDF \ College";
      }
      else if(isset($_GET['other'])){
        echo "PDF \ Other";
      }
      else if(isset($_GET['viewAll'])){
        echo "PDF";
      }
      else if(isset($_GET['search_term']) && !empty($_GET['search_term'])){
        echo "Showing results for: ".htmlentities($_GET['search_term']);
      }
      else echo "PDF";
      ?>
    </h1>
    <!-- <span style="font-size: 2.5em;" id="underline">E-Books</span> -->
    <form class="form-inline" action="books? <?php if(isset($_GET['search_term']) && !empty($_GET['search_term'])){ echo htmlentities($_GET['search_term']); } ?>" method="get">
      <div id="ebooksBtnRow" class="row">
        <div id="search" class="input-group">
        <input type="text" class="form-control"  style="z-index:auto;" id="exampleInputName2" name="search_term" placeholder="Search for...">
        <span class="input-group-btn">
          <button id="search-btn" class="btn btn-primary" type="submit"> <span class="glyphicon glyphicon-search"></span> </button>
        </span>
      </div>
        <div id="filter" class="dropdown">
          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <span class="glyphicon glyphicon-filter"></span> Filter by
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="books?local">Local Publishes</a></li>
            <li><a href="books?college">College Publishes</a></li>
            <li><a href="books?other">Other Ebooks</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="books?viewAll">View All</a></li>
          </ul>
        </div>
      </div>
    </form>
    <?php
    if(isset($_GET['search_term']) && !empty($_GET['search_term']) ){
        $search = htmlentities($_GET['search_term']);
        $query = "SELECT name,saved_as,thumbname FROM document WHERE name LIKE '%$search%'";
      }
      else if( isset($_GET['local'])){
        $query = "SELECT name,saved_as,thumbname FROM document WHERE type='l' ";
      }
      else if(isset($_GET['college'])){
        $query = "SELECT name,saved_as,thumbname FROM document WHERE type='c' ";
      }
      else if(isset($_GET['other'])){ // here other actually means the ebooks files
        $query = "SELECT name,saved_as,thumbname FROM document WHERE type='e' ";
      }
      else if(isset($_GET['viewAll'])){
        $query = "SELECT name,saved_as,thumbname FROM document";
      }

      else{ //Default its blank, so everything gets showed lol
        $query = "SELECT name,saved_as,thumbname FROM document";
      }

      $result=$connect->query($query);
      while($data = mysqli_fetch_row($result)){
          $name = $data[0];
          $saved_as = $data[1];
          $thumbname = $data[2];

          //LIMITING THE TITLE Name
          $lm_name = (strlen($name) > 19) ? substr($name,0,16).'...' : $name;
        ?>
        <div style="padding:10px 10px;" class="col-xs-6 col-sm-4 col-md-2">
          <div style="border:1px solid black;" class="thumbnail">
            <img src="media/pdf/thumbs/<?php echo $thumbname ?>.jpeg" alt="...">
            <div class="caption">
              <h4 title="<?php echo $name ?>"><?php echo $lm_name; ?></h4>
              <p style="padding:0px 0px;" align="center">
                <a href="media/pdf/<?php echo $saved_as; ?>" type="application/pdf" target="_blank" class="btn btn-primary" role="button">View PDF</a>
              </p>
            </div>
          </div>
        </div>
      <?php }


    ?>
      </div>
</body>
</html>
