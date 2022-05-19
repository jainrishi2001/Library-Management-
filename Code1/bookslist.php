<?php 
    include "includes/header.php"; 
    include "includes/db-inc.php"; 

?>

<body style="background-image: url(https://images.unsplash.com/photo-1507842217343-583bb7270b66?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1290&q=80); background-attachment:fixed">
<div class="container">
   <!-- navbar ends -->
   <!-- info alert -->
   <div class="alert alert-warning col-lg-7 col-md-12 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-0 col-sm-offset-1 col-xs-offset-0" style="margin-top:70px">
      <span class="glyphicon glyphicon-book"></span>
      <strong style="font-size:23px">List Of Books In Library</strong>
   </div>
</div>
<div class="container">
   <div class="row">
            <a href="index.php"><button class="btn btn-success col-lg-3 col-md-4 col-sm-11 col-xs-11 button" style="margin-left: 15px;margin-bottom: 5px"><span class="glyphicon glyphicon-home"></span>&nbsp&nbspHOME</button></a>
   </div>

   <div class="panel panel-default">
      <table class="table table-bordered">
         <thead>
            <tr>
               <th>Book Id</th>
               <th>Book Title</th>
               <th>Author</th>
               <th>ISBN</th>
               <th>Publisher Name</th>
               <th>Categories</th>
               <th>Call Number</th>
            </tr>
         </thead>
         <?php 
            $sql = "SELECT * from books";
            
            $query = mysqli_query($conn, $sql); 
            $counter = 1;
            while ($row = mysqli_fetch_array($query)) { ?>
         <tbody>
            <td><?php echo $row['bookId']; ?></td>
            <td><?php echo $row['bookTitle']; ?></td>
            <td><?php echo $row['author']; ?></td>
            <td><?php echo $row['label']; ?></td>
            <td><?php echo $row['publisherName']; ?></td>
            <td><?php echo $row['categories']; ?></td>
            <td><?php echo $row['callNumber']; ?></td>
         </tbody>
         <?php 	}
            ?>
      </table>
   </div>
</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>	
</body>
</html>