<script src="../editor/ckeditor.js"></script>
<?php include 'header.php'; 
include 'stats.php';
?>

<html>
<head>
    
    <title>Dashboard</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet"> 
    
</head> 
<body> 
 
        <div class="container-fluid">
        <div class="container mt-5">

        <div class="row">
          <div class="col-md-4 p-2">
          <div class=" text-white pt-4" style="background-image:linear-gradient(to right,blue,skyblue);border-radius:5px;border:1px solid blue "> 
             <div class="row ">
            <div class="col-md-4">
           <h1><i class='icofont icofont-list text-white' style="font-size:50pt"></i></h1></div>
            <div class="col-md-8 ">
           <h2 align="center"> <?php echo $course;?></h2>
            <h5 class="text-center">Total Courses</h5></div></div><br>
            <div class="row bg-light text-dark pt-2">
              <div class="col-md-10">
                <h5>view details</h5></div>
                <div class="col-md-2">
                <h5><a href="allcourses.php"><i class='icofont icofont-circled-right text-dark'></i></a></h5></div></div>
         </div></div>
          <div class="col-md-4 p-2">
          <div class=" text-white pt-4" style="background-image:linear-gradient(to right,deeppink,pink);border-radius:5px;border:1px solid deeppink">
             <div class="row">
            <div class="col-md-4">
           <h1><i class='icofont icofont-users-alt-2 text-white' style="font-size: 50pt"></i></h1></div>
            <div class="col-md-8">
           <h2 align="center"><?php echo $category;?></h2>
            <h5>Course Categories</h5></div></div><br>
            <div class="row bg-light text-dark pt-2">
              <div class="col-md-10">
                <h5>view details</h5></div>
                <div class="col-md-2">
                <h5><a href="allcoursecategories.php"><i class='icofont icofont-circled-right text-dark'></i></a></h5></div></div>
         </div></div>
        <div class="col-md-4 p-2">
          <div class=" text-white pt-4" style="background-image:linear-gradient(to right,#ec5800,#ff7f00);border-radius:5px;border:1px solid  #ec5800">
             <div class="row">
            <div class="col-md-4">
           <h1><i class='icofont icofont-ui-file text-white' style="font-size: 50pt"></i></h1></div>
            <div class="col-md-8">
           <h2 align="center"> <?php echo $type;?></h2>
            <h5>Course Types</h5></div></div><br>
            <div class="row bg-light text-dark pt-2">
              <div class="col-md-10">
                <h5>view details</h5></div>
                <div class="col-md-2 text-center">
                <h5><a href="allcoursetypes.php"><i class='icofont icofont-circled-right text-dark'></i></a></h5></div></div>
         </div></div></div>
          
         <br><br>
         <hr style="background-color: black;">
<br>
<div class="row " >
 <div class="col-md-12 ">
<h4 class="text-center mb-2 "><a href="allcourses.php" style="text-decoration: none;color:black;"><b>DETAILS OF COURSES</b></a></h4> <br>
        <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" >

            <tr  style=" background-image:linear-gradient(to bottom right,#040348,#0f3b57,#0d6183,#0077b3,#298fbd,#228298,#0e81b9);color:white;text-align:center";>

              <th>Image</th>
              <th>Name</th>
              <th>Course Category</th>
              <th>Course Type</th>
              <th>Description</th>
              <th>Addedon</th>
            
            
            </tr>
 
        <?php
          


          $sql="select*from courses order by cid DESC limit 5";
          $result=$conn->query($sql);
          if($result->num_rows>0)
          {
            while($row=$result->fetch_assoc())
            {  
              $cid=$row['cid'];
              echo "<tr>";
              echo "<td><img src='".$row['img']."'name='fileup' width='50px' height='50px' class='rounded-circle'></td>";
              echo "<td>".$row['cname']."</td>";
              echo "<td>".$row['ccat']."</td>";
              echo "<td>".$row['tcat']."</td>";
              echo "<td>".$row['description']."</td>";
              echo "<td>".$row['addedon']."</td>";
              
              echo "</tr>";
            }
          } 
          else
          {
            echo " No course found";
          }

         

      ?>


        </table><br>

      </div>
 </div></div><br>





</div></div>

       

</body>
</html>

<script> CKEDITOR.replace('editor');</script>

<?php include 'footer.php';?>