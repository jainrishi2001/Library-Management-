<?php
   session_start(); 
   
   if ((isset($_SESSION['auth']) && $_SESSION['auth'] === true)) {
   	header("Location: admin.php");
   	exit();
   }
   
   	if (isset($_GET['access'])) {
   		$alert_user = true;
   	}
   
   require 'includes/snippet.php';
   require 'includes/db-inc.php';
   include "includes/header.php";
   
   
   
   echo"<br>";
   
   if(isset($_POST['submit'])){
   	$username = sanitize(trim($_POST['username']));
   	$password = sanitize(trim($_POST['password']));
   
   	$sql_admin = "SELECT * from admin where username = '$username' and  password = '$password' ";
   	$query = mysqli_query($conn, $sql_admin);
   	// echo mysqli_error($conn);
   	if(mysqli_num_rows($query) > 0)
   	{
   			
   				while($row = mysqli_fetch_assoc($query)){
   					$_SESSION['auth'] = true;
   					$_SESSION['admin'] = $row['username'];		
   					}
   					if ($_SESSION['auth'] === true) {
   				header("Location: admin.php");
   				exit();
   					}
   	}
   		
   			else {
   						echo"<div class='alert alert-success alert-dismissable'>
   						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
   						<strong style='text-align: center'> Wrong Username and Password.</strong>  </div>";
   					}		
   					
   						
   
   		
   			}
   					
   ?>
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
</head>
<body style=  "background-image: url(https://w0.peakpx.com/wallpaper/806/748/HD-wallpaper-books-kiss-library-love-romance-stairs-table.jpg); background-attachment:fixed";>
<div class="container">
   <div class="container  col-lg-9 col-md-11 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-1 col-sm-offset-0 col-xs-offset-0  ">
      <div class="jumbotron login col-lg-10 col-md-11 col-sm-12 col-xs-12">
         <p class="page-header" style="text-align:center; color:black; font-size: 30px; font-family: 'Roboto Condensed', sans-serif;">ADMIN LOGIN</p>
         <div class="container">
            <form class="form-horizontal" role="form" method="post" action="index.php" enctype="multipart/form-data">
               <div class="form-group">
                  <label style="font-family:verdana" for="Username" class="col-sm-2 control-label">Username</label>
                  <div class="col-sm-10">
                     <input type="text" class="form-control" name="username" placeholder="Admin" id="username" required>
                  </div>
               </div>
               <div class="form-group">
                  <label style="font-family:verdana" for="Password" class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-10">
                     <input type="password" class="form-control" name="password" placeholder="Enter Password" id="password" required>
                  </div>
               </div>
               <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                     <input style="margin-left: 115px" type="submit" class="btn btn-info col-lg-4" name="submit" value="Sign In">
                  </div>
               </div>
         </div>
         </form>
      </div>
   </div>
</div>
</div>
<div class="container">
   <div class="row row-sm-10" style="align-content: center;">
         <a href="bookslist.php"><button class="btn btn-success col-lg-3 col-md-4 col-sm-11 col-xs-11 button" style="margin-left: 620px;margin-bottom: 5px"><span class="glyphicon glyphicon-home"></span>&nbsp&nbspVIEW BOOKS</button></a>
   </div>
</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/sweetalert.min.js"> </script> 

<?php if (isset($alert_user)) { ?>
<!-- <script type="text/javascript">
   swal("Oops...", "You are not allowed to view this page directly...!", "error");
</script> --> 
<?php } ?>
</body>
</html>