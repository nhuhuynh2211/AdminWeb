<?php
 session_start();
// Require database & thông tin chung
require "condb.php";
 
session_unset();

// Xoá session
session_destroy();
 header("location: index.html");
?>