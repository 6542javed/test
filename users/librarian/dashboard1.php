<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
  <script src="../../bootstrap/js/bootstrap.js"></script>
  <script src="../../bootstrap/js/jquery.min.js"></script>
  <script src="../../bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../../styles/style.css">
<meta charset="utf-8">
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

<?php
session_start();
 if(isset($_SESSION['user'])){ ?>
<div id="uploadFiles" class="container-fluid">
  <center><h1>Upload File</h1></center>
  <div class="sectionContent">
  <ul id="upload_list">
    <center><li><a href="resources/upload.php?t=e" data-toggle="modal">Ebook</a></li></center><br><br>
    <center><li><a href="resources/upload.php?t=c" data-toggle="modal">College Publications</a></li></center><br><br>
    <center><li><a href="resources/upload.php?t=l" data-toggle="modal">Local Publications</a></li></center><br><br>
    <center><li><a href="resources/upload.php?t=a" data-toggle="modal">Audio</a></li></center><br><br>
    <center><li><a href="resources/upload.php?t=v" data-toggle="modal">Video</a></li></center><br><br>
    <center><li><a href="resources/upload.php?t=q" data-toggle="modal">Question Paper</a></li></center>
  </ul>
  </div>
</div>

<?php } ?>
