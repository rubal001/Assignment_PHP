<?php include 'header.php'; ?>

<html>
<head> 
 
<title>All course types</title>   
<link href="../css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
    
 <div class="container-fluid">
 <div class="container mt-3">
      
 <div class="row"> 
    
    
   <div class="col-md-12">
   <h1 class="text-center mb-3 text dark">All Course Types</h1><br>
   <div class="table responsive">
        <table class="table table-striped table-bordered table-hover" style="text-align:center;">
            
          <tr style="background-image:linear-gradient(to bottom right,#040348,#0f3b57,#0d6183,#0077b3,#298fbd,#228298,#0e81b9);color:white; ">

             <th>Course Type</th>
             <th>Delete</th>
             <th>Edit</th>
             
          </tr>
         <?php

          $sql="select* from ctype order by ctid DESC";
          $result=$conn->query($sql);
          if($result->num_rows>0)
          {
            while($row=$result->fetch_assoc())
            {  
              $ctid=$row['ctid'];
              echo "<tr>";
              echo "<td>".$row['ctype']."</td>";
              echo "<td><a href='allcoursetypes.php?delid=$ctid'><i class='icofont icofont-bin text-dark'></i></a></td>";
              echo "<td><a href='editcoursetype.php?edid=$ctid'><i class='icofont icofont-edit  text-dark'></i></a></td>";
              echo "</tr>";
            }
          } 
          else
          {
            echo "<script>window.alert('No course type found');</script>";
          }

           if(isset($_GET['delid']))
         {
            $sql="DELETE from ctype where ctid='$_GET[delid]'";
            if($conn->query($sql)===TRUE)
            {
              echo "<script> window.alert('course type deleted successfully');
              window.location='allcoursetypes.php';
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