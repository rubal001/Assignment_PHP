<?php include 'header.php'; ?>

<html>
<head> 
 
<title>All courses</title>   
<link href="../css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
    
 <div class="container-fluid">
 <div class="container mt-3">
      
 <div class="row"> 
    
  
    
   <div class="col-md-12">
   <h1 class="text-center mb-3 text dark"> ALL COURSES</h1><br>
   <div class="table responsive">
        <table class="table table-striped table-bordered table-hover" style="text-align:center;">
            
             <tr style="background-image:linear-gradient(to bottom right,#040348,#0f3b57,#0d6183,#0077b3,#298fbd,#228298,#0e81b9);color:white; ">

             <th>Image</th>
             <th>Title</th>
             <th> Course Category</th>
             <th>Course Type</th>
             <th>Description</th>
             <th>Addedon</th>
             <th>Upload Videos</th>
             <th>Delete</th>
             <th>Edit</th>
            
             
          </tr>


          <?php

          $sql="select* from courses order by cid DESC";
          $result=$conn->query($sql);
          if($result->num_rows>0)
          {
            while($row=$result->fetch_assoc())
            {  
              $cid=$row['cid'];
              echo "<tr>";
              echo "<td><img src='".$row['img']."' height='50' width='50'></td>";
              echo "<td>".$row['cname']."</td>";
              echo "<td>".$row['ccat']."</td>";
              echo "<td>".$row['tcat']."</td>";
              echo "<td>".$row['description']."</td>";
              echo "<td>".$row['addedon']."</td>";

              echo "<td><a href='cvideos.php?vid=$cid'><i class='icofont icofont-plus text-dark'></i></a></td>";
              echo "<td><a href='allcourses.php?delid=$cid'><i class='icofont icofont-bin text-dark'></i></a></td>";
              echo "<td><a href='editcourse.php?edid=$cid'><i class='icofont icofont-edit  text-dark'></i></a></td>";
              

              echo "</tr>";
            }
          } 
          else
          {
            echo "<script>window.alert('No course found');</script>";
          }



           if(isset($_GET['delid']))
         {
            $sql="DELETE from courses where cid='$_GET[delid]'";
            if($conn->query($sql)===TRUE)
            {
              echo "<script> window.alert('Course deleted successfully');
              window.location='allcourses.php';
              </script>";

            }
            else
            {
              echo "ERROR".$sql."<br>".$conn->error;
            }
          } 

        ?>
            
      </table>
      </div>
      </div>  
    
 
 </div>
     
 </div>
 </div>
    
</body>
</html>

<?php include 'footer.php';?>