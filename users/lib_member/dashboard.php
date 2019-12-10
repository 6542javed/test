<?php
session_start();
require "../../require/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Digital library</title>
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
  <script src="../../bootstrap/js/bootstrap.js"></script>
  <script src="../../bootstrap/js/jquery.min.js"></script>
  <script src="../../bootstrap/js/bootstrap.min.js"></script>
  <script src="../../styles/javascript.js"></script>
  <link rel="stylesheet" href="../../styles/dashboard.css">
  <meta charset="utf-8">
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script type="text/javascript">
  var count_qImages = 5;

  function addMore(file_div_qPaper){
    var file_div_qPaper = document.getElementById(file_div_qPaper);

    // var input_bar = document.createElement('INPUT');
    // input_bar.setAttribute('type','file');
    // input_bar.setAttribute('name','qPaper_'+count_qImages);
    // // input_bar.name = "qPaper_"+count_qImages;
    // // input_bar.type = file;
    //
    // file_div_qPaper.input.add(input_bar);
    count_qImages++;

    if(count_qImages<=20){
    newInput = "qPaper_"+count_qImages;
    file_div_qPaper.insertAdjacentHTML('beforeend', '<div class="files"><label for="'+newInput+'">Page '+ count_qImages +'</label><input type="file" id="'+newInput+'" name="'+newInput+'" required></input></div>');
    // file_div_qPaper.innerHTML = file_div_qPaper.innerHTML + '<div class="files"><label for="'+newInput+'">Page '+ count_qImages +'</label><input type="file" id="'+newInput+'" name="'+newInput+'"></input></div>';
  }
  else{
    window.alert("Already too many pages.");
  }
}


  function reset(file_div_qPaper){
    var file_div_qPaper = document.getElementById(file_div_qPaper);

    file_div_qPaper.innerHTML = file_div_qPaper.innerHTML;
  }



    // the next button function
    //adding and removing classes for appearence in details and upload_paper file_div_qPaper


    function next(){
      var details = document.getElementById("details");
      var papers = document.getElementById("papers");
      details.classList.remove("div-visible");
      details.classList.add("div-hidden");
      papers.classList.remove("div-hidden");
      papers.classList.add("div-visible");
    }

    function back(){
      var details = document.getElementById("details");
      var papers = document.getElementById("papers");
      papers.classList.remove("div-visible");
      papers.classList.add("div-hidden");
      details.classList.remove("div-hidden");
      details.classList.add("div-visible");
    }


  </script>
