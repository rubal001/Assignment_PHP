<?php include 'header.php';?>
          <div class="container mt-4">

          <div class="row mt-2 mb-2">
<div class="col-md-4"></div>
<div class="col-md-7 text-right">
	<h5><a href="allcourses.php"  style="color: #ed3974"><i class="icofont icofont-eye"></i> All Courses</a></h5>
</div>
<div class="col-md-1"></div></div>
<div class="row pt-2">
 <div class="col-md-12 ">
 	<h2 class="text-center">Add Course Videos </h2><br>
  <form action="" method="post" enctype="multipart/form-data" >
  <div class="row">
<div class="col-md-3"><br><h5> Select Videos for Course : </h5></div>
<div class="col-md-6"><br>
<input type="file" name="file[]" class="form-control" multiple />
<br><br><button type="submit" class="btn btn-dark btn-block" name="sv">Upload Video </button> 
</div> 
 <div class="col-md-3"> </div> 
</div><br/><hr/><hr/>
</form>
<?php

if(isset($_POST['sv']))
{		
$noofvdo=count(($_FILES["file"]["name"]));
$i=0;$countvdo=0;$errorvdo=0;
$target_dir="upload/";
while($i<$noofvdo){

$target_file=$target_dir.basename($_FILES["file"]["name"][$i]);
$filesize=$_FILES["file"]["size"][$i];
$fileType=pathinfo($target_file,PATHINFO_EXTENSION);
$upload_Ok=1;

if($filesize>2097152) { $upload_Ok=0;}
if($fileType!="m4v" && $fileType!="mp4" && $fileType !="ogg" && $fileType!="gif" && $fileType!="mpg" && $fileType !="mpeg" ){ $upload_Ok=0;}
if($upload_Ok==1) {
if(move_uploaded_file($_FILES["file"]["tmp_name"][$i],$target_file)) {
 } 



$sql="INSERT INTO cvideos(courseid,video) VALUES('$_GET[vid]','$target_file');";

	if($conn -> query($sql) === TRUE)
	$countvdo++;
	else
	$errorvdo++;
}
$i++;}
echo "";
}
?>


</div></div>


<div class="row">
	
 <div class="col-md-12 ">
 	
<h4>All Videos: </h4>

 </div>

</div>
<div class="row">


<?php
$vid=$_GET['vid'];
$sql="select * FROM cvideos where courseid='$_GET[vid]' ";
$result=$conn->query($sql);
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{ $qid=$row['courseid'];
	$vdoid=$row['vdoid']; ?>

<div class="col-md-5 pt-4 pb-4 ml-4"> <span class="border border-dark"> <video src="<?php echo $row['video']?>" width='400px' height='250px' controls style=""></video> </span>
<?php echo"<a href='cvideos.php?dlid=$qid&vid=$vid&vdoid=$vdoid'><i class='icofont icofont-trash'></i></a> ";?> </div> 


<?php  }}
else
echo "<br> <div class='col-md-12 pt-4 pb-4'> No video Found </div>";
?>



</div></div>
</div>


<?php 
if(isset($_GET['dlid'])){
$sql="DELETE from cvideos where courseid='$_GET[dlid]' and vdoid='$_GET[vdoid]'";
if($conn->query($sql)==TRUE)
{
echo"<script>window.alert('Record Deleted Successfully');
window.location='cvideos.php?vid=$vid';</script>";
}
else
{
echo"Error:".$sql."<br>".$conn->error;
}
}
?>


<?php include 'footer.php'?>
