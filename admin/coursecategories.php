<?php include 'header.php'; ?>

<html>
<head>
    
    <title>course category</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet"> 
    <link href="astyle1.css" rel="stylesheet">
    
</head> 
<body > 

        <div class="container-fluid">
        <div class="container mt-5"><br>
        <div class="row">
     <div class="col-md-3"></div> 
        <div class="col-md-6 bg-light p-4"><br><br>
        
        <h2 class="text-center mb-3 text-dark">ADD COURSE CATEGORY</h2><br><br>
        <form method="POST" autocomplete="off">
            
            <div class="form-group">
              <input type="text" name="cc" class="form-control" placeholder="Enter course category" required>
            </div>
            <br>
            <div class="form-group">
              <input type="submit" name="save" style="background-image:linear-gradient(to bottom right,#040348,#0f3b57,#0d6183,#0077b3,#298fbd,#228298,#0e81b9);color:white; " class="btn btn-outline-dark btn-block" value="Add Course Catagory">


              
            </div>
            <br><br>

       </form>
          
       </div>
       <div class="col-md-1"></div>

        <div class="col-md-2">  
         <a href="allcoursecategories.php"><button class="btn btn-outline-dark">All Course Categories</button></a>
 
     </div>

      <?php

          
         if(isset($_POST['save']))
         {
            $sql="insert into ccategory(ccategory)values('$_POST[cc]');";
            if($conn->query($sql)===TRUE)
            {
              echo "<script> window.alert('Course Category added successfully');</script>";
            }
            else
            {
              echo "ERROR".$sql."<br>".$conn->error;
            }
          }
 ?>

       </table>
       </div>
       <br>
       </div>
            

    </div>
            
    </div>
    </div>

</body>
</html>

<?php include 'footer.php';?>