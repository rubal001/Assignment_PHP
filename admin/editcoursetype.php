<?php include 'header.php'; ?>

<html>
<head>
    
    <title>Edit Course Type</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet"> 
    
</head>
<body>

    <div class="container-fluid">
    <div class="container mt-5">

    <div class="row"> 
          
        <div class="col-md-3"></div>


        <?php

        $ctid=$_GET['edid'];
        $sql="select * from ctype where ctid='$_GET[edid]'";
        $result=$conn->query($sql);
        $row=$result->fetch_assoc();

        ?>
        
        
        <div class="col-md-6 bg-light p-4"><br>
        
        <h2 class="text-center mb-3 text-dark">EDIT COURSE TYPE</h2><br><br>
       
       <form method="POST" autocomplete="off">

             <div class="form-group">
              <input type="text" name="ct" class="form-control" placeholder="Enter course type"  value="<?php echo $row['ctype'];?>" required>
            </div>
            <br>
            <div class="row">
             <div class="col-md-6">
            <div class="form-group text-center">

              <input type="submit" name="add" style=" background-image:linear-gradient(to bottom right,#040348,#0f3b57,#0d6183,#0077b3,#298fbd,#228298,#0e81b9);color:white;" class="btn btn-outline-dark btn-block" value="Update"></div></div>
               <div class="col-md-6 ">
                <div class="form-group text-center">
              <input type="reset" name="clear" style=" background-image:linear-gradient(to bottom right,#040348,#0f3b57,#0d6183,#0077b3,#298fbd,#228298,#0e81b9);color:white;" class="btn btn-outline-dark btn-block" value="Clear">

            </div></div></div>
            <br>

            
        </form>
      
        <?php


        if(isset($_POST['add']))
        {
            {
        $sql="update ctype set ctype='$_POST[ct]'  where ctid='$_GET[edid]';";
        if($conn->query($sql)===TRUE)
            {
              echo "<script> window.alert('course type updated successfully');
             window.location='allcoursetypes.php?edid=$ctid';</script>";
            }
            else
            {
              echo "ERROR".$sql."<br>".$conn->error;
            }
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
<?php include 'footer.php';?>