</head>
<body>
  <div id="header">
    <div class="logo">
      <img src="../../images/logo.JPG" alt="KC logo" width="100px"></img>
    </div>
    <div class="brand">
      Digital Library of Kaliabor College
    </div>
  </div>
  <div class="containerdiv">
    <div class="menu">
      <ul class="nav sidebar-nav">
        <h3 id="menu_category">Personal</h3>
        <li class="nav-item">
          <a class="nav-link active" href="#home" data-toggle="tab">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../index.php">Visit Site</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#reset_pass" data-toggle="tab">Reset Pasword</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#logout" data-toggle="modal">Log Out</a>
        </li>
        <h3 id="menu_category">Upload</h3>
        <li class="nav-item">
          <a class="nav-link" href="#q_paper" data-toggle="tab">Question Paper</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Up_doc" data-toggle="tab">Document</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#media" data-toggle="tab">Media</a>
        </li>
      </ul>
    </div>
    <div class="tab-content">
      <div class="nav-button">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </div>
      <div id="home" class="tab-pane fade in active">
        <div class="dashboard">
  		<div class="boxcontainer">
          <div class="box">
            Ebooks<br/>
            <div class="count">
              <?php
              $query = "select * from document where type= 'e'";
              if($connect->query($query)){
                $result=$connect->query($query);
                $rows=mysqli_num_rows($result);
                echo $rows;
              } ?>
            </div>

          </div>
          <div class="box">
            College Publishing<br/>
            <div class="count">
              <?php
              $query = "select * from document where type= 'c'";
              if($connect->query($query)){
                $result=$connect->query($query);
                $rows=mysqli_num_rows($result);
                echo $rows;
              } ?>
            </div>
          </div>
          <div class="box">
            Local Publishing<br/>
            <div class="count">
              <?php
              $query = "select * from document where type= 'l'";
              if($connect->query($query)){
                $result=$connect->query($query);
                $rows=mysqli_num_rows($result);
                echo $rows;
              } ?>
            </div>
          </div>
          <div class="box">
            Audios<br/>
            <div class="count">
              <?php
              $query = "select * from media where type= '1'";
              if($connect->query($query)){
                $result=$connect->query($query);
                $rows=mysqli_num_rows($result);
                echo $rows;
              } ?>
            </div>
          </div>
          <div class="box">
            Videos<br/>
            <div class="count">
              <?php
              $query = "select * from media where type= '0'";
              if($connect->query($query)){
                $result=$connect->query($query);
                $rows=mysqli_num_rows($result);
                echo $rows;
              } ?>
            </div>
          </div>
          <div class="box">
            Question Papers<br/>
            <div class="count">
              <?php
              $query = "select * from question_papers ";
              if($connect->query($query)){
                $result=$connect->query($query);
                $rows=mysqli_num_rows($result);
                echo $rows;
              } ?>
            </div>

          </div>
  		</div>
        </div>
      </div>
      <div id="reset_pass" class="tab-pane fade in">
        <div class="dashboard">
          <?php
          $lib_id = $_SESSION['user'];
          if(isset($_POST['old']) && isset($_POST['new']) && isset($_POST['confirm']))
          {
            $old= htmlentities($_POST['old']);
            $new1= htmlentities($_POST['new']);
            $new2= htmlentities($_POST['confirm']);
            if($new1 == $new2)
            {
              require_once "../../require/config.php" ;
              $query = "select username from lib_member where id = '$lib_id' and password = '$old'";
              $result = $connect->query($query);
              if($connect->connect_error){
                die("Operation Failed, Please try after some time.");
              }
              else{
                $rows=mysqli_num_rows($result);
                if($rows == 0){
                  echo '<div class= "alert alert-warning">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  Authentication Failed. Please type in correct password.
                  </div>';
                }
                else{
                  if($old == $new1){
                    echo '<div class= "alert alert-warning">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    New password cannot be same as old password. Please use another password.
                    </div>';
                  }
                  else{
                    $query1="UPDATE lib_member SET password='$new1' WHERE id='$lib_id' and password = '$old'";
                    $connect->query($query1);
                    if($connect->connect_error)
                    die("Operation failed, Please try after some time.");
                    else
                    echo '<script>
                    alert("Password Updated Successfully.");
                    </script>';
                  }
                }
              }
            }
            else{
              echo '<script>
              alert("Passwords don\'t match . Please try again.");
              </script>';
            }
          }
          ?>
          <form class="form-horizontal" action="" method="post">
            <h3>Reset Password</h3>
            <div class="group">
              <input type="password" id="old" name="old" autocomplete="off" required>
              <label class="label-name" for="old"><span class="content-name">Current Password</span>
              </div>
              <div class="group">
                <input type="password" id="new" name="new" autocomplete="off" required>
                <label class="label-name" for="new"><span class="content-name">New Password</span>
                </div>
                <div class="group">
                  <input type="password" id="confirm" name="confirm" autocomplete="off" required>
                  <label class="label-name" for="confirm"><span class="content-name">Confirm New Password</span>
                  </div>
                  <div class="button">
                    <button type="submit" class="submit-button">Update</button>
                  </div>
                </form>
              </div>
            </div>
            <div id="q_paper" class="tab-pane fade in">
              <div class="dashboard">
                <form class="form-horizontal" action="../../resources/upload_paper.php" method="POST" enctype="multipart/form-data">
                  <div id="details">
                    <h3>Upload Question Paper</h3>
                    <div class="group">
                      <input type="text" id="subject" name="subject" autocomplete="off" required></input>
                      <label class="label-name" for="subject"><span class="content-name">Subject</span></label>
                    </div>
                    <div class="group">
                      <input type="text" id="course" name="course" autocomplete="off" required></input>
                      <label class="label-name" for="course"><span class="content-name">Course</span></label>
                    </div>
                    <div class="group">
                      <input type="text" id="year" name="year" autocomplete="off" required></input>
                      <label class="label-name" for="year"><span class="content-name">Year</span></label>
                    </div>
                    <br/>
                    <div class="container-fluid">
                      <div class="form-group">
                        <label class="dropdown-label" for="s1">Course Type</label>
                        <select class="form-control dropdown-select s1" id="s1" name="s1" onchange="insertOptions('s1','s2');">
                          <option value="">Select</option>
                          <option value="HS">HS</option>
                          <option value="TDC">TDC</option>
                        </select>
                      </div>
                    </div>
                    <div class="container-fluid">
                      <div class="form-group">
                        <label class="dropdown-label" for="s2">Standard/Semester</label>
                        <select class="form-control dropdown-select s2" id="s2" name="s2">
                          <option value="--">--</option>
                        </select>
                      </div>
                    </div>
                    <div class="button">
                      <button type="button" class="submit-button" onclick="next();" name="next_button">Next<span class="glyphicon glyphicon-chevron-right"></span></button>
                    </div>
                  </div>
                  <div class="upload_paper div-hidden" id="papers">
                    <h1>Insert Images</h1>
                    <div id="file_div_qPaper" class="form-group">
                      <div class="container-fluid">
                        <p class="alert alert-info">note: Please Upload the Pages Sequentially. No multi-page photo allowed.</p>
                      </div>
                      <div class="files">
                        <label for="qPaper_1">Page 1</label>
                      <input type="file" id="qPaper_1" name="qPaper_1" required></input>
                      </div>
                      <div class="files">
                        <label for="qPaper_2">Page 2</label>
                        <input type="file" id="qPaper_2" name="qPaper_2" required></input>
                      </div>
                      <div class="files">
                        <label for="qPaper_3">Page 3</label>
                        <input type="file" id="qPaper_3" name="qPaper_3" required></input>
                      </div>
                      <div class="files">
                        <label for="qPaper_4">Page 4</label>
                        <input type="file" id="qPaper_4" name="qPaper_4" required></input>
                      </div>
                      <div class="files">
                        <label for="qPaper_5">Page 5</label>
                        <input type="file" id="qPaper_5" name="qPaper_5" required></input>
                      </div>
                    </div>
                    <div class="button">
                      <button class="add-more-btn prev" type="button" name="add_more_btn" onclick="back('file_div_qPaper');"><span class="glyphicon glyphicon-chevron-left"></span>Previous</button>
                      <button class="add-more-btn" type="button" name="add_more_btn" onclick="addMore('file_div_qPaper');">Add More Images</button>
                      <button class="add-more-btn reset" type="button" onclick="reset('file_div_qPaper');" name="add_more_btn">Reset</button>
                      <button class="add-more-btn submit right" type="submit" name="submit-upload-page-btn">UPLOAD</button>
                    </div>
                  </div>

                </form>
              </div>
            </div>
            <div id="Up_doc" class="tab-pane fade in">
              <div class="dashboard">
                <form class="form-horizontal" method="POST" action="../../resources/dashuploading.php" enctype="multipart/form-data">
                  <h3>Upload document</h3>
                  <div class="container-fluid">
                    <div class="form-group">
                      <label for="category" class="dropdown-label">Book Type</label>
                      <select class="form-control dropdown-select" id="category" type="radio" name="category" required>
                        <option value="e" selected>Ebook</option>
                        <option value="c">College Publication</option>
                        <option value="l">Local Publication</option>
                        <option value="p">Paid Publication</option>
                      </select>
                    </div>
                  </div>
                  <div class="group">
                    <input type="text" id="name" name="title_book" autocomplete="off" required>
                    <label class="label-name" for="name"><span class="content-name">Title</span></label>
                  </div>
                  <div class="group">
                    <input type="text" id="author" name="author" autocomplete="off" required>
                    <label class="label-name" for="author"><span class="content-name">Author</span></label>
                  </div>
                  <div class="file">
                    <input type="file" id="file" name="file" required>
                  </div>
                  <div class="button">
                    <button type="submit" class="submit-button" name="upload_pdf_button">Upload</button>
                  </div>
                </form>
              </div>
            </div>
            <div id="media" class="tab-pane fade in">
              <div class="dashboard">
                <form class="form-horizontal" method="POST" action="../../resources/uploading.php" enctype="multipart/form-data">
                  <h3>Upload Media</h3>
                  <div class="container-fluid">
                    <div class="form-group">
                      <label for="type" class="dropdown-label">Media Type</label>
                      <select class="form-control dropdown-select" id="type" type="radio" name="type" required>
                        <option value="0" selected>Video</option>
                        <option value="1">Audio</option>
                      </select>
                    </div>
                  </div>
                  <div class="group">
                    <input type="text" id="topic" name="topic" autocomplete="off" required>
                    <label  class="label-name" for="topic"><span class="content-name">Topic</span></label>
                  </div>
                  <div class="group">
                    <input type="text" id="subject" name="subject" autocomplete="off" required>
                    <label class="label-name" for="subject"><span class="content-name">Subject</span></label>
                  </div>
                  <div class="group">
                    <input type="text" id="speaker" name="speaker" autocomplete="off" required>
                    <label class="label-name" for="speaker"><span class="content-name">Speaker</span></label>
                  </div>
                  <div class="group">
                    <input type="text" id="Course" name="course" autocomplete="off" required>
                    <label class="label-name" for="Course"><span class="content-name">Course</span></label>
                  </div>
                  <div class="group">
                    <input type="text" id="Semester" name="semester" autocomplete="off" required>
                    <label class="label-name" for="Semester"><span class="content-name">Semester</span></label>
                  </div>
                  <div class="file">
                    <input type="file" id="file" name="file" required>
                  </div>
                  <div class="button">
                    <button type="submit" class="submit-button" name="media" value="">Upload</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- Logout -->
          <div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class=" modal-dialog modal-dialog-centered modal-sm">
              <div class="modal-content">
                <div id="logoutstyle" class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <span class="glyphicon glyphicon-remove"></span>
                  </button>
                  <h4 class="modal-title" id="myModalLabel">
                    Log Out
                  </h4>
                </div>
                <div class="modal-body">
                  <h4>Do you really want to logout?</h4>
                </div>
                <div class="modal-footer"><form action="../../require/logout.php" method="post">
                  <button type="button" class="btn btn-default" data-dismiss="modal">No
                  </button>
                  <button id="logoutstyle" type="submit" name="logout" class="btn btn-default">
                    Yes
                  </button>
                </form>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
      </div>
    </body>
    </html>
