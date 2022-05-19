<?php 
session_start();
if (!(isset($_SESSION['auth']) && $_SESSION['auth'] == true)) {
	header("Location: admin.php");
	exit();
}

if (isset($_SESSION['admin'])) {
     $admin = $_SESSION['admin'];
}

?>


<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example">
                <span class="sr-only">:</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a style= "font-family: 'Bebas Neue', cursive; font-size:30px" class="navbar-brand" href="admin.php">| Library Management System |</a>
        </div>
        <img src="https://assets.webiconspng.com/uploads/2016/12/User-Icon.png" alt="All books" style="width:60px; height:59px; margin-left: 1005px; opacity:0.9; border-radius: 10px; margin-top: 6px">

        <div class="collapse navbar-collapse" id="bs-example">
            <ul class="nav navbar-nav">
                <?php if(isset($admin)) { ?>  
                <li class="active"><a style="font-family: 'Bebas Neue', cursive; font-size: 22px"  href="admin.php">Home</a></li>
                <li class="active"><a style="font-family: 'Bebas Neue', cursive; font-size: 22px" href="bookstable.php">Books</a></li>
                <li class="active"><a style="font-family: 'Bebas Neue', cursive; font-size: 22px" href="viewstudents.php">Students</a></li>
                <li class="active"><a style="font-family: 'Bebas Neue', cursive; font-size: 22px" href="borrowedbooks.php">Issued books</a></li>
                <li class="active"><a style="font-family: 'Bebas Neue', cursive; font-size: 22px" href="users.php">Admins</a></li>
                <?php } ?>
               
            <ul class="nav navbar-nav navbar-right">
                <li><a style="font-size: 22px; font-colour: black; font-family: 'Bebas Neue', cursive; margin-left: 890px"  href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>