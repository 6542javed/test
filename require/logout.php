<?php
session_start();
    // to check the name of the current file (not necessary here but just for knowledge purpose)
    // $filename= basename($_SERVER['PHP_SELF']);
    session_destroy();
    header("Location: ../index.php");
?>
