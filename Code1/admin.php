<?php
   session_start(); 
   // session_destroy();
   if (!(isset($_SESSION['auth']) && $_SESSION['auth'] === true)) {
   	header("Location: index.php");
   	exit();
   }
   else {
    	$admin = $_SESSION['admin'];
   }
   require 'includes/db-inc.php';
   include "includes/header.php";
   
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title>Admin Home</title>
   </head>
   <body style=  "background-image: url(https://cdn.wallpapersafari.com/51/41/mGQ1Oa.jpg);background-repeat: no-repeat; background-attachment:fixed; background-size:1520px 800px">
      <div class="container">
         <?php include "includes/nav.php"; ?>
         <!-- navbar ends -->
         <!-- info alert -->
         <div style="margin-left:260px" class="alert alert-warning col-lg-7 col-md-12 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-0 col-sm-offset-1 col-xs-offset-0" style="margin-top:70px">
            <h4 style="margin-top:70px; font-size:25px; color:black" class="center-block"><strong>ADMIN DASHBOARD</strong> </h4>
         </div>
      
<style>
* {
  box-sizing: border-box;
}
 
.column {
  float: left;
  width: 33.33%;
  padding: 15px;
}
 
/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>
 
<div class="row" style = "margin-top: 200px">
  <div class="column">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQi4_9aiiXIIpWSzPxrPDLNAyO_LSaGah_mFQ&usqp=CAU" alt="All books" style="width:300px; height:275px; margin-left: 170px; opacity:0.9; border-radius: 100px; margin-top:50px">
  </div>
  <div class="column">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQ_QDCi3kg5HR9slp9Kr9BTQG_6Pw-ILgMXCx7ZmROzrXsA1QvHE1YXewn8FO-H7UTvkY&usqp=CAU" alt="Students list" style="width:290px; height:275px; margin-left: 90px; opacity:0.9; border-radius: 100px; margin-top:50px">
  </div>
  <div class="column">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRI4xC3X1eqH4atIucdTR5yLHP0CVOZuKApmw&usqp=CAU" alt="Borrowed" style=" width:300px; height:275px; margin-right: 155px; opacity:0.9; border-radius: 100px; margin-top:50px">
  </div>
</div>


         <div style="margin-left:200px" class="row">
            <a href="bookstable.php"><button class="btn btn-success col-lg-3 col-md-4 col-sm-11 col-xs-11 button" style="margin-left: 2px; margin-bottom: 5px; font-size:18px; color:black;margin-right: 1px"><span class="glyphicon"></span> All Books </button></a>
            <a href="viewstudents.php"><button class="btn btn-success col-lg-3 col-md-4 col-sm-11 col-xs-11 button" style="margin-left: 60px;margin-bottom: 5px; font-size:18px; color:black"><span class="glyphicon"></span> Students List</button></a>
            <a href="borrowedbooks.php"><button class="btn btn-success col-lg-3 col-md-4 col-sm-11 col-xs-11 button" style="margin-left: 75px;margin-bottom: 5px; font-size:18px; color:black"><span class="glyphicon"></span> Borrowed Books</button></a>      
         </div>
      </div>
      </div>
      <script type="text/javascript" src="js/jquery.js"></script>
      <script type="text/javascript" src="js/bootstrap.js"></script>	
   </body>
</html>