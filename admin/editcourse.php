<script src="../editor/ckeditor.js"></script>
<?php include 'header.php'; ?>

<html>
<head>
    
    <title>Edit Course</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet"> 
    
</head>
<body>

    <div class="container-fluid">
    <div class="container mt-5">

    <div class="row"> 
          
        <div class="col-md-2"></div>



        <?php

        $cid=$_GET['edid'];
        $sql="select * from courses where cid='$_GET[edid]'";
        $result=$conn->query($sql);
        $row=$result->fetch_assoc();

        ?>
        
        
        <div class="col-md-8 bg-light p-3"><br>
        
        <h2 class="text-center mb-3 text-dark">EDIT COURSE</h2><br><br>
       
       <form method="POST" autocomplete="off"  enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-12">
            <div class="form-group">
              <input type="text" name="cname" class="form-control" placeholder="Title of the course"  value="<?php echo $row['cname'];?>" required>
            </div>
            </div>
            
            </div>

            

<div class="row">

            <div class="col-md-6">
            <div class="form-group"> 

               <label>Select a Course Category:</label><br/>
      <select class="form-control" name="ccat" required>
  <option value="<?php echo $row['ccat'];?>"><?php echo $row['ccat']; ?></option>
<?php
$sql1="select * from ccategory where ccategory!='$row[ccategory]' order by ccid";
$result1=$conn->query($sql1);
if($result1->num_rows>0)
{
 while($row1=$result1->fetch_assoc())
{
$cid=$row1['ccid'];
echo "<option value='".$row1['ccategory']."'>".$row1['ccategory']."</option>";
}
}

?>

</select><br/>




            </div>
            </div>

 <div class="col-md-6">
            <div class="form-group"> 

               <label>Select a Course Type:</label><br/>
      <select class="form-control" name="tcat" required>
  <option value="<?php echo $row['tcat'];?>"><?php echo $row['tcat']; ?></option>
<?php
$sql1="select * from ctype where ctype!='$row[ctype]' order by ctid";
$result1=$conn->query($sql1);
if($result1->num_rows>0)
{
 while($row1=$result1->fetch_assoc())
{
$cid=$row1['ctid'];
echo "<option value='".$row1['ctype']."'>".$row1['ctype']."</option>";
}
}

?>

</select><br/>


            </div>
            </div>



            </div>

            <div class="form-group">
              <textarea class="form-control" rows="4" cols="73" name="editor" id="editor" placeholder="Description" required><?php echo $row['description'];?></textarea>   
            </div>

             <div class="row">

            <div class="col-md-8">
            <div class="form-group"> 
              <label for="fileup">Select a Image:</label>
              <input type="file" name="fileup" id="fileup" ><br>

          </div></div>
          <div class="col-md-4">
            <div class="form-group"> 
             <img src='<?php echo $row['img'];?>' height="100" width="100">
             </div>
            </div>
          </div>

            <div class="form-group">
              <input type="submit" name="add" class="btn btn-control  btn-outline-dark" value="update">
              <input type="reset" name="clear" class="btn btn-control  btn-outline-dark" value="Clear">
            </div>
        </form>
      
        <?php


        if(isset($_POST['add']))
        {
          if(!is_uploaded_file($_FILES['fileup']['tmp_name']))
            {
              $uploadok=1;
              $target_file=$row['img'];
            }
          else
           {
            $target_dir="upload/";
            $target_file=$target_dir.basename($_FILES["fileup"]["name"]);
            $uploadok=1;
            $filetype=pathinfo($target_file,PATHINFO_EXTENSION);
            if($_FILES["fileup"]["size"]>2097152)
            {
                echo "sorry,your file is too long.";
                $uploadok=0;
            }
            if($filetype!="jpg"&&$filetype!="png"&&$filetype!="jpeg")
            {
                echo "sorry,only JPEG,JPG,PNG files are allowed";
                $uploadok=0;
            }
            if($uploadok==1)
            {
                if(move_uploaded_file($_FILES["fileup"]["tmp_name"],$target_file))
                {
                    //echo "the file".basename($_FILES["fileup"]["name"]."has been uploaded");
                }
                else
                    echo "sorry,there is an error in uploading your file";
            }

        }
if($uploadok==1)
            {
 $txt=addslashes($_POST['editor']);
        $sql="update courses set cname='$_POST[cname]',ccat='$_POST[ccat]',tcat='$_POST[tcat]',description='$txt',img='$target_file' where cid='$_GET[edid]';";
        if($conn->query($sql)===TRUE)
            {
              echo "<script> window.alert('Course updated successfully');
               window.location='allcourses.php?edid=$cid';</script>";
            }
            else
            {
              echo "ERROR".$sql."<br>".$conn->error;
            }
       }
}

      ?>

      </div>

      <div class="col-md-2"></div>

    </div>

    </div>
    </div>

</body>
</html>
<script> CKEDITOR.replace('editor');</script>
<?php include 'footer.php';?>