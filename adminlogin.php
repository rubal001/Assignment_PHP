<?php include 'database.php';
session_start();
?> 

<html>
<head>
    
    <title>Admin login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"> 
    <link href="css/astyle1.css" rel="stylesheet">
    <link href="css/icofont.css" rel="stylesheet"/>

</head>
<body style="background-image:url(imgs/a1.jpg);background-repeat:no-repeat;background-size:cover">
    
        <div class="container-fluid">
        <div class="container mt-5">

        <div class="row">
        <div class="col-md-12">

        <a  href="index.php"  style=" text-decoration:none;text-align: center; "> <h2 class="text-center  text-black"><i class="icofont icofont-architecture-alt text-white"></i><span style="color:white">Smart</span><strong style="color:#8fd400">Learning</strong></h2>
        </a>

       </div>
       </div>

        <div class="row">
            
        <div class="col-md-3"></div>
            
        <div class="col-md-6 bc" style="opacity:0.9;border: 1px solid grey;">
        
        <h2 class="text-center mb-3" style="color:black">ADMIN LOGIN</h2>
        <br>
        <form method="POST" autocomplete="off">
            
            <div class="form-group">
              <input type="text" name="nm" class="form-control" placeholder="Enter Your Name" style="border-radius:13px;border: 1px solid grey;" required>
            </div>
            <div class="form-group">
              <input type="password" name="pwd" class="form-control" placeholder="Enter Your Password" style="border-radius:13px;border: 1px solid grey;" required>
            </div>
            <br>
            <div class="form-group">
              <input type="submit" name="save" class="btn btn-outline-dark btn-block" style="border-radius:13px;"  value="LOGIN">
            </div>
            
       </form>

    <?php

      if(isset($_POST['save']))
      {
        $sql="select * from admin where name='$_POST[nm]' and password='$_POST[pwd]'";
        $result=$conn->query($sql);
        if($result->num_rows>0)
        {
          $row=$result->fetch_assoc();
          $_SESSION['aid']=$row['name'];
          
          echo "<script>window.location='admin/dashboard.php';</script>";
        }
        else
        {
           echo "<script>window.alert('Invaild name or password');</script>";
        }
      }
    ?>

       </div>    
            
       <div class="col-md-3"></div>
            
       </div>
            
      </div>
      </div>
    
</body>
</html>