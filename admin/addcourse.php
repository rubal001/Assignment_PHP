<script src="../editor/ckeditor.js"></script>
<?php include 'header.php'; ?>

<html>
<head>
    
    <title> Add course</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet"> 
    
</head> 
<body> 
 
        <div class="container-fluid">
        <div class="container mt-5">

        <div class="row">

        <div class="col-md-2"></div>
        <div class="col-md-8 bg-light p-3"><br>


        
        <h2 class="text-center mb-3 text-dark">ADD COURSE</h2><br>
        <form method="POST" autocomplete="off"  enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-12">
            <div class="form-group">
              <input type="text" name="cname" class="form-control" placeholder="Title of the course" required>
            </div>
            </div></div>

            <div class="row">
            <div class="col-md-12">
            <div class="form-group"> 
              <label for="fileup">Select a Image:</label>
              <input type="file" name="fileup" id="fileup" required>
            </div>
            </div></div>
            <div class="row">
            <div class="col-md-6">
            <div class="form-group"> 
              <label>Select a Course Category:</label><br/>
      <select class="form-control" name="ccat" required>
  <option value="">Select</option>
<?php
$sql="select * from ccategory order by ccid";
$result=$conn->query($sql);
if($result->num_rows>0)
{
 while($row=$result->fetch_assoc())
{
$cid=$row['ccid'];
echo "<option value='".$row['ccategory']."'>".$row['ccategory']."</option>";
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
  <option value="">Select</option>
<?php
$sql="select * from ctype order by ctid";
$result=$conn->query($sql);
if($result->num_rows>0)
{
 while($row=$result->fetch_assoc())
{
$cid=$row['ctid'];
echo "<option value='".$row['ctype']."'>".$row['ctype']."</option>";
}
}
?>

</select><br/>
             </div>
            </div>
</div>
            <div class="row">
            <div class="col-md-12">
            <div class="form-group">
              <textarea class="form-control" rows="4" cols="73" name="editor" id="editor" placeholder="Description" required></textarea>   
            </div>

            <div class="form-group">
              <input type="submit" name="add" class="btn btn-control  btn-outline-dark" value="Add">
              <input type="reset" name="clear" class="btn btn-control  btn-outline-dark" value="Clear">
            </div>
          </div></div>

       </form>

       <?php

         if(isset($_POST['add']))
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
            
             $txt=addslashes($_POST['editor']);
 
            $sql="insert into courses(cname,img,ccat,tcat,description)values('$_POST[cname]','$target_file','$_POST[ccat]','$_POST[tcat]','$txt');";
            if($conn->query($sql)===TRUE)
            {
              echo "<script> window.alert('Course added successfully');</script>";
            }
            else
            {
              echo "ERROR".$sql."<br>".$conn->error;
            }
          }
}
       ?>
            
    </div>

     <div class="col-md-2">
         <a href="allcourses.php"><button class="btn btn-outline-dark">All Courses</button></a>
     </div>
</div>

</div>
</div>
</body>
</html>

<script> CKEDITOR.replace('editor');</script>

<?php include 'footer.php';?>